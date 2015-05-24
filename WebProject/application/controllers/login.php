<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    //Show login page
    function index() {      
        if (isset($_POST['btn-inlog'])) {
            
            $this->load->library('session');
            $this->load->library('user_agent');
            $this->load->helper('url');

            $this->data['melding'] = "";
            $this->data['username'] = $this->input->post('gebruikersnaam');
            $this->data['password'] = $this->input->post('password');
            

            $this->data['inloggen'] = $this->users_model->login($this->input->post('gebruikersnaam'));

            if (!empty($this->data['inloggen'])) {
                if ($this->data['inloggen']["al_ingelogd"] == 0) { //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!hier moet nog controle bij of de gebruiker al geactiveerd is en dus wel mag inloggen!
                    if ($this->data['inloggen']["password"] == $this->input->post('password')) {
                        $this->firstlogin($this->data['inloggen']["gebruikerID"]);
                        return;
                        
                        //$this->data['gebruikerID'] = $this->data['inloggen']["gebruikerID"];
                        //$this->parser->parse('login/firstlogin.php', $this->data);
                    } else {
                        $this->data['melding'] = "<p class='alert alert-danger'>De gebruikersnaam en wachtwoord komen niet overeen.</p>";
                    }
                } else {
                    $hash = $this->data['inloggen']["password"];

                    if (password_verify($this->input->post('password'), $hash)) {
                        $this->data['melding'] = "<p class='alert alert-success'>Bedankt voor uw inloggen.</p>";
                        $data = array('user' =>$this->data['inloggen']["username"], 'logged_in' => true, 'rolID' =>$this->data['inloggen']["rolID"]);
                        $this->session->set_userdata($data);
                    } else {
                        $this->data['melding'] = "<p class='alert alert-danger'>De gebruikersnaam en wachtwoord komen niet overeen.</p>";
                    }
                }
            } else {
                $this->data['melding'] = "<p class='alert alert-danger'>De gebruikersnaam en wachtwoord komen niet overeen.</p>";
            }

            $this->parser->parse('login/index.php', $this->data);
        } else {
            $this->data['melding'] = "";
            $this->data['gebruikersnaam'] = "";
            $this->data['password'] = "";

            $this->parser->parse('login/index.php', $this->data);
        }
    }

    function firstlogin($gebruikerID) {
        if (isset($_POST['btn-opslaan'])) {

            $this->data['melding'] = "";
            $this->data['gebruikerID'] = $gebruikerID;
            if ($this->input->post('newPassword') != $this->input->post('repeatPassword')) {
                $this->data['melding'] .= "<p class='alert alert-danger'>De wachtwoorden komen niet overeen.</p>";
                
                $this->data['gebruikerID'] = $gebruikerID;
                $this->parser->parse('login/firstlogin.php', $this->data);
            }
            elseif(strlen($this->input->post('newPassword'))<8){
                $this->data['melding'] .= "<p class='alert alert-danger'>Uw wachtwoord moet minimaal 8 karakters lang zijn.</p>";
                
                $this->data['gebruikerID'] = $gebruikerID;
                $this->parser->parse('login/firstlogin.php', $this->data);
            }
            else {
                //hash het wachtwoord
                $hash = password_hash($this->input->post('newPassword'), PASSWORD_DEFAULT);

                //update wachtw van gebruiker met ID
                $this->users_model->updateID(array('password' => $hash, 'al_ingelogd' => 1), array('gebruikerID' => $gebruikerID));

                $this->data['melding'] = "<p class='alert alert-success'>Uw wactwoord is vervangen, u kan nu inloggen met uw nieuw wachtwoord. <br/>U wordt doorverwezen naar de loginpagina.</p>";

                //$this->parser->parse('login/index.php', $this->data);
                $this->parser->parse('login/firstlogin.php', $this->data);
                header('Refresh: 5;url=../index');
            }
        } else {
            $this->data['melding'] = "";
            $this->data['gebruikerID'] = $gebruikerID;
            $this->parser->parse('login/firstlogin.php', $this->data);
        }
    }

    function register() {
        //CAPTCHA NG DOEN!!!!!!!!!!!!!!
        //hier nog invoercontrole, alle velden zijn wel via html required. CI doet anti-sqlinjectie automatisch
        //met de parser kan je de ingevulde velden teruggeven in de value van het tekstvak zodat ze niet alles opnieuw moeten invullen
        //ook controle of de gebruikersnaam en e-mailadres al in gebruik zijn!

        if (isset($_POST['btn-reg'])) {
            $this->data['melding'] = "";

            $this->data['voornaam'] = $this->input->post('voornaam');
            $this->data['familienaam'] = $this->input->post('familienaam');
            $this->data['gebruikersnaam'] = $this->input->post('gebruikersnaam');
            $this->data['email'] = $this->input->post('email');

            $this->data['emailVanDB'] = $this->users_model->doesEmailExist($this->input->post('email'));
            $this->data['usernameVanDB'] = $this->users_model->doesUsernameExist($this->input->post('gebruikersnaam'));

            if (!empty($this->data['usernameVanDB'])) {
                $this->data['melding'] .= "<p class='alert alert-danger'>Deze gebruikersnaam is al in gebruik.</p>";
            }
            if (!empty($this->data['emailVanDB'])) {
                $this->data['melding'] .= "<p class='alert alert-danger'>Dit e-mail adres is al in gebruik.</p>";
            }

            if ($this->data['melding'] == "") {
                //roep hier method aan die random passwd genereert
                $randomPaswoord = $this->genereerPaswoord();

                $this->users_model->insert(array('rolID' => 2, 'username' => $this->input->post('gebruikersnaam'), 'password' => $randomPaswoord, 'email' => $this->input->post('email'), 'voornaam' => $this->input->post('voornaam'), 'familienaam' => $this->input->post('familienaam')));

                //roep hier method aan die mail stuurt (met random passwd) indien insert gelukt is, zowel naar admin die moet activeren als naar persoon die zich wil registreren
                $this->mailToUser($this->input->post('voornaam'), $this->input->post('familienaam'), $this->input->post('gebruikersnaam'), $this->input->post('email'), $randomPaswoord);
                $this->mailToAdmin($this->input->post('voornaam'), $this->input->post('familienaam'), $this->input->post('gebruikersnaam'), $this->input->post('email'));

                $this->data['melding'] = "";
                $this->data['voornaam'] = "";
                $this->data['familienaam'] = "";
                $this->data['gebruikersnaam'] = "";
                $this->data['email'] = "";
                $this->data['melding'] .= "<p class='alert alert-success'>Bedankt voor uw registratie, een admin zal uw account zo snel mogelijk activeren.</p>";
            }
            //stuur door naar registerpagina en laat de errors of gelukte insert melding zien
            $this->parser->parse('login/register.php', $this->data);
        } else {
            $this->data['melding'] = "";
            $this->data['voornaam'] = "";
            $this->data['familienaam'] = "";
            $this->data['gebruikersnaam'] = "";
            $this->data['email'] = "";
            $this->parser->parse('login/register.php', $this->data);
        }
    }

    function genereerPaswoord() {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr(str_shuffle($chars), 0, 8);
        return $password;
    }

    //moet hier niet gebruikt worden, maar vanaf het moment dat een admin een gebruiker goedkeurt!!!!!!!
    function mailToUser($userVoornaam, $userAchternaam, $userUsername, $userEmail, $generatedPassword) {
        $to = $userEmail;
        $subject = 'TEDxPXL registratie';
        $message = "Beste " . $userVoornaam . " " . $userAchternaam . "\n\nBedankt voor uw registratie bij TEDxPXL.\nU kan nu inloggen met " . $userUsername . " met als wachtwoord " . $generatedPassword . "\nU zal uw wachtwoord moeten wijzigen bij de eerste keer inloggen.\n\nMet vriendelijke groet\n\nTEDxPXL Administratie";
        $headers = 'From: pxltedx@gmail.com';
        if (!mail($to, $subject, $message, $headers)) {
            //echo "Email sending failed";
        }
    }

    //wordt niet gebruikt ATM, kan gebruikt worden om de admin een mail te sturen als een nieuwe gebruiker zich registreert.
    function mailToAdmin($userVoornaam, $userAchternaam, $userUsername, $userEmail) {
        $to = 'koen895@hotmail.com'; //hier email van TEDx admin indien nodig
        $subject = 'Nieuwe TEDxPXL gebruiker';
        $message = "Beste Admin \n\n" . $userVoornaam . " " . $userAchternaam . " wil zich registreren met gebruikersnaam: " . $userUsername . " en het e-mail adres " . $userEmail . "\nGa naar de website om dit te bevestigen of af te keuren.";
        $headers = 'From: pxltedx@gmail.com';
        if (!mail($to, $subject, $message, $headers)) {
            //echo "Email sending failed";
        }
    }
}

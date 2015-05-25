<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $this->load->library('session');
        $this->load->library('user_agent');
        $this->load->helper('url');
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Overzicht gebruikers</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css-->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="screen">

        <!-- font awesome for icons -->
        <link href="<?php echo base_url(); ?>font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo base_url(); ?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!--Revolution slider css-->
        <link href="<?php echo base_url(); ?>rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
        <!--google fonts-->


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!--owl carousel css-->
        <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo base_url(); ?>css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo base_url(); ?>css/yamm.css" rel="stylesheet" type="text/css">
        <!--popups css-->
        <link href="<?php echo base_url(); ?>css/magnific-popup.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>home/index"><img src="<?php echo base_url(); ?>img/logo.png" alt="TEDxPXL"></a>

                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown ">
                            <a href="<?php echo base_url(); ?>home/index">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>forum/index">Forum</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>events/index">Evenementen</a>
                        </li> 
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>nieuws/index">Nieuws</a>
                        </li>
                        <!--dit enkel laten zien als een admin is ingelogd-->
                        <?php
                        if ($this->session->has_userdata('user') && $this->session->has_userdata('logged_in') && $this->session->logged_in && $this->session->has_userdata('rolID') && $this->session->userdata['rolID'] == 1) {
                            ?>
                            <li class="active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <li><a href="<?php echo base_url(); ?>admin/gebruikerOverzicht">Gebruikers</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/evenementOverzicht">Evenementen</a></li><!--doorsturen naar pagina om de evenementen te beheren-->
                                </ul>
                            </li>

                        <?php } ?>


                        <li class="dropdown " data-animate="animated fadeInUp" style="z-index:500;">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu search-dropdown animated fadeInUp">
                                <li id="dropdownForm">
                                    <div class="dropdown-form">
                                        <form class=" form-inline">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="search...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-theme-bg" type="button">Go!</button>
                                                </span>
                                            </div><!--input group-->
                                        </form><!--form-->
                                    </div><!--.dropdown form-->
                                </li><!--.drop form search-->
                            </ul><!--.drop menu-->
                        </li> <!--menu search li end here--> 
                        <li class="dropdown">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                                <form role="form" action='<?php echo base_url(); ?>login/index' method='post'>
                                    <?php
                                    if (!($this->session->has_userdata('user') && $this->session->has_userdata('logged_in') && $this->session->logged_in && $this->session->has_userdata('rolID'))) {
                                        ?>
                                        <h4>Aanmelden</h4>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" name="gebruikersnaam" placeholder="Username"  required="required">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" class="form-control"  name="password" placeholder="Password"  required="required">
                                            </div>
                                            <div class="checkbox pull-left">
                                                <label>
                                                    <input type="checkbox"> Onthoud mij
                                                </label>
                                            </div>                                   
                                            <input type="submit" class="btn btn-theme-bg pull-right" name="btn-inlog" value="Aanmelden"/>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <p>Nog geen lid! <a href="<?php echo base_url(); ?>login/register">Registereer nu!</a></p>
                                        </div>
                                        <?php
                                    } else {
                                        ?>                                      
                                        <h4>Afmelden</h4>

                                        <input type="submit" class="btn btn-theme-bg" name="btn-logoff" value="Afmelden"/>

                                        <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </li> <!--menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

        
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Error 404</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li>404</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center error-text">
                    <div class="divide30"></div>
                    <h1 class="error-digit wow animated fadeInUp margin20"><i class="fa fa-thumbs-down"></i></h1>
                    <h2>Oops, the page could not be found!</h2>
                    <p><a href="<?php echo base_url(); ?>" class="btn border-black btn-lg">Go Back to home</a></p>
                </div>
            </div>
        </div>
        <div class="divide60"></div>
              <footer id="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>About assan</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                            </p>
                            <ul class="list-inline social-1">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>

                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> vaisahali, jaipur, 302012</p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">Support@designmylife.com</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +91 1800 2345 2132</p></li>
                                <li> <p><strong><i class="fa fa-print"></i> Fax</strong> 1800 2345 2132</p></li>
                                <li> <p><strong><i class="fa fa-skype"></i> Skype</strong> assan.856</p></li>

                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Featured Work</h3>
                            <ul class="list-inline f2-work">
                                <li><a href="portfolio-single.html"><img src="img/img-1.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-2.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-3.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-4.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-5.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-6.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-7.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-8.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="img/img-9.jpg" class="img-responsive" alt=""></a></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Newsletter</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, 
                            </p>
                            <form role="form" class="subscribe-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter email to subscribe">
                                    <span class="input-group-btn">
                                        <button class="btn  btn-theme-dark btn-lg" type="submit">Ok</button>
                                    </span>
                                </div>
                            </form>
                        </div>                        
                    </div><!--footer col-->

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-btm">
                            <span>&copy;2014. Theme by Design_mylife</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->
       <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        
        
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        
        <!--customizable plugin edit according to your needs-->
        <script src="js/custom.js" type="text/javascript"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Events</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css (blue color by default) -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="screen">
        <!-- custom css (green color ) -->
        <!--      <link href="css/style-green.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (red color ) -->
        <!--        <link href="css/style-red.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (yellow color ) -->
        <!--       <link href="css/style-yellow.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (sea-greean color ) -->
        <!--      <link href="css/style-sea-green.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- custom css (style-gold color ) -->
        <!--       <link href="css/style-gold.css" rel="stylesheet" type="text/css" media="screen">-->
        <!-- font awesome for icons -->
        <link href="<?php echo base_url(); ?>font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo base_url(); ?>css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet" type="text/css" media="screen">
        <!--web fonts-->  
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
                    <a class="navbar-brand" href="index"><img src="<?php echo base_url(); ?>img/logo.png" alt="ASSAN"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="index">Home</a>
                        </li>
                        <!--menu home li end here-->
                                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu multi-level" role="menu">
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Text Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Grid Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="grid-portfolio-2-no-text.html">2 Columns</a></li>
                                        <li><a href="grid-portfolio-3-no-text.html">3 Columns</a></li>
                                        <li><a href="grid-portfolio-4-no-text.html">4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No space Full width </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-width-2.html">2 columns</a></li>
                                        <li><a href="portfolio-full-width-3.html">3 columns</a></li>
                                        <li><a href="portfolio-full-width-4.html">4 columns</a></li>                         
                                        <li><a href="portfolio-full-width-5.html">5 columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">No Space Boxed </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-no-space-bx-2.html"> 2 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-3.html"> 3 Columns</a></li>
                                        <li><a href="portfolio-no-space-bx-4.html"> 4 Columns</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Masonry </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="masonry-portfolio-3.html"> 3 Columns</a></li>
                                        <li><a href="masonry-portfolio-4.html"> 4 Columns</a></li>
                                        <li><a href="masonry-portfolio-full.html"> Full Width</a></li>                         

                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Portfolio Items</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-single.html">Single item</a></li>
                                        <li><a href="portfolio-single-2.html">Single item 2</a></li>                                                             
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <!--menu Portfolio li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="blog-full.html">Blog - full width</a></li>
                                <li><a href="blog-leftimg.html">Blog - left image</a></li>
                                <li><a href="blog-sidebar.html">Blog - sidebar</a></li>
                                <li><a href="blog-2col.html">Blog - 2 column</a></li>
                                <li><a href="blog-timeline.html">Blog - Timeline</a></li>
                                <li><a href="blog-masonary.html">Blog - Masonry</a></li>
                                <li><a href="blog-single.html">Blog - Single</a></li>
                            </ul>
                        </li>
                        <!--menu blog li end here-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="me.html">About - Me</a></li>

                                <li><a href="services.html">Services</a></li>
                                <li><a href="team">Our Team</a></li>
                                <li><a href="pricing.html">Our Pricing</a></li>                                
                                <li><a href="faq.html">FAQS</a></li>
                               <li><a href="email-template.html">Email Template</a></li> 
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Contact </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html"> Contact default</a></li>
                                        <li><a href="contact-advanced.php">Contact advanced</a></li>
                                        <li><a href="contact-option.php">Contact option</a></li>
                                        <li><a href="contact-flat.php">Contact Flat</a></li>
                                    </ul>
                                </li>                                          
                                <li><a href="search-results.html">Search Results</a></li>                                
                                <li><a href="career.html">Career</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="process.html">Our Process</a></li>
                            </ul>
                        </li>
                        <!--menu pages li end here-->
                        <li class="dropdown">
                            <a href="events">Events</a>
                        </li>
                        <!--mega menu-->
                        <li class="dropdown yamm-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <h3 class="heading">headers & Footers</h3>
                                                <ul class="nav mega-vertical-nav">        
                                                    <li><a href="index.html">Header 1 - Default</a></li>
                                                    <li><a href="header-dark.html">Header 2 - dark </a></li>
                                                    <li><a href="header-transparent.html">header 3 - transparent </a></li>
                                                    <li><a href="header-center-logo.html">header 4 - Logo center </a></li>
                                                    
                                                    <li><a href="index.html">Footer - 1</a></li>
                                                    <li><a href="footer-2.html">Footer - 2</a></li>
                                                    <li><a href="footer-3.html">Footer - 3 </a></li>
                                                </ul>

                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">Layout grids </h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="full-width.html">Full Width</a></li>
                                                    
                                                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="right-sidebar.html">Right sidebar</a></li>
                                                    <li><a href="both-sidebar.html">Both Sidebar</a></li>
                                                    <li><a href="both-right-sidebar.html">Both Right sidebar</a></li>
                                                    <li><a href="both-left-sidebar.html">Both Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">Features</h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="element.html">Elements</a></li>                                                   
                                                    <li><a href="home-soon.html">Coming Soon</a></li>   
                                                    <li><a href="side-nav.html">side navigation </a></li>
                                                    <li><a href="testimonials.html">testimonials </a></li> 
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading">MISCELLANEOUS</h3>
                                                <ul class="nav mega-vertical-nav">
                                                    <li><a href="maintenance-page.html">Maintenance page </a></li>
                                                    <li><a href="blank.html">Blank Page</a></li>
                                                    <li><a href="error.html">Error - 404</a></li>
                                                    <li><a href="login-ragister.html">Login / Register</a></li>
                                                    <li><a href="login-ragister-classic.html">Login / Register - Classic </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> <!--menu Features li end here-->
                        <!--mega menu end-->    

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
                                <form role="form">
                                    <h4>Signin</h4>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <a class="btn btn-theme-bg pull-right">Login</a>
                                        <!--                                        <button type="submit" class="btn btn-theme pull-right">Login</button>                 -->
                                        <div class="clearfix"></div>
                                        <hr>
                                        <p>Don't have an account! <a href="register">Register Now</a></p>
                                    </div>
                                </form>
                            </div>
                        </li> <!--menu login li end here-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

        <div class="parallax events-bg" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2> event Assan 2016</h2>
                        <h4>January 21-06, 2016 in sydney</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="defaultCountdown"></div>
                    </div>
                </div>
            </div>
        </div><!--events slider end-->
        <div class="divide60"></div>
        <div class="container about-event-continer">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="center-heading">
                        <h2>About event</h2>
                        <span class="center-line"></span>
                    </div>
                    <p class="margin40">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    </p>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 margin40">
                            <div class="event-digit-box">
                                <h1 class="counter">6754</h1>
                                <h4>Tickets sold</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 margin40">
                            <div class="event-digit-box">
                                <h1 class="counter">23</h1>
                                <h4>Program</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 margin40">
                            <div class="event-digit-box">
                                <h1 class="counter">52</h1>
                                <h4>Speakers</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 margin40">
                            <div class="event-digit-box">
                                <h1 class="counter">3346</h1>
                                <h4>Tickets left</h4>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-lg btn-theme-dark">Book a ticket new</a>
                </div>
            </div>     
        </div><!--event about end-->
        <div class="divide60"></div>

        <div class="event-speakers">
            <div class="container">
                <div class="center-heading">
                    <h2>Assan Speakers</h2>
                    <span class="center-line"></span>
                </div> 

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-1.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Nancy</a></h3>
                                    <span>Ceo, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-2.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Nancy</a></h3>
                                    <span>Ceo, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-3.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Smith</a></h3>
                                    <span>Manager, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                        </div><!--speakers row end-->
                        <div class="row">
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-3.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Nancy</a></h3>
                                    <span>Ceo, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-4.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Nancy</a></h3>
                                    <span>Ceo, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                            <div class="col-sm-4 margin40">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/team-1.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="#">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                                <div class="work-desc">
                                    <h3><a> Smith</a></h3>
                                    <span>Manager, Assan inc.</span>
                                </div><!--work desc-->
                            </div><!--speakers col end-->
                        </div><!--speakers row end-->
                    </div>
                </div>
            </div>

        </div>

        <div class="divide60"></div>
        <div class="schedule">
            <div class="container">
                <div class="center-heading">
                    <h2>schedule</h2>
                    <span class="center-line"></span>
                    <p class="margin40">
                        But I must explain to you how all this mistaken idea of denouncing <br>pleasure and praising pain was born and I will give you a complete account of the system
                    </p>
                </div> 
                <div class="row">
                    <div class="col-sm-6">

                        <div class="event-box animated fadeInLeft">
                            <span class="time"><i class="fa fa-clock-o"></i> 9:00 PM</span>

                            <h3 class="title">
                                lorem ipsum dolor sit amet
                            </h3>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                            </p>
                            <span class="author">Daniel Smith</span>
                        </div><!--event box-->
                        <div class="event-box animated fadeInLeft">
                            <span class="time"><i class="fa fa-clock-o"></i> 1:00 PM</span>

                            <h3 class="title">
                                lorem ipsum dolor sit amet
                            </h3>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                            </p>
                            <span class="author">Daniel Smith</span>
                        </div><!--event box-->
                    </div>
                    <div class="col-sm-6">

                        <div class="event-box animated fadeInLeft">
                            <span class="time"><i class="fa fa-clock-o"></i> 11:00 PM</span>

                            <h3 class="title">
                                lorem ipsum dolor sit amet
                            </h3>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                            </p>
                            <span class="author">Daniel Smith</span>
                        </div><!--event box-->
                        <div class="event-box animated fadeInLeft">
                            <span class="time"><i class="fa fa-clock-o"></i> 3:30 PM</span>

                            <h3 class="title">
                                lorem ipsum dolor sit amet
                            </h3>

                            <p>
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                            </p>
                            <span class="author">Daniel Smith</span>
                        </div><!--event box-->
                    </div>
                </div>
            </div>
        </div><!--schedule end-->

        <div class="divide80"></div>
        <div class="event-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="heading">Faqs</h3>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
                                            How can i go for it?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                            Is there are any support?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                            How can i buy it?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed" aria-expanded="false">
                                            compatible with bootstrap3.3.2?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed" aria-expanded="false">
                                            Fully Responsive?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                    </div>
                                </div>
                            </div>


                        </div><!--faqs panel-->
                    </div><!--faqs col-->
                    <div class="col-md-6">

                        <h3 class="heading">Past events photos</h3>
                        <div id="grid" class="row">
                            <div class="mix col-sm-4 page1 page4 margin30">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-1.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-1.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="mix col-sm-4 page2 page3 margin30">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-2.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-2.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="mix col-sm-4  page3 page2 margin30 ">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-3.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-3.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="mix col-sm-4  page4 margin30">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-4.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-4.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="mix col-sm-4 page1 margin30 ">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-5.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-5.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 

                            </div>
                            <div class="mix col-sm-4  page2 margin30">
                                <div class="item-img-wrap ">
                                    <img src="<?php echo base_url(); ?>img/img-6.jpg" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="<?php echo base_url(); ?>img/img-6.jpg" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div> 
                            </div>

                        </div><!--#grid-->
                    </div>
                </div>
            </div>
        </div><!--event gallery-->

        <div class="register-event parallax " data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="center-heading">
                    <h2>Register</h2>
                    <span class="center-line"></span>
                    <p class="margin40">
                        But I must explain to you how all this mistaken idea of denouncing <br>pleasure and praising pain was born and I will give you a complete account of the system
                    </p>
                </div> 
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                            <div class="col-sm-4 margin30">
                                <div class="event-price-box">
                                    <h3>$49</h3>
                                    <h5>early bird</h5>
                                </div>
                            </div>
                            <div class="col-sm-4 margin30">
                                <div class="event-price-box">
                                    <h3>$99</h3>
                                    <h5>Standard</h5>
                                </div>
                            </div>
                            <div class="col-sm-4 margin30">
                                <div class="event-price-box">
                                    <h3>$199</h3>
                                    <h5>Full price</h5>
                                </div>
                            </div>
                        </div><!--event price row end-->
                        <div class="register-text-box">
                            <h3>Hurry Up! Only 3346 seats Available</h3>
                            <p><a href="#" class="btn btn-lg btn-theme-bg" data-toggle="modal" data-target="#reg-event-modal">Register Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> Elfde-Liniestraat 24, B-3500 Hasselt</p></li> 
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">pxltedx@gmail.com</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong>+32 474 21 21 25</p></li>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-md-3 col-sm-6 margin30">
                        <div class="footer-col">
                            <h3>Featured Work</h3>
                            <ul class="list-inline f2-work">
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-1.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-2.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-3.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-4.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-5.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-6.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-7.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-8.jpg" class="img-responsive" alt=""></a></li>
                                <li><a href="portfolio-single.html"><img src="<?php echo base_url(); ?>img/img-9.jpg" class="img-responsive" alt=""></a></li>
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
                            <span>&copy;2014. Theme by Jarno</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--default footer end here-->

        <!--regiter event modal-->
        <!-- Button trigger modal -->
      

        <!-- Modal -->
        <div class="modal fade" id="reg-event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Register Now</h4><br>
                       
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="phone">
                            </div>
                             <div class="form-group">
                                 <select class="form-control">
                                     <option>Type</option>
                                      <option>Early birds</option>
                                       <option>Standard</option>
                                        <option>Full price</option>
                                 </select>
                            </div>
                           
                            <button class="btn btn-theme-bg btn-lg pull-right">Register</button>
                             <div class="clearfix"></div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>



        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="<?php echo base_url(); ?>text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="<?php echo base_url(); ?>js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="<?php echo base_url(); ?>js/jquery.stellar.min.js" type="text/javascript"></script>
        
        
        <!--digit countdown plugin-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--digit countdown plugin-->
        <script src="<?php echo base_url(); ?>js/jquery.counterup.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="<?php echo base_url(); ?>js/wow.min.js" type="text/javascript"></script> 
        <!--owl carousel slider-->
        <script src="<?php echo base_url(); ?>js/owl.carousel.min.js" type="text/javascript"></script>
        <!--popup js-->
        <script src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!--you tube player-->
        <script src="<?php echo base_url(); ?>js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        
        
        <!--customizable plugin edit according to your needs-->
        <script src="<?php echo base_url(); ?>js/custom.js" type="text/javascript"></script>
        <!--countdown coming soon-->
        <script src="<?php echo base_url(); ?>js/jquery.countdown.js" type="text/javascript"></script>
        <script type="text/javascript">
            //Date counter
            $(function () {
                var austDay = new Date();
                austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
                $('#defaultCountdown').countdown({until: austDay});
                $('#year').text(austDay.getFullYear());
            });
        </script>
    </body>
</html>
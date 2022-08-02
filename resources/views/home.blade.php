<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <base href=""/>
    <!-- Basic Page Needs

     ================================================== -->

    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" type="image/png" href="images/client/favicon.png">

    <title>Dent-all</title>

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta name="author" content="">


    <!-- Mobile Specific Metas

    ================================================== -->

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <meta name="format-detection" content="telephone=no">


    <!-- Web Font
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">


    <!-- CSS

     ================================================== -->


    <!-- Theme Color
    ============================================= -->
    <link rel="stylesheet" id="color" href="css/client/sky-blue.css">


    <!-- Medicom Style
    ============================================= -->
    <link rel="stylesheet" href="css/client/medicom.css">


    <!-- This page
    ============================================= -->
    <link href="css/client/revolution_style.css" rel="stylesheet">
    <link href="css/client/settings.css" rel="stylesheet">


    <!-- Bootstrap
    ============================================= -->
    <link rel="stylesheet" href="css/client/bootstrap.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <!-- Header Scripts

    ================================================== -->

    <script src="js/client/modernizr-2.6.2.min.js"></script>
    <script src="https://kit.fontawesome.com/134ba02a77.js" crossorigin="anonymous"></script>


</head>
<body class="fixed-header">


<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


    <!-- Header
    ============================================= -->
    <header id="header" class="medicom-header medical-nav">

        <!-- Top Row
        ============================================= -->
        <div class="solid-row"></div>

        <div class="container">


            <!-- Primary Navigation
            ============================================= -->
            <nav class="navbar navbar-default" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display
                ============================================= -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/client/logo.png') }}"
                                                                       alt="Logo Dent-all"
                                                                       title="Logo Dent-all"></a>

                </div>


                <div class="collapse navbar-collapse navbar-right" id="primary-nav">

                    <ul class="nav navbar-nav">

                        <li class="dropdown active">
                            <a href="{{ url('/') }}"><i class="fa-solid fa-tooth"></i>Inicio</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>About
                                Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us One</a></li>
                                <li><a href="about-us2.html">About Us Two</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="patient-and-families.html">Patients &amp; Families</a></li>
                                <li class="dropdown-submenu"><a href="research.html">Research</a><i
                                        class="fa fa-angle-right pull-right"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu"><a href="#.">Medicome Trials</a><i
                                                class="fa fa-angle-right pull-right"></i>
                                            <ul class="dropdown-menu">
                                                <li><a href="trials.html">Trials</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"><a href="#.">Cancer Care</a><i
                                                class="fa fa-angle-right pull-right"></i>
                                            <ul class="dropdown-menu">
                                                <li><a href="cancer-center.html">Cancer Center</a></li>
                                                <li><a href="cancer-center.html">Cell Death Research</a></li>
                                                <li><a href="cancer-center.html">Brain Cancer</a></li>
                                                <li><a href="cancer-center.html">Tumor Microenvironment</a></li>
                                                <li><a href="cancer-center.html">Breast Cancer</a></li>
                                                <li><a href="cancer-center.html">Childhood Cancers</a></li>
                                                <li><a href="cancer-center.html">Endocrine Cancers</a></li>
                                                <li><a href="cancer-center.html">Male Cancers</a></li>
                                                <li><a href="cancer-center.html">Skin Cancer </a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu"><a href="#.">Childrens Health</a><i
                                                class="fa fa-angle-right pull-right"></i>
                                            <ul class="dropdown-menu">
                                                <li><a href="children-health.html"> Genetic Disease</a></li>
                                                <li><a href="children-health.html"> Growth &amp; Development</a></li>
                                                <li><a href="children-health.html"> Infections</a></li>
                                                <li><a href="children-health.html"> Pregnancy &amp; Baby</a></li>
                                                <li><a href="children-health.html"> Nutrition &amp; Fitness</a></li>
                                                <li><a href="children-health.html"> Emotions &amp; Behavior</a></li>
                                                <li><a href="children-health.html"> Doctors &amp; Hospitals</a></li>
                                                <li><a href="children-health.html"> Muscle Development</a></li>
                                                <li><a href="children-health.html"> RNA Biology</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="meet-team.html">Meet Awesome Team</a></li>
                                <li><a href="member-detail.html">Memmber Detail</a></li>
                                <li><a href="tables.html">Pricing Table</a></li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li class="dropdown-submenu"><a href="#">Portfolio</a><i
                                        class="fa fa-angle-right pull-right"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery1.html">Portfolio one</a></li>
                                        <li><a href="gallery2.html">Portfolio two</a></li>
                                        <li><a href="gallery3.html">Portfolio three</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="error404.html">404 Not Found</a></li>
                            </ul>
                        </li>

                        <li class="mega-menu-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>DEPARTMENTS</a>
                            <div class="mega-menu dropdown-menu">
                                <img src="images/client/mega-menu-img.jpg" class="img-rounded" alt="" title="">
                                <ul>
                                    <li><strong>Department One</strong></li>
                                    <li><a href="medical-department.html">Medical Department</a></li>
                                    <li><a href="medical-department.html">Body Lift Department</a></li>
                                    <li><a href="medical-department.html">Liposuction Department</a></li>
                                    <li><a href="medical-department.html">Eyelid Department</a></li>
                                    <li><a href="medical-department.html">Thigh Lift Department</a></li>
                                    <li><a href="medical-department.html">Brow Lift Department</a></li>
                                </ul>
                                <ul>
                                    <li><strong>Department Two</strong></li>
                                    <li><a href="medical-department.html">Arm Lift Department</a></li>
                                    <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                                    <li><a href="medical-department.html">Ear Surgery Department</a></li>
                                    <li><a href="medical-department.html">Tummy Tuck Department</a></li>
                                    <li><a href="medical-department.html">Neck Lift Department</a></li>
                                </ul>
                                <ul>
                                    <li><strong>Department Three</strong></li>
                                    <li><a href="medical-department.html">Arm Lift Department</a></li>
                                    <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                                    <li><a href="medical-department.html">Ear Surgery Department</a></li>
                                    <li><a href="medical-department.html">Rhinoplasty Department</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>Gallery</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery1.html">Gallery one</a></li>
                                <li><a href="gallery2.html">Gallery two</a></li>
                                <li><a href="gallery3.html">Gallery three</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog one</a></li>
                                <li><a href="blog-single-post.html">Blog two</a></li>
                                <li><a href="blog-2-column.html">Blog three</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>

                        <li class="dropdown last">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa-solid fa-tooth"></i></i>Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-detail.html">Shop detail</a></li>
                                <li><a href="shopping-cart.html">Shoping cart</a></li>
                            </ul>
                        </li>

                        <li class="dropdown last">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa-solid fa-tooth"></i>Contact
                                Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="contact-us.html">Contact Us one</a></li>
                                <li><a href="contact-us2.html">Contact Us two</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="">
                                <i class="fa-solid fa-user"></i>
                                Mi Cuenta
                            </a>
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

    </header>


    <div id="content-index">


        <!-- Main Banner
        ============================================= -->
        <section id="slider" class="tp-banner-container index-rev-slider clearfix">

            <div class="tp-banner">

                <ul>

                    <!-- Fade
                    ============================================= -->
                    <li data-transition="fade" data-slotamount="10" data-thumb="">
                        <img src="images/client/heart-specialist.jpg" alt="image"/>
                        <div class="caption sft" data-x="0" data-y="180" data-speed="3000" data-start="1300"
                             data-easing="easeOutBack">
                            <img src="images/client/heart-icon.png" alt="">
                        </div>
                        <div class="caption lfr" data-x="770" data-y="100" data-speed="1500" data-start="900"
                             data-easing="easeOutExpo">
                            <img src="images/client/heart.png" alt=""/>
                        </div>
                        <div class="caption sft big_white" data-x="0" data-y="265" data-speed="1000" data-start="1700"
                             data-easing="easeOutExpo">
                            <strong>heart specialist</strong>
                        </div>
                        <div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1000" data-start="2500"
                             data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor,
                            consectetur<br>
                            adipiscing elit. Ut volutpat eros adipiscing elit Ut volutpat.
                        </div>
                        <div class="caption sfb" data-x="0" data-y="410" data-speed="2500" data-start="2500"
                             data-easing="easeOutExpo">
                            <a href="index5.html" class="btn btn-rounded btn-bordered">All in one</a>
                        </div>
                    </li>


                    <!-- Slide Right
                    ============================================= -->
                    <li data-transition="slideright" data-slotamount="6" data-thumb="">
                        <img src="images/client/emergency-services.jpg" alt="image"/>
                        <div class="caption sft" data-x="500" data-y="180" data-speed="2000" data-start="1300"
                             data-easing="easeOutBack"><img src="images/client/emergency-services-icon.png" alt="">
                        </div>
                        <div class="caption sft big_white" data-x="260" data-y="290" data-speed="1500" data-start="1700"
                             data-easing="easeOutExpo"><strong>emergency services</strong></div>
                        <div class="caption sfb medium_grey text-center" data-x="140" data-y="370" data-speed="1500"
                             data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem
                            ipsum dolor, consectetur adipiscing elit. Ut<br>
                            volutpat eros adipiscing elit Ut volutpat.
                            aliquam erat volutpat.
                        </div>
                        <div class="caption sfb" data-x="492" data-y="450" data-speed="2000" data-start="3000"
                             data-easing="easeOutExpo"><a href="index5.html" class="btn btn-rounded btn-bordered">all in
                                one</a></div>
                    </li>


                    <!-- Slide Up
                    ============================================= -->
                    <li data-transition="slideup" data-slotamount="15" data-thumb="">
                        <img src="images/client/better-technology.jpg" alt="image"/>
                        <div class="caption sfl" data-x="0" data-y="180" data-speed="1500" data-start="1300"
                             data-easing="easeOutBack"><img src="images/client/better-technology-icon.png" alt=""></div>
                        <div class="caption sfr" data-x="600" data-y="0" data-speed="900" data-start="1500"
                             data-easing="easeOutExpo">
                            <img src="images/client/tech-women.png" alt=""/></div>
                        <div class="caption sft big_white" data-x="0" data-y="265" data-speed="1500" data-start="1700"
                             data-easing="easeOutExpo"><strong>better technology</strong></div>
                        <div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1500" data-start="2500"
                             data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor,
                            consectetur<br>
                            adipiscing elit. Ut volutpat eros adipiscing elit Ut volutpat.
                        </div>
                        <div class="caption sfb" data-x="0" data-y="410" data-speed="300" data-start="2500"
                             data-easing="easeOutExpo"><a href="index5.html" class="btn btn-rounded btn-bordered">all in
                                one</a></div>
                    </li>

                </ul>

            </div>

        </section>


        <!-- Home Boxes
        ============================================= -->
        <div class="row text-center no-margin">

            <div class="col-md-4 bg-default">

                <div class="home-box">
                    <span class="glyphicon glyphicon-tint"></span>
                    <h3>Emergency Case</h3>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                        volutpat eros s adipiscing elit. Ut volutpat eros sit.</p>
                    <a href="#." class="btn-rounded btn-bordered">Read more</a>
                </div>

            </div>

            <div class="col-md-4">

                <div class="home-box opening-hours clearfix">

                    <span class="glyphicon glyphicon-time"></span>
                    <h3>Opening Hours</h3>
                    <p>If you need a doctor for to the consectetuer
                        consectetur adipiscing Graphic Design is elit.</p>

                    <ul class="list-unstyled">
                        <li class="clearfix">
						<span>
							Monday - Friday
						</span>
                            <div class="value">
                                8.00 - 16.00
                            </div>
                        </li>
                        <li class="clearfix">
						<span>
							Saturday
						</span>
                            <div class="value">
                                9.30 - 15.30
                            </div>
                        </li>
                        <li class="clearfix">
						<span>
							Sunday
						</span>
                            <div class="value">
                                9.30 - 17.00
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="col-md-4 bg-default">

                <div class="home-box">
                    <span class="glyphicon glyphicon-tint"></span>
                    <h3>Cancer Care</h3>
                    <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut
                        volutpat eros s adipiscing elit. Ut volutpat eros sit.</p>
                    <a href="#." class="btn-rounded btn-bordered">Read more</a>
                </div>

            </div>

        </div>


        <!-- Appointment
        ============================================= -->
        <section class="appointment-sec text-center">

            <div class="container">

                <h1>Make an appointment</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                <div class="row">

                    <div class="col-md-6">
                        <figure><img src="images/client/appointment-img.jpg" alt="image" title="Appointment image"
                                     class="img-responsive lady1"></figure>
                    </div>

                    <div class="col-md-6">
                        <div class="appointment-form clearfix">
                            <div class="success" id="message-app" style="display:none;"></div>
                            <form name="appoint_form" id="appoint_form" method="post" action="submit.php"
                                  onSubmit="return false">
                                <input type="text" name="app_fname" id="app_fname" placeholder="First Name"
                                       onKeyPress="removeChecks();">
                                <input type="text" name="app_lname" id="app_lname" placeholder="Last Name"
                                       onKeyPress="removeChecks();">
                                <input type="email" name="app_email_address" id="app_email_address"
                                       placeholder="Email Address" onKeyPress="removeChecks();">
                                <input type="text" name="app_phone" id="app_phone" placeholder="Phone No">
                                <input type="text" name="datepicker" id="datepicker" placeholder="Appointment Date"
                                       onClick="removeChecks();">
                                <select name="gender" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Child</option>
                                </select>
                                <textarea placeholder="Message" name="app_msg" id="app_msg"></textarea>
                                <input type="submit" value="submit" class="btn btn-default btn-rounded"
                                       onClick="validateAppoint();">
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- About
        ============================================= -->
        <section class="about-sec text-center" data-stellar-background-ratio="0.3">

            <div class="container">
                <h1>about Medicom</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                <div class="row text-center" id="counters">
                    <div class="col-md-3 col-xs-6">
                        <div class="counter">
                            <span class="quantity-counter1 highlight">0</span>
                            <h6 class="counter-details">AWARD SHOWS</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="counter">
                            <span class="quantity-counter2 highlight">0</span>
                            <h6 class="counter-details">our staff</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="counter">
                            <span class="quantity-counter3 highlight">0</span>
                            <h6 class="counter-details">clinic rooms</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="counter">
                            <span class="quantity-counter4 highlight">0</span>
                            <h6 class="counter-details">machines</h6>
                        </div>
                    </div>
                </div>

            </div>

        </section>


        <!-- Team
        ============================================= -->
        <section class="meet-the-doctors no-bg-img team-carousel">

            <div class="container">

                <h2 class="light bordered">Our <span>Team</span></h2>

                <div id="team-carousel" class="owl-carousel wrapper-padding-none">

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img1.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img2.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img3.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img1.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img2.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>

                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img3.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img1.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                    <div class="team-member">
                        <div class="team-thumb">
                            <img src="images/client/team-member-img2.jpg" class="img-rounded" alt="">
                            <div class="links"><a href="#."><i class="fa fa-facebook"></i></a>
                                <a href="#."><i class="fa fa-twitter"></i></a>
                                <a href="#."><i class="fa fa-google-plus"></i></a></div>
                        </div>
                        <h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla
                            commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                            bibendum metus tellus sed magna. Donec eu dolor.</p>
                        <a href="member-detail.html"><em>- View Profile</em></a>
                    </div>

                </div>

            </div>

        </section>


        <!-- Latest News
        ============================================= -->
        <section class="latest-news">

            <div class="container">

                <div class="row">

                    <div class="col-md-8">

                        <h2 class="bordered light">Latest <span>News</span></h2>

                        <div class="row">

                            <div class="col-md-5">
                                <article class="blog-item">
                                    <div class="blog-thumbnail">
                                        <img alt="" src="images/client/latest-news1.jpg">
                                        <div class="blog-date"><p class="day">29</p>
                                            <p class="monthyear">FEB 2014</p></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>,
                                            <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Printing and typesetting industry. Lorem Ipsum has been the industry’s
                                            standard dummy text ever scrambled...</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                    </div>
                                </article>
                                <article class="blog-item">
                                    <div class="blog-thumbnail">
                                        <img alt="" src="images/client/latest-news3.jpg">
                                        <div class="blog-date"><p class="day">29</p>
                                            <p class="monthyear">FEB 2014</p></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>,
                                            <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Printing and typesetting industry. Lorem Ipsum has been the industry’s
                                            standard dummy text ever scrambled...</p>
                                        <p>Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis
                                            bibendum metus tellus sed magna. Donec eu dolor [...]</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                    </div>
                                </article>
                            </div>

                            <div class="col-md-7">
                                <article class="blog-item">
                                    <div class="blog-thumbnail">
                                        <img alt="" src="images/client/latest-news2.jpg">
                                        <div class="blog-date"><p class="day">29</p>
                                            <p class="monthyear">FEB 2014</p></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>,
                                            <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Printing and typesetting industry. Lorem Ipsum has been the industry’s
                                            standard dummy text ever scrambled...</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                    </div>
                                </article>
                                <article class="blog-item">
                                    <div class="blog-thumbnail">
                                        <img alt="" src="images/client/latest-news4.jpg">
                                        <div class="blog-date"><p class="day">29</p>
                                            <p class="monthyear">FEB 2014</p></div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>,
                                            <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Printing and typesetting industry. Lorem Ipsum has been the industry’s
                                            standard dummy text ever scrambled...</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                    </div>
                                </article>
                            </div>

                        </div>

                    </div>


                    <!-- Sidebar
                    ============================================= -->
                    <aside class="col-md-4">

                        <h2 class="bordered light">Meet the <span>doctors</span></h2>
                        <div class="what-doctor-say clearfix">
                            <div id="meet-doctors-carousel" class="owl-carousel meet-doctors-carousel text-center">
                                <div class="item">
                                    <img src="images/client/doctor-img.png" class="img-circle img-thumbnail list-inline"
                                         alt=""
                                         title="">
                                    <h4>Dr.Mark Leon<br/><span>Anesthesiologist</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl
                                        fringilla commodo.
                                        ornare, augue ut ultricies tristique, </p>
                                </div>
                                <div class="item">
                                    <img src="images/client/doctor-img.png" class="img-circle img-thumbnail" alt=""
                                         title="">
                                    <h4>Dr.Mark Leon<br/><span>Anesthesiologist</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl
                                        fringilla commodo.
                                        ornare, augue ut ultricies tristique, </p>
                                </div>
                                <div class="item">
                                    <img src="images/client/doctor-img.png" class="img-circle img-thumbnail" alt=""
                                         title="">
                                    <h4>Dr.Mark Leon<br/><span>Anesthesiologist</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl
                                        fringilla commodo.
                                        ornare, augue ut ultricies tristique, </p>
                                </div>
                            </div>


                        </div>
                        <h2 class="bordered light">medicom <span>tour</span></h2>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title active">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            <span><i class="fa-solid fa-tooth"></i></span>Outpatient Rehabilitation
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <span><i class="fa-solid fa-tooth"></i></span>Dental Instruments
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <span><i class="fa-solid fa-tooth"></i></span>Outpatient Rehabilitation
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                            <span><i class="fa-solid fa-tooth"></i></span>Outpatient Surgery
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                            <span><i class="fa-solid fa-tooth"></i></span>Outpatient Rehabilitation
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                            <span><i class="fa-solid fa-tooth"></i></span>Heart Clinic
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                            <span><i class="fa-solid fa-tooth"></i></span>Weight Loss
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                            <span><i class="fa-solid fa-tooth"></i></span>Rehabilitation Center
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                            <span><i class="fa-solid fa-tooth"></i></span>Outpatient Rehabilitation
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                                            <span><i class="fa-solid fa-tooth"></i></span>Surgery & Transplants
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                                            <span><i class="fa-solid fa-tooth"></i></span>Medical Counseling
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Aldus
                                        Page Maker including versions.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>

                </div>

            </div>

        </section>


        <!-- App Store
        ============================================= -->
        <section class="medicom-app" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/client/mobile-hand.png" class="app-img" alt="" title="">
                    </div>
                    <div class="col-md-7">
                        <div class="medicom-app-content">
                            <h1>medicom App Available</h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                <span>AVAILABLE ON STORES</span>
                            </p>
                            <ul class="list-unstyled app-buttons">
                                <li><a href="#."><img src="images/client/app-store-btn.png" alt=""
                                                      title="App Store"></a></li>
                                <li><a href="#."><img src="images/client/google-play-btn.png" alt="" title="Google App"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonials
        ============================================= -->
        <section class="testimonials bg-white text-center">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div id="carousel-testimonials" class="owl-carousel slide testimonials-carousel">

                            <div class="item">
                                <h1>What Our patients Say About Us</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis
                                    pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu, et consectetur
                                    orci Quisque posuere dolor in malesuada fermentum.</p>
                                <div class="testimonials-patient-detail">
                                    <img src="images/client/patient-img.png" class="img-circle img-thumbnail" alt=""
                                         title="">
                                    <p>fred albert<span>Heart patient</span></p>
                                </div>
                            </div>

                            <div class="item">
                                <h1>What Our patients Say About Us</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis
                                    pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu, et consectetur
                                    orci Quisque posuere dolor in malesuada fermentum.</p>
                                <div class="testimonials-patient-detail">
                                    <img src="images/client/patient-img.png" class="img-circle img-thumbnail" alt=""
                                         title="">
                                    <p>fred albert<span>Heart patient</span></p>
                                </div>
                            </div>

                            <div class="item">
                                <h1>What Our patients Say About Us</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis
                                    pretium, euismod ipsum nec, placerat turpis. Aenean eu gravida arcu, et consectetur
                                    orci Quisque posuere dolor in malesuada fermentum.</p>
                                <div class="testimonials-patient-detail">
                                    <img src="images/client/patient-img.png" class="img-circle img-thumbnail" alt=""
                                         title="">
                                    <p>fred albert<span>Heart patient</span></p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div><!--end #content-index-->


    <div class="colourfull-row"></div>


    <!-- Footer
    ============================================= -->
    <footer id="footer" class="light">

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <!-- Footer Widget
                    ============================================= -->
                    <div class="footer-widget">

                        <h4><span>Medicom</span></h4>

                        <ul class="footer-nav list-unstyled clearfix">
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Home</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Doctors</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>About US</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Departments</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Services</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Blog</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Why US</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Medical Care</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Specilaties</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Timetable</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Events</a></li>
                            <li><a href="#."><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
                        </ul>

                    </div>

                </div>

                <div class="col-md-3">

                    <!-- Footer Widget
                    ============================================= -->
                    <div class="footer-widget">

                        <h4><span>newsletter</span></h4>

                        <div class="newsletter clearfix">

                            <i class="fa fa-envelope"></i>
                            <p class="newsletter-text">Sign up with your name and email to
                                get updates fresh updates.</p>

                            <div class="success" id="message-news" style="display:none;">Thank you! You have
                                successfully subscribed.
                            </div>
                            <form name="newsletter_form" id="newsletter_form" method="post" action="submit.php"
                                  onSubmit="return false">
                                <input type="text" name="news_name" id="news_name" placeholder="Your Name"
                                       onKeyPress="removeChecks();">
                                <input type="email" name="news_email_address" id="news_email_address"
                                       placeholder="Email Address" onKeyPress="removeChecks();">
                                <input type="submit" value="subscribe" class="btn btn-default btn-rounded"
                                       onClick="validateNewsletter();">
                            </form>

                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <!-- Footer Widget
                    ============================================= -->
                    <div class="footer-widget">

                        <h4><span>Latest Tweets</span></h4>

                        <div class="twitter-widget">

                            <div class="tweet">
                                <i class="fa fa-twitter"></i>
                                <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                                    <span>about a month ago</span>
                                </p>
                            </div>

                            <div class="tweet">
                                <i class="fa fa-twitter"></i>
                                <p><a href="#">@Rotography</a> Please kindly use our Support Forum: <a href="#.">pixelatic.co.uk.</a>
                                    <span>about a month ago</span>
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <!-- Footer Widget
                    ============================================= -->
                    <div class="footer-widget">

                        <h4><span>get in touch</span></h4>
                        <p>Medico Bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>

                        <div class="contact-widget">
                            <i class="fa fa-home"></i>
                            <p>Medicom Ltd, Manhattan 1258, New York, USA Lahore</p>
                            <i class="fa fa-globe"></i>
                            <p><a href="#.">www.medicom.com</a></p>
                            <i class="fa fa-mobile"></i>
                            <p class="phone-number">(+1) 234 567 8901</p>
                        </div>

                        <ul class="social3 clearfix">
                            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#."><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#."><i class="fa fa-skype"></i></a></li>
                            <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#."><i class="fa fa-dribbble"></i></a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>


        <!-- Copyright
        ============================================= -->
        <p class="copyright text-center">Copyright &copy; 2014 Medicom. All right reserved.</p>


        <!-- Footer Bottom
        ============================================= -->
        <div class="container">
            <div class="row">
                <div class="col-md-2"><a href="#."><img src="images/client/footer-logo.jpg" alt="" title="Medicom Logo"></a>
                </div>
                <div class="col-md-10">
                    <p class="footer-bottom-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing.</p>
                </div>
            </div>
        </div>


    </footer>

    <!-- back to top -->
    <a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

</div><!--end #wrapper-->


<!-- All Javascript
============================================= -->
<script src="js/client/jquery.js"></script>
<script src="js/client/bootstrap.min.js"></script>
<script src="js/client/jquery.stellar.js"></script>
<script src="js/client/jquery-ui-1.10.3.custom.js"></script>
<script src="js/client/owl.carousel.js"></script>
<script src="js/client/counter.js"></script>
<script src="js/client/waypoints.js"></script>
<script src="js/client/jquery.uniform.js"></script>
<script src="js/client/easyResponsiveTabs.js"></script>
<script src="js/client/jquery.fancybox.pack.js"></script>
<script src="js/client/jquery.fancybox-media.js"></script>
<script src="js/client/jquery.mixitup.js"></script>
<script src="js/client/forms-validation.js"></script>
<script src="js/client/jquery.jcarousel.min.js"></script>
<script src="js/client/jquery.easypiechart.min.js"></script>
<script src="js/client/scripts.js"></script>

<!-- This page
============================================= -->
<script src="js/client/jquery.themepunch.plugins.min.js"></script>
<script src="js/client/jquery.themepunch.revolution.min.js"></script>


<script>

    (function () {

        // Revolution slider
        var revapi;
        revapi = jQuery('.tp-banner').revolution(
            {
                delay: 9000,
                startwidth: 1170,
                startheight: 682,
                hideThumbs: 200,
                fullWidth: "on",
                forceFullWidth: "on"
            });

    })();

</script>

</body>
</html>

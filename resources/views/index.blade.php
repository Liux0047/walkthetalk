<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Agency Parallax Responsive HTML5/CSS3 Template | FIFO THEMES</title>
    <meta name="description" content="Agency Parallax Responsive HTML5/CSS3 Template from FIFOTHEMES.COM">
    <meta name="author" content="FIFOTHEMES.COM">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"/>
    <!-- Library CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team-member.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}" media="screen">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <!-- Skin -->
    <link rel="stylesheet" href="{{ asset('css/colors/teal.css') }}" class="colors">


    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/ico/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/ico/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/ico/apple-touch-icon-72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/ico/apple-touch-icon-114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/ico/apple-touch-icon-144.png') }}">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}') }}"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="75">
<!-- Page Preloader -->
<div class="page-mask">
    <div class="page-loader">

        <div class="spinner"></div>
    </div>
</div>
<!-- /Page Preloader -->

<!-- Warpper -->
<div class="wrap with-logo">


    <!-- Image Background Parallax -->
    <div id="section" class="image-parallax" style="background-image: url({{ asset('img/slider/bx1.jpg') }})">

        <div class="bg-overlay">
            <div class="slide-content light">
                <div class="align-center">
                    <!-- Top Logo -->
                    <div class="top-logo">
                        <div class="scrollNormal">
                            <a href="#section2">
                                <img width="140" height="140" alt="Agency" src="{{ asset('img/logo_welcome.png') }}">
                            </a>
                        </div>
                        <div class="scrollDown">
                            <a href="#section2">
                                <img width="140" height="140" alt="Agency" src="{{ asset('img/logo2_welcome.png') }}">
                            </a>
                        </div>
                    </div>
                    <!-- /Top Logo -->
                    <ul class="text-slide">
                        <li>Explore <span class="text-color">Agency</span> Theme</li>
                        <li><span class="text-color">creative</span> team work</li>
                        <li>Great <span class="text-color">features</span> included!</li>
                    </ul>
                    <a href="#section2" class="btn btn-1 img-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!--/Image Background Parallax -->

    <!-- Header -->
    <header id="section1" class="parallax-slider">
        <!-- Navigation -->
        <div id="navigation">
            <nav class="navbar navbar-custom cl-effect-21" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 mob-logo">
                            <div class="row">
                                <div class="site-logo">
                                    <a href="../../../AGENCY-HTML/HTML/index-image-slider.html"><img
                                                src="{{ asset('img/logo.png') }}" alt="Agency"></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-10 mob-menu">
                            <div class="row">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target="#menu">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="menu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#section1">Home</a></li>
                                        <li><a href="#section2">About Us</a></li>
                                        <li><a href="#section3">Portfolio</a></li>
                                        <li><a href="#section4">Services</a></li>
                                        <li><a href="#section5">Clients</a></li>
                                        <li><a href="#section6">Pricing</a></li>
                                        <li class="dropdown nav-toggle">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<b
                                                        class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="external"
                                                       href="../../../AGENCY-HTML/HTML/blog.html">Blog</a></li>
                                                <li><a class="external" href="../../../AGENCY-HTML/HTML/blog-big.html">Blog
                                                        Large</a></li>
                                                <li><a class="external"
                                                       href="../../../AGENCY-HTML/HTML/single-post.html">Single Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#section7">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- /.Navbar-collapse -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
        </div>
        <!-- /Navigation -->
    </header>
    <!-- /Header -->

    <!-- Section 2 -->
    <section id="section2" class="about">
        <div class="container">
            <!-- Title row -->
            <div class="row">
                <div class="col-md-12 big-title wow bounceIn">
                    <h2>About Us</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 sub-title text-center wow slideInRight">
                    <h3>We match the project goals with a proposed solution considering latest web features, web design
                        and corporate branding!</h3>
                </div>
            </div>
            <!-- /Title row -->

            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('img/imac-device.png') }}" alt="About Us" class="img-responsive">
                </div>
            </div>


        </div>

        <!-- Service wrap -->
        <div class="about-wrap">
            <div class="parallax-layer">
                <div class="icons"></div>
            </div>
            <div class="parallax-layer">
                <div class="texture"></div>
            </div>
            <div class="container">
                <!-- Content row -->
                <div class="row">
                    <!-- Content box 1 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box big ch-item wow fadeInLeft">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>Professional Work</h4>

                                <p>
                                    Great development is the architecture that complements and supports the design. It
                                    is made by excellent use of white space, and plenty of it!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 1 -->

                    <!-- Content box 2 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box big ch-item wow fadeInDown">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>Unique Design</h4>

                                <p>
                                    Great development is the architecture that complements and supports the design. It
                                    is made by excellent use of white space, and plenty of it!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 2 -->

                    <!-- Content box 3 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="content-box big ch-item wow fadeInRight">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>Superb Support</h4>

                                <p>
                                    Great development is the architecture that complements and supports the design. It
                                    is made by excellent use of white space, and plenty of it!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 3 -->
                </div>
                <!-- /Content row -->
            </div>
        </div>
        <!-- /Service wrap -->

        <!-- What we do best -->
        <div class="skills-wrap">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>What we do best</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>It is not enough that we do our best; sometimes we must do what is required!</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <!-- Expertise progress bars -->
                <div class="skills">
                    <ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                        <li class="progress">
                            <div class="progress-bar" data-width="85">
                                Wordpress 85%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="65">
                                Graphic Design 65%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="90">
                                HTML/CSS Design 90%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="60">
                                SEO 60%
                            </div>
                        </li>
                    </ul>
                    <ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                        <li class="progress">
                            <div class="progress-bar" data-width="75">
                                Agencying 75%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="95">
                                App Development 95%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="70">
                                IT Consultency 70%
                            </div>
                        </li>
                        <li class="progress">
                            <div class="progress-bar" data-width="90">
                                Theme Development 90%
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /Expertise progress bars -->
            </div>
        </div>
        <!-- /What we do best -->


        <!-- Quote of the day -->
        <div class="quote-wrap light">
            <div class="texture-layer">
                <div class="container">
                    <h2>
                        <i class="fa fa-quote-left wow fadeInLeft"></i>
                                          <span class="wow bounceIn">
                                                Design is a plan for arranging elements in such a way as best to accomplish a particular purpose.
                                          </span>
                        <i class="fa fa-quote-right wow" data-animate="fadeInRight"></i>
                    </h2>

                    <p class="animated wow" data-animate="fadeInUp">- Charles Eames -</p>
                </div>
            </div>
        </div>
        <!-- /Quote of the day -->

        <!-- Agency team -->
        <div class="team-wrap">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>Agency Team</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>Get to know the talented people behind it all, and read our latest thinking about web design
                            process, web development and content Agencying!</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <!-- Team members row 1-->
                <div class="row">
                    <!-- item 1 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item wow fadeInLeft">
                        <div class="team-member">
                            <div class="team-member-holder">
                                <div class="team-member-image">
                                    <img alt="" src="{{ asset('img/team/team-member-1.jpg') }}">

                                    <div class="team-member-links">
                                        <div class="team-member-links-list">
                                            <a target="_blank" class="facebook team-member-links-item" href="#"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a target="_blank" class="twitter team-member-links-item" href="#"><i
                                                        class="fa fa-twitter"></i></a>
                                            <a target="_blank" class="linkedin team-member-links-item" href="#"><i
                                                        class="fa fa-linkedin"></i></a>

                                            <p>
                                                Lorem ipsum dolor sit amet, quis adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Monzurul Haque</h4>

                                    <div class="team-member-role">
                                        CEO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- item 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item wow fadeInDown">
                        <div class="team-member">
                            <div class="team-member-holder">
                                <div class="team-member-image">
                                    <img alt="" src="{{ asset('img/team/team-member-2.jpg') }}">

                                    <div class="team-member-links">
                                        <div class="team-member-links-list">
                                            <a target="_blank" class="facebook team-member-links-item" href="#"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a target="_blank" class="twitter team-member-links-item" href="#"><i
                                                        class="fa fa-twitter"></i></a>
                                            <a target="_blank" class="linkedin team-member-links-item" href="#"><i
                                                        class="fa fa-linkedin"></i></a>

                                            <p>
                                                Lorem ipsum dolor sit amet, quis adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Jessica Alba</h4>

                                    <div class="team-member-role">
                                        CMO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- item 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item wow fadeInDown">
                        <div class="team-member">
                            <div class="team-member-holder">
                                <div class="team-member-image">
                                    <img alt="" src="{{ asset('img/team/team-member-3.jpg') }}">

                                    <div class="team-member-links">
                                        <div class="team-member-links-list">
                                            <a target="_blank" class="facebook team-member-links-item" href="#"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a target="_blank" class="twitter team-member-links-item" href="#"><i
                                                        class="fa fa-twitter"></i></a>
                                            <a target="_blank" class="linkedin team-member-links-item" href="#"><i
                                                        class="fa fa-linkedin"></i></a>

                                            <p>
                                                Lorem ipsum dolor sit amet, quis adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Emma Watson</h4>

                                    <div class="team-member-role">
                                        CFO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- item 4 -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item wow fadeInRight">
                        <div class="team-member">
                            <div class="team-member-holder">
                                <div class="team-member-image">
                                    <img alt="" src="{{ asset('img/team/team-member-4.jpg') }}">

                                    <div class="team-member-links">
                                        <div class="team-member-links-list">
                                            <a target="_blank" class="facebook team-member-links-item" href="#"><i
                                                        class="fa fa-facebook"></i></a>
                                            <a target="_blank" class="twitter team-member-links-item" href="#"><i
                                                        class="fa fa-twitter"></i></a>
                                            <a target="_blank" class="linkedin team-member-links-item" href="#"><i
                                                        class="fa fa-linkedin"></i></a>

                                            <p>
                                                Lorem ipsum dolor sit amet, quis adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Atiar Rahman</h4>

                                    <div class="team-member-role">
                                        CTO
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
                <!-- /Team members row 1-->
            </div>
        </div>
        <!-- /Agency team -->

        <!-- Fun Facts -->
        <div class="fun-wrap">
            <div class="texture-layer">
                <div class="container">
                    <!-- Title row -->
                    <div class="row">
                        <div class="col-md-12 big-title light wow bounceIn">
                            <h2>Some Fun Facts</h2>
                        </div>
                    </div>
                    <!-- /Title row -->

                    <div class="row">
                        <div class="col-md-3 wow fadeInLeft">
                            <div class="fun-box">
                                <i class="fa fa-clock-o"></i>
                                <span class="fun" data-from="0" data-to="4555" data-speed="5000"
                                      data-refresh-interval="50"></span>

                                <p>Hours of work</p>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeInDown">
                            <div class="fun-box">
                                <i class="fa fa-users"></i>
                                <span class="fun" data-from="0" data-to="101" data-speed="5000"
                                      data-refresh-interval="50"></span>

                                <p>Satisfied client</p>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeInDown">
                            <div class="fun-box">
                                <i class="fa fa-check"></i>
                                <span class="fun" data-from="0" data-to="222" data-speed="5000"
                                      data-refresh-interval="50"></span>

                                <p>Projects Completed</p>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeInRight">
                            <div class="fun-box">
                                <i class="fa fa-trophy"></i>
                                <span class="fun" data-from="0" data-to="49" data-speed="5000"
                                      data-refresh-interval="50"></span>

                                <p>Awards Won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Fun Facts -->
    </section>
    <!-- /Section 2 -->

    <!-- Section 3 -->
    <section id="section3" class="portfolio">
        <!-- Title row -->
        <div class="row">
            <div class="col-md-12 big-title wow bounceIn">
                <h2>Portfolio</h2>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-12 sub-title text-center wow slideInRight">
                <h3>More people will pay you money to help them achieve a monetary goal than will pay you to give them
                    something pretty to look at!</h3>
            </div>
        </div>
        <!-- /Title row -->

        <!-- Portfolio Filters -->
        <div id="filters" class="wow fadeInLeft">

            <ul class="clearfix">
                <li><a id="all" href="#" data-filter="*" class="active"><h5>All</h5></a></li>
                <li><a href="#" data-filter=".wordpress"><h5>Wordpress</h5></a></li>
                <li><a href="#" data-filter=".jquery"><h5>jQuery</h5></a></li>
                <li><a href="#" data-filter=".php"><h5>PHP</h5></a></li>
                <li><a href="#" data-filter=".css') }}"><h5>CSS</h5></a></li>
                <li><a href="#" data-filter=".html"><h5>HTML</h5></a></li>
            </ul>
        </div>
        <!-- /Portfolio Filters -->

        <!-- Portfolio Wrap -->
        <div id="portfolio-wrap">

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four wordpress html css">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio2.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio2.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four php jquery">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio3.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio3.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four wordpress css html">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio4.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio4.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four branding jquery">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio5.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio5.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->


            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four php html css">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio6.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio6.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four wordpress jquery">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio7.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio7.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four css php html jquery">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio8.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio8.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->

            <!-- Portfolio Item With PrettyPhoto  -->
            <div class="portfolio-item one-four wordpress php css">
                <div class="img-holder">
                    <img class="img-responsive" src="{{ asset('img/portfolio/portfolio1.jpg') }}" alt="">

                    <div class="img-overlay"></div>
                    <div class="overlay-effect">
                                        <span class="RoundBg"><a data-gal="prettyPhoto[galname]"
                                                                 href="{{ asset('img/portfolio/portfolio1.jpg') }}"><i
                                                        class="fa fa-search"></i></a>
                                        </span>
                                        <span class="RoundBg"><a href=""><i class="fa fa-link"></i></a>
                                        </span>
                    </div>
                </div>
            </div>
            <!-- /Portfolio Item With PrettyPhoto  -->


        </div>
        <!-- /Portfolio Wrap -->
    </section>
    <!-- /Section 3 -->

    <!-- Section 4 -->
    <section id="section4" class="services">
        <div class="service-wrap">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>Services</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>We match the project goals with a proposed solution considering latest web features, web
                            design and corporate branding!</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <!-- Service row 1 -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Responsive Layout</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Retina Ready</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Rich Elements</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service row 1 -->

                <!-- Service row 2 -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-leaf"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Unique Design</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>New Approach</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>SEO Ready</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service row 2 -->

                <!-- Service row 3 -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Professional Quality</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>HTMl5 Codes</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Timely Delivery</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service row 3 -->
            </div>
        </div>
    </section>
    <!-- /Section 4 -->

    <!-- Section 5 -->
    <section id="section5" class="clients">
        <div class="testimonial-wrap">
            <div class="texture-layer">
                <div class="container">
                    <!-- Title row -->
                    <div class="row">
                        <div class="col-md-12 big-title light wow bounceIn">
                            <h2>Clients Feedback</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 sub-title text-center light wow slideInRight">
                            <h3>Great designs are made by excellent use of white space, and plenty of it!</h3>
                        </div>
                    </div>
                    <!-- /Title row -->

                    <!-- Testimonial row-->
                    <div class="row">
                        <div class="testimonials">
                            <div class="col-md-1">
                                <div class="carousel-controls">
                                    <a class="prev" href="#testimonials-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-10">
                                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-1.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Monica Sing</span></a> FIFO
                                                            Themes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-2.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Monzurul Haque</span></a>
                                                            FIFO Themes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-3.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Carol Johansen</span></a>
                                                            FIFO Themes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="carousel-controls pull-right">
                                    <a class="next" href="#testimonials-carousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Testimonial row-->
                </div>
            </div>
        </div>


    </section>
    <!-- /Section 5 -->

    <!-- Section 6 -->
    <section id="section6" class="pricing">
        <div class="container">
            <div class="row flat">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>Pricing</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>What you have become is the price you paid to get what you used to want!</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft">
                        <ul class="plan plan1">
                            <li class="plan-name">
                                Basic
                            </li>
                            <li class="plan-price">
                                <strong>$29</strong> / month
                            </li>
                            <li>
                                <strong>5GB</strong> Storage
                            </li>
                            <li>
                                <strong>1GB</strong> RAM
                            </li>
                            <li>
                                <strong>400GB</strong> Bandwidth
                            </li>
                            <li>
                                <strong>10</strong> Email Address
                            </li>
                            <li>
                                <strong>Forum</strong> Support
                            </li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-2 btn-2c">Signup</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <ul class="plan plan2 featured">
                            <li class="plan-name">
                                Standard
                            </li>
                            <li class="plan-price">
                                <strong>$39</strong> / month
                            </li>
                            <li>
                                <strong>5GB</strong> Storage
                            </li>
                            <li>
                                <strong>1GB</strong> RAM
                            </li>
                            <li>
                                <strong>400GB</strong> Bandwidth
                            </li>
                            <li>
                                <strong>10</strong> Email Address
                            </li>
                            <li>
                                <strong>Forum</strong> Support
                            </li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-2 btn-2c">Signup</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInDown">
                        <ul class="plan plan3">
                            <li class="plan-name">
                                Advanced
                            </li>
                            <li class="plan-price">
                                <strong>$199</strong> / month
                            </li>
                            <li>
                                <strong>5GB</strong> Storage
                            </li>
                            <li>
                                <strong>1GB</strong> RAM
                            </li>
                            <li>
                                <strong>400GB</strong> Bandwidth
                            </li>
                            <li>
                                <strong>10</strong> Email Address
                            </li>
                            <li>
                                <strong>Forum</strong> Support
                            </li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-2 btn-2c">Signup</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight">
                        <ul class="plan plan4">
                            <li class="plan-name">
                                Mighty
                            </li>
                            <li class="plan-price">
                                <strong>$999</strong> / month
                            </li>
                            <li>
                                <strong>5GB</strong> Storage
                            </li>
                            <li>
                                <strong>1GB</strong> RAM
                            </li>
                            <li>
                                <strong>400GB</strong> Bandwidth
                            </li>
                            <li>
                                <strong>10</strong> Email Address
                            </li>
                            <li>
                                <strong>Forum</strong> Support
                            </li>
                            <li class="plan-action">
                                <a href="#" class="btn btn-2 btn-2c">Signup</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section 6 -->

    <!-- Section 7 -->
    <section id="section7" class="contacts">
        <!-- Subscription Wrap -->
        <div class="subscription-wrap light">
            <div class="texture-layer">
                <div class="container">
                    <!-- Title row -->
                    <div class="row">
                        <div class="col-md-12 big-title light wow bounceIn">
                            <h2>Subscribe with us</h2>
                        </div>
                    </div>
                    <!-- /Title row -->

                    <!-- Subscription form -->
                    <div class="row text-center">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <form method="post" action="#" id="signup">
                                <fieldset>
                                    <span id="response"></span>

                                    <input class="form-control subEmail wow fadeInLeft" type="text"
                                           placeholder="Email Address" id="subEmail" name="subEmail">
                                    <button class="btn btn-1 wow fadeInRight">Join</button>

                                    <div id="no-spam" class="wow fadeInUp">* We'll never spam or give this address
                                        away
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                    <!-- /Subscription form -->
                </div>
            </div>
        </div>
        <!-- /Subscription Wrap -->

        <!-- Contact form -->
        <div class="contact-form">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>Contact</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>Contact with us to learn more about all of our Web Design Services!</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <!-- Form element row -->
                <div class="row text-center">
                    <div class="col-md-2"></div>

                    <div class="col-md-8">
                        <form method="post" class="reply" id="contact">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" id="name" name="name" type="text"
                                                       placeholder="Name" value="" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="email" id="email" name="email"
                                                       placeholder="Email" value="" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" id="subject" name="subject"
                                                       placeholder="Subject" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInRight">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="text" name="text" rows="3" cols="40"
                                                          placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 wow fadeInUp">
                                        <button type="submit" class="btn btn-2 btn-2c">Send</button>
                                        <div class="success alert-success alert" style="display:none">Your message has
                                            been sent successfully.
                                        </div>
                                        <div class="error alert-danger alert" style="display:none">E-mail must be valid
                                            and message must be longer than 100 characters.
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class="col-md-2"></div>
                </div>
                <!-- /Form element row -->
            </div>
        </div>
        <!-- /Contact form -->

        <!-- Google Map -->
        <div class="map-wrap">
            <div class="wow fadeInUp">
                <div id="maps" class="google-maps">
                </div>
            </div>
        </div>
        <!-- /Google Map -->

        <footer class="footer-wrap text-center">
            <div class="container">
                <ul class="social social-icons-footer-bottom wow fadeInDown">
                    <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i
                                    class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="dribbble"><a href="#" data-toggle="tooltip" title="Dribble"><i
                                    class="fa fa-dribbble"></i></a></li>
                    <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i
                                    class="fa fa-linkedin"></i></a></li>
                    <li class="rss"><a href="#" data-toggle="tooltip" title="Rss"><i class="fa fa-rss"></i></a></li>
                </ul>

                <p class="site-info wow fadeInUp"> © 2014 FifoThemes</p>
            </div>
        </footer>
    </section>
    <!-- /Section 7 -->

    <!-- Scroll To Top -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</div>
<!-- /Warpper -->


<!-- The Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.0.0.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/jquery.hparallax.js') }}"></script>
<script src="{{ asset('js/jquery.wait.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/fappear.js') }}"></script>
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('js/jquery.maximage.js') }}"></script>
<script src="{{ asset('js/jquery.cycle.all.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.isotope.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/skrollr.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('js/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('js/tytabs.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
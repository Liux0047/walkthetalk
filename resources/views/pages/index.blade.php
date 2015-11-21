@extends('layouts.base')


@section('content')
@include('components.common.page-preloader')
        <!-- Warpper -->
<div class="wrap with-logo">
    <!-- Header -->
    <header id="section1" class="parallax-slider">
        @include('components.page-frame.parallax')
    </header>
    <!-- /Header -->

    <!-- Section 2 -->
    <section id="section2" class="about">
        <div class="container">
            <!-- Title row -->
            <div class="row">
                <div class="col-md-12 big-title wow bounceIn">
                    <h2>What is Walk-the-Talk</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 sub-title text-center wow slideInRight">
                    <h3>We believe that for a high school or college student, learning English is not just about the
                        language itself.</h3>
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="content-box big ch-item wow fadeInLeft">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-arrows-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>PEER GUIDES</h4>

                                <p>
                                    Meet native speakers; have fun with local undergraduate tour guides
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 1 -->

                    <!-- Content box 2 -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="content-box big ch-item wow fadeInDown">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>DYNAMIC EXPERIENCE</h4>

                                <p>
                                    Mingle with peers from different countries and cultural backgrounds.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 2 -->


                    <!-- Content box 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="content-box big ch-item wow fadeInDown">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>COMPETENCY BUILDUP</h4>

                                <p>
                                    Develop communication, interpersonal and leadership skills; practice public
                                    speaking
                                    and teamwork essentials
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Content box 3 -->

                    <!-- Content box 3 -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="content-box big ch-item wow fadeInRight">
                            <div class="ch-info-wrap">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="content-box-info">
                                <h4>CUSTOMIZABLE SERVICES</h4>

                                <p>
                                    Explore various themes, visit local families, and enjoy personalized travel
                                    documentary
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
                                                THE WORLD IS A BOOK. <br>THOSE WHO DO NOT TRAVEL ONLY READ A PAGE.
                                          </span>
                        <i class="fa fa-quote-right wow" data-animate="fadeInRight"></i>
                    </h2>

                    <p class="animated wow" data-animate="fadeInUp">- Saint Augustine -</p>
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
                        <h2>Our Team</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>We are a group of young, energetic people who aspire to explore the world with you</h3>
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
                                                Awarded Singapore SM2 scholarship for his university studies at
                                                Nanyang
                                                Technological University while studying in Chonqqing Foreign
                                                Languages
                                                School. Interned at UBS, Westpac Bank and many fresh start-ups.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Jerry He</h4>

                                    <div class="team-member-role">
                                        Chief Executive Officer (Founder)
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
                                                Graduated from Tianjin University and studied in Chongqing Foreign
                                                Languages School Attached to Sichuan International Studies
                                                University.
                                                Awarded a one-year Australian government scholarship for his
                                                overseas
                                                studies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Aaron Duan</h4>

                                    <div class="team-member-role">
                                        Chief Public-relation Officer
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
                                                Finished his middle school studies in Fujian Fuzhou No1. Middle
                                                School.
                                                Awarded Singapore SM2 Scholarship for his study in Mechanical &
                                                Aerospace Engineering School Design Stream, in which he is now
                                                pursuing
                                                his Ph.D.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Tracy Huang</h4>

                                    <div class="team-member-role">
                                        Chief Marketing Officer (Co-founder)
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
                                                Graduated from Chongqing University, with Bachelor’s degree in
                                                accouting. Now working at Chongqing Xiliken Import and Export
                                                Corporation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-meta">
                                    <h4 class="team-member-name">Rye Wang</h4>

                                    <div class="team-member-role">
                                        Chief Public-relation Officer
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

    <!-- Section 4 -->
    <section id="section4" class="services">
        <div class="service-wrap">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>Programs</h2>
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>Edutainment Camp</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="service-box-content">
                                <h4>A Glimpse to Nanyang</h4>

                                <p>
                                    Lorem Ipsum is simply dummy text of Lorem the printing and typesettings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service row 1 -->
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
                            <h2>Testimonials</h2>
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
                                                        With the honour to be the pioneering batch of Edutainment
                                                        Camp,
                                                        I would say it was definitely an eye-opening experience.
                                                        Not only did I get a chance to practice English more, I also
                                                        made more international friends that I am still in touch
                                                        with.
                                                        This has really expanded my horizon to view the world from a
                                                        whole different angle.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-1.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Bobby Zeng</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                    <p>
                                                        As a high school student from China, A Glimpse to Nanyang
                                                        gave
                                                        me a first-person view on overseas studying experience.
                                                        I wanted to visit Singapore to see if this would be a good
                                                        destination for my college studies, and A Glimpse to Nanyang
                                                        offered me much more than that.
                                                        I also got to hear more from my seniors who went through
                                                        selection tests to be government scholars to study here.
                                                        I hope to go back one day to pursue my degree in Singapore.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-2.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Mengzhu Shi</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="testimonial item">
                                                    <p>
                                                        I have been to other overseas educational camps before, but
                                                        there is no one even compared to the Edutainment Camp.
                                                        Interaction was the most prominent trait I would say, with
                                                        international friends around my age.
                                                        They shared with me more about the English language, taught
                                                        me
                                                        more on public speaking and team work skills,
                                                        and I also learned how other non-English native speakers
                                                        learned
                                                        English, such as friends from Japan and Korea.
                                                        I definitely recommend this programme to anyone that is
                                                        interested to improve their English and other soft skills,
                                                        as well as make international friends.
                                                    </p>

                                                    <div class="testimonials-arrow"></div>
                                                    <div class="author">
                                                        <div class="testimonial-image ">
                                                            <img alt=""
                                                                 src="{{ asset('img/testimonial/team-member-3.jpg') }}">
                                                        </div>
                                                        <div class="testimonial-author-info">
                                                            <a href="#"><span class="color">Hank Liu</span></a>
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
                                        <div class="success alert-success alert" style="display:none">Your message
                                            has
                                            been sent successfully.
                                        </div>
                                        <div class="error alert-danger alert" style="display:none">E-mail must be
                                            valid
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
    </section>
    <!-- /Section 7 -->

    @include('components.page-frame.footer')
    @include('components.common.scroll-to-top')

</div>
<!-- /Warpper -->
@endsection

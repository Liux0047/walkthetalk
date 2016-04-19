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
                    <h2>{{ trans('index.about-us') }}</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 sub-title text-center wow slideInRight">
                    <h3>莱孚士教育科技有限公司成立于2015年，由一批荣获新加坡奖学金的留学生创建，是一家为国内高中生赴海外留学提供“一站式”服务的教育机构。莱孚士秉承着“过来人，更懂你”的理念，致力于成为广大青年学子最信赖的留学引路人。</h3>
                </div>
            </div>
            <!-- /Title row -->
        </div>
    </section>
    <!-- /Section 2 -->

    <!-- Section 4 -->
    <section id="section4" class="services">
        <div class="service-wrap">
            <div class="container">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>“一站式”服务</h2>
                    </div>

                    {{--<div class="clearfix"></div>--}}

                   {{-- <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>We match the project goals with a proposed solution considering latest web features, web
                            design and corporate branding!</h3>
                    </div>--}}
                </div>
                <!-- /Title row -->


                <!-- Service row 1 -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                            <div class="service-box-content">
                                <h4 align = "left">SAT辅导</h4>
                                <p>
                                    参加 SAT 考试是通往美国大学的第一站，也是至关重要的一站。“引路人”不仅会帮你在这一站取得优异的成绩，还会帮你建立宝贵的留学人脉，收获难忘的出国体验。
                                </p>
                                <p><b><ins><a href="{{ Route('SAT-tour') }}">查看详细>></a></ins></b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 big-title wow bounceIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                            <div class="service-box-content">
                                <h4 align = "left">SAT考团</h4>
                                <p>
                                    SAT 成绩是实现美国大学梦的敲门砖，广大学子都为此而努力着。然而在追梦路上，使用英文答题的理科考试往往成了最大的阻碍。“助梦人”不仅希望能帮助你突破这一瓶颈，更希望能帮助你培养英文环境下的理科思维，从而为你日后的海外学习做好充足的准备。
                                </p>
                                <p><b><ins><a href="{{ Route('SAT-tutor') }}">查看详细>></a></ins></b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 big-title wow bounceIn">
                        <div class="service-box">
                            <div class="service-icon">
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                            <div class="service-box-content">
                                <h4 align = "left">冬/夏令营</h4>
                                <p>
                                    平时用功读书，暑期怎么安排？加入”伴游人“之旅，让你的暑期与众不同！这个夏天，和“伴游人”一同前往美丽的狮城，漫步世界名校南洋理工大学，畅游风景宜人的圣淘沙海岛，结交来自世界各地的小伙伴。“伴游人”愿意陪你在旅途中成长，在游戏中学习，在活动中收获宝贵的跨国友谊，为你的人生添上浓墨重彩的一笔。
                                </p>
                                <p><b><ins><a href="{{ Route('summer-camp') }}">查看详细>></a></ins></b></p>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeIn">--}}
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
                            <h2>TA们的感言</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 sub-title text-center light wow slideInRight">
                            <h3>待定!Great designs are made by excellent use of white space, and plenty of it!</h3>
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

    <!-- Section 7 -->

    <!-- /Section 7 -->

    @include('components.page-frame.footer')
    @include('components.common.scroll-to-top')

</div>
<!-- /Warpper -->
@endsection

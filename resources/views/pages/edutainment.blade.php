@extends('layouts.base')

@section('content')
    @include('components.page-frame.navbar')

    <section class="wrap">

        <div id="section2" class="about">
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
                                        Great development is the architecture that complements and supports the design.
                                        It is made by excellent use of white space, and plenty of it!
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
                                        Great development is the architecture that complements and supports the design.
                                        It is made by excellent use of white space, and plenty of it!
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
                                        Great development is the architecture that complements and supports the design.
                                        It is made by excellent use of white space, and plenty of it!
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
        </div>


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

            </div>
        </div>

    </section>


    <div class="container">

    </div>

    @include('components.page-frame.footer')
@endsection

@extends('layouts.base')

@section('content')
    @include('components.page-frame.navbar')

    <div class="wrap">

        <div class="content">
            <div class="container">

                <div class="row">
                    <!-- Post Block-->
                    <div class="posts-block col-lg-8 col-offset-2 col-md-8 col-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 bottom-pad">

                        <section id="company-info" class="page-title">
                            <!-- Title row -->
                            <div class="row">
                                <div class="col-md-12 big-title">
                                    <h2>{{ trans('about-us.company-info') }}</h2>
                                </div>
                            </div>
                            <!-- /Title row -->
                        </section>

                        <section class="blog single-post">
                            <article class="post hentry">
                                <div class="post-content">
                                    <p>
                                        {{ trans('about-us.company-info-content') }}
                                    </p>
                                </div>
                            </article>
                            <div class="blog-divider"></div>
                        </section>


                        <section id="program-info" class="page-title">
                            <!-- Title row -->
                            <div class="row">
                                <div class="col-md-12 big-title">
                                    <h2>{{ trans('about-us.program-info') }}</h2>
                                </div>
                            </div>
                            <!-- /Title row -->
                        </section>

                        <section class="blog single-post">

                            <article class="post hentry" id="program-info">
                                <header class="post-header">
                                    <h3 class="content-title">{{ trans('about-us.hithere-info') }}</h3>
                                </header>
                                <div class="post-content">
                                    <p>
                                        {{ trans('about-us.hithere-info-para1') }}
                                    </p>

                                    <p>
                                        {{ trans('about-us.hithere-info-para2') }}
                                    </p>

                                    <p>
                                        {{ trans('about-us.hithere-info-para3') }}
                                    </p>
                                </div>
                            </article>
                            <div class="blog-divider"></div>

                            <article class="post hentry">
                                <header class="post-header">
                                    <h3 class="content-title">{{ trans('about-us.dearsenior-info') }}</h3>
                                </header>
                                <div class="post-content">
                                    <p>
                                        {{ trans('about-us.dearsenior-info-para1') }}
                                    </p>

                                    <p>
                                        {{ trans('about-us.dearsenior-info-para2') }}
                                    </p>

                                    <p>
                                        {{ trans('about-us.dearsenior-info-para3') }}
                                    </p>
                                </div>
                            </article>
                            <div class="blog-divider"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.page-frame.footer')
@endsection


@section('additional-JS')
    <script src="{{ asset('plugin/vertical-timeline/js/main.js') }}"></script>
@endsection
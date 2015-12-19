@extends('layouts.base')

@section('additional-CSS')
    <link rel="stylesheet" href="{{ asset('plugin/vertical-timeline/css/style.css') }}">
@endsection

@section('content')
    @include('components.page-frame.navbar')

    <section class="wrap">
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

        <div class="container">
            <div class="row flat">
                <!-- Title row -->
                <div class="row">
                    <div class="col-md-12 big-title wow bounceIn">
                        <h2>{{ trans($packageName.'.itinerary') }}</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-12 sub-title text-center wow slideInRight">
                        <h3>{{ trans($packageName.'.itinerary-subtitle') }}</h3>
                    </div>
                </div>
                <!-- /Title row -->

                <!-- Itinerary -->
                <div class="row">
                    <div class="col-md-8">
                        <section id="cd-timeline" class="cd-container">
                            @foreach($package as $counter => $activity)
                                <div class="cd-timeline-block">
                                    @if($activity['icon'] == 'picture')
                                        <div class="cd-timeline-img cd-picture">
                                            <img src="{{ asset('plugin/vertical-timeline/img/cd-icon-picture.svg') }}"
                                                 alt="Picture">
                                        </div>
                                    @elseif($activity['icon'] == 'movie')
                                        <div class="cd-timeline-img cd-movie">
                                            <img src="{{ asset('plugin/vertical-timeline/img/cd-icon-movie.svg') }}"
                                                 alt="Movie">
                                        </div>
                                    @else
                                        <div class="cd-timeline-img cd-location">
                                            <img src="{{ asset('plugin/vertical-timeline/img/cd-icon-location.svg') }}"
                                                 alt="Location">
                                        </div>
                                        @endif
                                                <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h2>{{ trans($packageName.'.activity-title-'.($counter + 1)) }}</h2>

                                            <p>
                                                <i class="fa fa-map-marker"></i> {{ trans($packageName.'.activity-location-'.($counter + 1)) }}
                                            </p>

                                            <p>{{ trans($packageName.'.activity-description-'.($counter + 1)) }}</p>

                                            <p>
                                                <img src="{{ asset('img/packages/'.$packageName.'/activity-'.($counter + 1).".jpg") }}">
                                            </p>
                                        </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                            @endforeach
                        </section> <!-- cd-timeline -->
                    </div>
                </div>
                <!-- /Itinerary -->
            </div>
        </div>
    </section>



    @include('components.page-frame.footer')
@endsection


@section('additional-JS')
    <script src="{{ asset('plugin/vertical-timeline/js/main.js') }}"></script>
@endsection


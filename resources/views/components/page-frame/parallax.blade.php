<!-- Fullscreen Slider -->
<!-- /Full Screen Slider -->
@include('components.page-frame.navbar')
<div class="slider-container">
    <ul class="fullwidth-slider">
        @for($i=1; $i<=3; $i++)
                <!-- Slide {{ $i }} -->
        <li class="slide" style="background-image: url(img/slider/bx{{ $i }}.jpg);" data-anchor-target="section"
            data-70-top="background-position: center 400px;"
            data-start="background-position: center 0px;">
            <div class="bg-overlay">
                <!-- Caption -->
                <div class="caption">
                    <div class="caption-inside" data-anchor-target="section" data-start="top: 0px; opacity: 1;"
                         data-200-top="top: 270px; opacity: 0;">
                        <div class="slide-caption light">
                            <div class="vertical-align-middle">

                                <h1>{{ trans('parallax.caption-title-'.$i) }}</h1>

                                <p>
                                    {{ trans('parallax.caption-text-'.$i) }}
                                </p>
                                <a href="#section{{ $i }}" class="btn btn-1 img-btn">{{ trans('parallax.learn-more') }}</a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/Caption -->
            </div>
        </li>
        <!--/Slide {{ $i }} -->
        @endfor

    </ul>
</div>

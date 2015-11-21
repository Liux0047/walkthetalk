@extends('layouts.base')

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
    </section>


    <div class="container">

    </div>

    @include('components.page-frame.footer')
@endsection


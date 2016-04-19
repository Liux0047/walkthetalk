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
                            Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in one little corner of the earth all of one’s lifetime.
                        </span>
                        <i class="fa fa-quote-right wow" data-animate="fadeInRight"></i>
                    </h2>

                    <p class="animated wow" data-animate="fadeInUp">- Mark Twain -</p>
                </div>
            </div>
        </div>
        <!-- /Quote of the day -->

        <div class="container">
            <div class="row flat">
                <!-- Title row -->
                <div class="col-md-12 big-title wow bounceIn">
                    <h2>{{ trans($packageName.'.itinerary') }}</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12 sub-title text-center wow bounceIn">
                    <h3>{{ trans($packageName.'.itinerary-subtitle') }}</h3>
                </div>
            </div>
            <!-- /Title row -->

            <!-- Service row 1 -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-arrows-alt"></i>
                        </div>
                        <div class="service-box-content">
                            <h4>远高于传统夏令营的性价比</h4>

                            <p>
                                不同于传统意义的夏令营，我们希望给大多数热爱英文、渴望接触不同文化的高中、大学生们一次宝贵的体验机会，不会因为昂贵的出国费用而望而却步，也不会因为走马观花的行程在活动结束的时候懊悔不已。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="service-box-content">
                            <h4>直接接触并了解留学文化的机会</h4>

                            <p>
                                由来自中国的新加坡政府奖学金得主发起，全部成员都有五年以上留学背景，以‘过来人’的视角更客观、详细地为有留学意愿的高中、大学生答疑解惑。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="service-box-content">
                            <h4>广泛结交同龄外国朋友</h4>

                            <p>
                                在英文课堂和活动体验中，大家不仅将和新加坡大学生组队探索也将和众多的国际志愿者们互动交流，感受来自不同国度的年轻人的心声。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 wow fadeIn">
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="service-box-content">
                            <h4 >多方位提升综合素质</h4>

                           <p>
                               在号召素质教育的今天，我们将口号付诸行动，通过提取一系列‘素质教育模型’样板，并嵌入英文课堂，在有趣的氛围中提升大家的独立自主、团队合作以及英文沟通等综合素质和能力。
                           </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service row 1 -->
        </div>

        <div class="col-md-12 big-title wow bounceIn">
            <h2>{{ trans($packageName.'.program-title') }}</h2>
        </div>

        <div class="container">
            <!-- Start About Author -->
            <div class="about-author wow fadeInRight">
                <div class="author-content">
                    <div class="data">
                        <h4><a href="#">活动地点: 新加坡(Singapore)</a></h4>
                        <p>
                            有着‘花园城市’之称的新加坡地处东南亚，凭借近五十年来的自由贸易经济、高效劳动力和优越的地理位置，一举从贫穷落后的殖民地跃升为全世界最富有的国家之一，被誉为‘亚洲四小龙’之首，在金融、教育、科技等方面都处于全球领先地位。2015年8月9日，这个东西方文化汇聚交融的国度迎来了自己的五十岁生日。这次，就让我们一起去领略狮城--新加坡的魅力。
                        </p>
                    </div>
                    <!-- End date -->
                </div>
            </div>
            <!-- End About Author -->
            <div class="blog-divider"></div>

            <!-- Start About Author -->
            <div class="about-author wow fadeInRight">
                <div class="author-content">
                    <div class="data">
                        <h4><a href="#">活动形式</a></h4>
                        <p>
                            所有面向学生团体的夏令营或其他体验之旅都会秉承‘寓教于乐’的方针，但作为“过来人”，我们更了解你的期待：
                        </p>
                        <p>
                            英文课堂： 由英文为母语的国际外教（包括美国、英国、加拿大、澳大利亚、新西兰等国的志愿者以及大学生、研究生）借鉴BBC（英国广播公司）‘走进校园’系列英文互动课程的形式开展，不仅是对英语文化的介绍，更将通过开展‘模拟联合国’、‘Toastmaster’（英文演讲+专业测评）等综合素质提升课程，多方位地帮助大家铸造软实力。课堂地址在南洋理工大学校内。
                        </p>
                        <p>
                            旅游探索：以六至八个人为一个小队，每个小队分配两名新加坡当地大学生（新加坡国立大学、南洋理工大学本地大学生）为领队，沿着精心设计的旅游线路完成各项充满意义的任务挑战，感受奔跑吧兄弟的游戏设计。旅行路线不仅涵盖著名景点，更会探索最有南洋文化风情的”少有人走的路“。

                        </p>
                    </div>
                    <!-- End date -->
                </div>
            </div>
            <!-- End About Author -->
            <div class="blog-divider"></div>


            <div class="row flat">
                <!-- Title row -->
                <div class="col-md-12 big-title wow bounceIn">
                    <h2>“伴游人”-活动流程</h2>
                </div>

                <div class="clearfix"></div>
            </div>

            <!-- Itinerary -->
            <div class="row flat">
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

                <div class="col-md-4 wow fadeInLeft">
                    <ul class="plan plan1">
                        <li class="plan-name">
                            {{ trans($packageName.'.basic-info') }}
                        </li>
                        <li class="plan-price">
                            <p><strong>{{ trans($packageName.'.program-date-title') }}</strong></p>

                            <p>{{ trans(($packageName.'.program-date-info')) }}</p>
                        </li>
                        <li>
                            <p><strong>{{ trans($packageName.'.program-fee-title') }}</strong></p>

                            <p>{{ trans(($packageName.'.program-fee-info')) }}</p>
                        </li>
                        <li>
                            <p><strong>{{ trans($packageName.'.program-signup-title') }}</strong></p>

                            <p>{{ trans(($packageName.'.program-signup-info')) }}</p>

                            <p>
                                <img src="{{ asset('img/packages/'.$packageName.'/640') }}">
                            </p>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!-- /Itinerary -->

    </section>



    @include('components.page-frame.footer')
@endsection


@section('additional-JS')
    <script src="{{ asset('plugin/vertical-timeline/js/main.js') }}"></script>
@endsection


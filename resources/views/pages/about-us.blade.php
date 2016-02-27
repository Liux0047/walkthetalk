@extends('layouts.base')

@section('content')
    @include('components.page-frame.navbar')

    <div class="wrap">

        <!-- Section 5 -->
        <section id="company-info" class="clients">
            <div class="testimonial-wrap">
                <div class="texture-layer">
                    <div style="padding-top: 60px; padding-bottom: 30px;">
                        <!-- Title row -->
                        <div class="row">
                            <div class="col-md-12 big-title light wow bounceIn">
                                <h2>莱孚士教育科技有限公司简介</h2>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <!-- /Title row -->

                    </div>
                </div>
            </div>
        </section>
        <!-- /Section 5 -->

        <section id="section3"><!-- Title row -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12 sub-title wow slideInRight">
                        <h4 style="margin-bottom: 30px;">
                            重庆莱孚士教育科技有限公司2015年成立于中国与新加坡的第三个国家合作开发城市——重庆，由一批荣获新加坡政府奖学金的留学生创建，秉承“过来人，更懂你”的理念，基于对自身国内求学和国外留学生涯的体会与感悟，利用熟悉海外教育状况与海内外教育机构联系广泛的有利条件，以“Hi
                            There”游学项目和“Dear
                            Senior”辅导项目为核心，努力为国内青年学生搭建了一个体验不同文化、提升英文水平，结识外国朋友的平台，并为有意向出国留学的青年学生提供原汁原味英文教育体系下的学习和考试辅导。同时，为学员进入心仪的国外大学提出规划建议，并提供学习、生活以及就业帮助等“一站式”服务，从而更好地实现留学价值。</h4>
                        <h4>
                            公司现有核心团队17人，导师队伍20人，并有新加坡、澳大利亚、美国等多国大学生志愿者加盟，师资力量雄厚。公司坚持服务第一，信誉至上，共创未来的宗旨，愿竭诚为广大渴望拓展视野、提升自我的青年学子充当最好的引路人。</h4>
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
                                <h4><a href="{{ route('summer-camp') }}">“Hi There”游学项目</a></h4>

                                <p>
                                    此项目以为青年学生出国游学提供指导和帮助为目的，旨在克服传统游学项目内容单一、性价比低等弊端，让学生获得更加优质的服务和更加丰厚的收获。我们坚信一次能成为人生财富的游学绝不只是“到了哪里，看到什么”，而是能够深入了解新的文化，结交到新的朋友，并收获新的人生感悟。
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
                                <h4><a href="{{ route('SAT-tour') }}">SAT 考团</a></h4>

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
                                <h4><a href="{{ route('SAT-tutor') }}">“Dear Senior”辅导项目</a></h4>

                                <p>
                                    此项目以出国留学考前辅导为目的，专注于为准备参与SAT的学生提供原汁原味英文教育体系下的专业辅导。导师队伍全部来自世界排名前五十位的大学相关专业，并有大学教授组成的课程顾问团队，具有扎实的专业知识与丰富的教学经验，为在国内准备应考的中学生提供地道、系统的欧美理科教育。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service row 1 -->
            </div>
        </section>


        <!-- Section 5 -->
        <section id="team-member" class="clients" style="margin-bottom: 90px; padding-top: 80px">
            <div class="testimonial-wrap">
                <div class="texture-layer">
                    <div style="padding-top: 60px; padding-bottom: 30px;">
                        <!-- Title row -->
                        <div class="row">
                            <div class="col-md-12 big-title light wow bounceIn">
                                <h2>团队成员一览</h2>
                            </div>
                        </div>
                        <!-- /Title row -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section 5 -->
        <div class="team-wrap">
            <div class="container">

                <!-- Team members row 1-->
                <div class="row">
                    <!-- /Title row -->
                    @foreach($teamMembers as $teamMember)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item wow fadeInLeft">
                            <div class="team-member">
                                <div class="team-member-holder">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('img/team/'.$teamMember['name_en'].'.jpg') }}">

                                        <div class="team-member-links">
                                            <div class="team-member-links-list">
                                                <p>
                                                    {{ $teamMember['desc'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member-meta">
                                        <h4 class="team-member-name">{{ $teamMember['name'] }}</h4>

                                        <div class="team-member-role">
                                            {{ $teamMember['title'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                                <!-- End -->
                </div>
                <!-- /Team members row 1-->
            </div>
        </div>
        <!-- /Agency team -->

    </div>
    @include('components.page-frame.footer')
@endsection


@section('additional-JS')
    <script src="{{ asset('plugin/vertical-timeline/js/main.js') }}"></script>
@endsection
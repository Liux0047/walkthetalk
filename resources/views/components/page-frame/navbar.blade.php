<!-- Navigation -->
<div id="navigation">
    <nav class="navbar navbar-custom cl-effect-21" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mob-logo">
                    <div class="row">
                        <div class="site-logo">
                            <a href=" {{ Route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
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
                                <li class="active"><a href="#section1">{{ trans('navbar.home') }}</a></li>
                                <li class="dropdown nav-toggle">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{ trans('navbar.about-us') }}<b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="external" href="{{ Route('our-team') }}">
                                                {{ trans('navbar.our-team') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="external" href="{{ Route('partners') }}">
                                                {{ trans('navbar.partners') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-toggle">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{ trans('navbar.edutainment') }}<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="external" href="{{ Route('edutainment') }}">
                                                {{ trans('navbar.edutainment') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="external" href="{{ Route('SAT-tour') }}">
                                                {{ trans('navbar.SAT-tour') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="external" href="{{ Route('guides-roster') }}">
                                                {{ trans('navbar.guides-roster') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-toggle">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{ trans('navbar.tutoring') }}<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="external" href="{{ Route('SAT-tutor') }}">
                                                {{ trans('navbar.SAT-tutor') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="external" href="{{ Route('SM-tutor') }}">
                                                {{ trans('navbar.SM-tutor') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="external" href="{{ Route('tutors-roster') }}">
                                                {{ trans('navbar.tutors-roster') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ Route('contact-us') }}">{{ trans('navbar.contact-us') }}</a>
                                </li>
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

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.blade.php">
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu  d-none d-lg-block text-center">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{route('frontend.index')}}">home</a></li>
                                    <li><a href="{{route('frontend.about')}}">about</a></li>
                                    <li><a href="{{route('frontend.service')}}">services <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="{{route('frontend.sub_services', $category->id)}}">{{$category->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

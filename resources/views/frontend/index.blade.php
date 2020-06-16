@extends('frontend.layouts.app')
@section('title', 'Home Page')
@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/partner.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/client.css')}}">--}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .carousel-fade .carousel-item {
            height: 100%;
        }

        .carousel-fade .carousel-item img {
            height: 100vh;
            width: 100%;
            max-width: 100%;
            background-size: cover;
            background-origin: content-box;
            background-clip: content-box;
            background-position: center;
            color: rgba(0, 0, 0, 0.56);
            filter: brightness(30%);
            right: 0;
            left: 0;
            resize: both;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background: none;
            border: 2px solid #fff;
            height: 60px;
            width: 60px;
            line-height: 55px;
            opacity: 9 !important;
            filter: brightness(100%) !important;
            font-size: 40px;
            border-radius: 100%;
        }

        .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
            background: #fff;
            opacity: 9;
            color: #000;
        }

        .la {
            opacity: 99;
            z-index: 1;
            position: relative;
        }

        .carousel-indicators li {
            background: #000;
            color: #000;
            height: 30px;
            width: 30px;
            margin: 5px !important;
            border-radius: 100%;
        }

        .carousel-caption {
            top: 220px;
        }

        @media (min-width: 992px) {
            .carousel-caption {
                top: 220px !important;
            }
        }

        .carousel-caption h3 {
            font-size: 70px;
            text-align: center;
            font-weight: bold;
        }

        @media (min-width: 992px) {
            .carousel-caption h3 {
                font-size: 70px !important;
                text-align: center;
                font-weight: bold;
            }
        }

        .carousel-caption p {
            font-size: 30px;
            margin-top: 20px;
            text-align: center;
        }

        @media (min-width: 992px) {
            .carousel-caption p {
                font-size: 30px !important;
                margin-top: 20px;
                text-align: center;
            }
        }

        .carousel-caption .btn {
            border: 2px solid #fff;
            border-radius: 0;
        }

        @media (min-width: 300px) {
            .img-fluid.w-100.d-block {
                height: auto;
            }
        }

        @media (min-width: 576px) {
            .img-fluid.w-100.d-block {
                height: auto;
            }
        }

        @media (min-width: 768px) {
            .img-fluid.w-100.d-block {
                height: auto;
            }
        }

        @media (min-width: 992px) {
            .img-fluid.w-100.d-block {
                height: 100vh;
            }
        }

        @media (min-width: 300px) {
            .carousel-caption {
                top: 0;
                font-size: 20px;
            }
        }

        @media (min-width: 300px) {
            .carousel-caption h3 {
                font-size: 20px;
            }
        }

        .carousel-caption p {
            font-size: 15px;
        }

        @media (min-width: 768px) {
            .carousel-caption {
                top: 100px;
            }
        }

        @media (min-width: 768px) {
            .carousel-caption h3 {
                font-size: 40px;
            }
        }

    </style>
@endsection
@section('content')
    <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid w-100 d-block" src="{{asset('images/banner2.jpg')}}"
                                                   alt="Slide Image">
                <div class="carousel-caption">
                    <h3 class="animated slideInDown">Perfect And Responsive</h3>
                    <p class="animated slideInLeft">We offer the best professionals and resources to empower your
                        business
                    </p>
                    <button class="btn btn-outline-light btn-lg animated slideInUp" type="button">Read More</button>
                </div>
            </div>
            <div class="carousel-item"><img class="img-fluid w-100 d-block"
                                            src="{{asset('images/IT-Companies-in-Miami.jpg')}}"
                                            alt="Slide Image">
                <div class="carousel-caption">
                    <h3 class="animated fadeInDown">Perfect And Responsive</h3>
                    <p class="animated slideInUp">We offer the best professionals and resources to empower your business
                    </p>
                    <button class="btn btn-outline-light btn-lg animated slideInLeft" type="button">Read More</button>
                </div>
            </div>
            <div class="carousel-caption">
                <h3 class="animated slideInDown">Perfect And Responsive</h3>
                <p class="animated slideInLeft">We offer the best professionals and resources to empower your business
                </p>
                <button class="btn btn-outline-light btn-lg animated slideInUp" type="button">Read More</button>
            </div>
        </div>
        <div class="carousel-item"><img class="img-fluid w-100 d-block" src="{{asset('images/it-company.jpg')}}"
                                        alt="Slide Image">
            <div class="carousel-caption">
                <h3 class="animated slideInDown">Perfect And Responsive</h3>
                <p class="animated slideInLeft">We offer the best professionals and resources to empower your business
                </p>
                <button class="btn btn-outline-light btn-lg animated slideInUp" type="button">Read More</button>
            </div>
        </div>
        <div class="carousel-item"><img class="img-fluid w-100 d-block" src="{{asset('images/images(2).jpeg')}}"
                                        alt="Slide Image">
            <div class="carousel-caption">
                <h3 class="animated slideInDown">Perfect And Responsive</h3>
                <p class="animated slideInLeft">We offer the best professionals and resources to empower your business
                </p>
                <button class="btn btn-outline-light btn-lg animated slideInUp" type="button">Read More</button>
            </div>
        </div>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon"><i class="la la-cutlery"></i></span><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-1"
                role="button" data-slide="next"><span class="carousel-control-next-icon"><i
                        class="la la-cutlery"></i></span><span class="sr-only">Next</span></a></div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
        <li data-target="#carousel-1" data-slide-to="3"></li>
        <li data-target="#carousel-1" data-slide-to="4"></li>
    </ol>


    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Our Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-xl-4 col-md-4">
                        <img src="{{asset('images/category/'.$category->image)}}" alt="" width="100px">
                        <h3>{{$category->name}}</h3>
                        <p>{{$category->description}}</p>
                        <button class="btn btn-danger"><a href="{{route('frontend.sub_services', $category->id)}}">More
                                Info</a></button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('frontend.layouts.partner')

{{--    @include('frontend.layouts.client')--}}
    <div data-scroll-index="0" class="get_in_tauch_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Get in Touch</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Keep up to date with all the latest news and offers from OM Networks

                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="touch_form">
                        <form action="{{route('frontend.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                        <textarea name="message" id="" cols="30" placeholder="Message"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                        <button class="boxed-btn3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="frontend/partner.js"></script>
    <script id="bs-live-reload" data-sseport="4859" data-lastchange="1530918619334" src="/js/livereload.js"></script>

@endsection
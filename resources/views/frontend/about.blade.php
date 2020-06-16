@extends('frontend.layouts.app')
@section('title', 'About Page')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/partner.css')}}">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>

.img-round-about{
    border-radius:50%;
}
        .aboutus-area {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        /*-- aboutus Image --*/
        .aboutus-image {
            margin-right: 52px;
            width: 318px;
        }

        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .aboutus-image {
                margin-right: 35px;
                width: 345px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .aboutus-image {
                margin-bottom: 30px;
                float: none;
            }
        }

        @media only screen and (max-width: 767px) {
            .aboutus-image {
                margin-bottom: 30px;
                margin-right: 0;
                float: none;
                width: auto;
            }
        }

        .aboutus-image img {
            width: 100%;
        }

        /*-- aboutus Content --*/
        .aboutus-content h1 {
            font-size: 40px;
            font-weight: 800;
            line-height: 40px;
            margin-bottom: 2px;
        }

        @media only screen and (max-width: 479px) {
            .aboutus-content h1 {
                font-size: 30px;
                line-height: 30px;
            }
        }

        .aboutus-content h1 span {
            color: #71b100;
        }

        .aboutus-content h4 {
            font-size: 18px;
            font-weight: 500;
            color: #9b9b9b;
            margin-bottom: 23px;
        }

        .aboutus-content p {
            font-size: 16px;
            line-height: 27px;
        }

        /*-- counter --*/
        .counter {
            border: 1px solid #eeeeee;
            margin-top: 32px;
            float: left;
            width: 100%;
        }

        .counter .single-counter {
            float: left;
            width: 25%;
            padding: 28px 15px 28px;
        }

        @media only screen and (max-width: 767px) {
            .counter .single-counter {
                width: 50%;
            }

            .counter .single-counter:nth-child(3) {
                border-top: 1px solid #eeeeee;
                border-left: 0px solid #eeeeee;
            }

            .counter .single-counter:nth-child(4) {
                border-top: 1px solid #eeeeee;
            }
        }

        .counter .single-counter + .single-counter {
            border-left: 1px solid #eeeeee;
        }

        .counter .single-counter h2 {
            font-size: 30px;
            color: #71b100;
            line-height: 24px;
            font-family: "Open Sans", sans-serif;
            margin-bottom: 8px;
        }

        .counter .single-counter p {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 0;
            color: #8f8f8f;
        }
    </style>

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="aboutus-image float-left hidden-sm" style="padding-right:100px; margin-top:100px;">
                            <img class="img-round-about" src="{{asset('images/wiir-2WgQkMp0gLIFTBEs18ky6PcAR7W.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="aboutus-content ">
                            <h1><strong>About Us</strong></h1>
                            <p></p>
                            <div class="col-md-6 how-img">
                                <img src="" class="rounded-circle img-fluid" alt=""/>
                            </div>
                            <p>
                                OM Networks Pvt. Ltd. is based on the principle of taking work to the location by
                                offering the best talent professionals and resources to empower your business to
                                communicate, compete and succeed in a rapidly changing world. Company provides our
                                clients with innovative and cost effective IT solution. Company is intended for the
                                efficient deployment and integration of Information Technology providing strategic
                                guidance with regard to technology.

                                Our multidisciplinary team can offer expert independent advice on Networking, Hardware &
                                Software solutions, Servers, Security system etc. for your organization and has ability
                                to deliver complete, useful, reliable and cost effective IT services.When you hire OM,
                                you gain an experienced strategic partner committed to collaborate for achieving your
                                unique business and technology objectives, on-time and on-budget. It is the Power of We
                                that has helped us in delivering strategic value, business results and operational
                                efficiency to our clients. Coming together is a beginning. Keeping together is progress.
                                Working together is success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.partner')
    <div class="get_in_tauch_area">
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
                                        <input type="email" placeholder="Subject" name="subject">
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
@endsection



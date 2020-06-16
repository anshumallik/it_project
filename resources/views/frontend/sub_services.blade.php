@extends('frontend.layouts.app')
@section('title', 'Service Page')
@section('style')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .how-section1 {
            margin-top: -15%;
            padding: 10%;
        }

        .how-section1 h4 {
            color: #ffa500;
            font-weight: bold;
            font-size: 30px;
        }

        .how-section1 .subheading {
            color: #3931af;
            font-size: 20px;
        }

        .how-section1 .row {
            margin-top: 10%;
        }

        .how-img {
            text-align: center;
        }

        .how-img img {
            width: 40%;
        }
    </style>
@endsection
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">{{$category->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($category->products as $product)
                    <div class="col-xl-4 col-md-4">
                        <img src="{{asset('images/product/'.$product->image)}}" alt="" width="100px">
                        <h3>{{$product->name}}</h3>
                        <p style="height: auto">{{$product->description}}</p>
                        <a class="btn btn-danger" style="border-radius:25px;" href="#{{$product->name}}"
                           data-toggle="#{{$product->name}}">More Info</a>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="how-section1">
        @foreach($category->products as $product)
            <div class="row">
                <div class="col-md-6" id="{{$product->name}}">
                    <h4>{{$product->name}}</h4>
                    <h4 class="subheading"></h4>
                    <p class="text-muted">{{$product->description}}</p></div>
                <div class="col-md-6 how-img">
                    <img src="{{asset('images/product/'.$product->image)}}" class="rounded-circle img-fluid" alt=""/>
                </div>
            </div>
        @endforeach
    </div>



@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="frontend/partner.js"></script>
@endsection

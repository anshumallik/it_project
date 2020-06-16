<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<h2>Words from our clients</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item carousel-item active">
            <div class="img-box"><img src="{{asset('images/pexels-photo-774909.jpeg')}}" alt=""></div>
            <p class="testimonial">Having multiple internet connections and getting it managed in proper way is most challenging, PepLink 580 was the solution for me, its simplicity is one of the strongest features which made it so easy to manage, without lags or downtime, and I highly recommend this product for people looking for Internet Load Balancing.
            </p>
            <p class="overview"><b>Ram Thapa</b>Seo Analyst at <a href="#">Paaila Tech</a></p>
            <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
            </div>
        </div>
        <div class="item carousel-item">
            <div class="img-box"><img src="{{asset('images/pexels-photo-774909.jpeg')}}" alt=""></div>
            <p class="testimonial">Having multiple internet connections and getting it managed in proper way is most challenging, PepLink 580 was the solution for me, its simplicity is one of the strongest features which made it so easy to manage, without lags or downtime, and I highly recommend this product for people looking for Internet Load Balancing.
            </p>
            <p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
            <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
            </div>
        </div>
        <div class="item carousel-item">
            <div class="img-box"><img src="{{asset('images/pexels-photo-774909.jpeg')}}" alt=""></div>
            <p class="testimonial">Having multiple internet connections and getting it managed in proper way is most challenging, PepLink 580 was the solution for me, its simplicity is one of the strongest features which made it so easy to manage, without lags or downtime, and I highly recommend this product for people looking for Internet Load Balancing.
            </p>
            <p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
            <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        //carousel options
        $('#quote-carousel').carousel({
            pause: true, interval: 10000,
        });
    });
</script>
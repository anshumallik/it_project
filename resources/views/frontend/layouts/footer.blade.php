<style>
    /*footer*/
    .col_white_amrc { color:#FFF;}
    footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
    .pt2 { padding-top:40px ; margin-bottom:20px ;}
    footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
    .mb10 { padding-bottom:15px ;}
    .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
    .footer_ul_amrc li {padding:0px 0px 5px 0px;}
    .footer_ul_amrc li a{ color:#CCC;}
    .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
    .fleft { float:left;}
    .padding-right { padding-right:10px; }

    .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
    .footer_ul2_amrc li p { display:table; }
    .footer_ul2_amrc li a:hover { text-decoration:none;}
    .footer_ul2_amrc li i { margin-top:5px;}

    .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
    .foote_bottom_ul_amrc {
        list-style-type:none;
        padding:0px;
        display:table;
        margin-top: 10px;
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto;
    }
    .foote_bottom_ul_amrc li { display:inline;}
    .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

    .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
    .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
    .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
    .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
</style>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


<!--footer starts from here-->
<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">OmNetWorks Pvt Ltd.</h5>
                <!--headin5_amrc-->
                <p><i class="fa fa-map-marker"></i> Kathmandu </p>
                <p><i class="fa fa-phone"></i> 02185489 </p>
                <p><i class="fa fa fa-envelope"></i> paailatech@gmail.com </p>


            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Services</h5>

                <ul class="footer_ul_amrc">
                    @foreach($categories as $category)
                        <li><a href="{{route('frontend.sub_services', $category->id)}}">{{$category->name}}</a></li>
                    @endforeach

                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="{{route('frontend.index')}}">Home</a></li>
                    <li><a href="{{route('frontend.about')}}">About</a></li>
                    <li><a href="{{route('frontend.contact')}}">Contact</a></li>

                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->

                <ul class="footer_ul2_amrc">
                    <li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>
                        </li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                       </li>
                    <li><a href="#"><i class="fab fa-google fleft padding-right"></i> </a>
                       </li>
                </ul>

            </div>
        </div>
    </div>


    <div class="container">

        <p class="text-center">Copyright @2020 | Designed & developed by <a href="#">Paaila Tech</a></p>

        <ul class="social_footer_ul">
            <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

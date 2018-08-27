@extends('home.home_master')
<!--banner-->
@section('home_content')
<div class="slider">
    <ul class="rslides" id="slider2">
        <li>
            <a href="#"><img class="img-responsive" src="{{asset('public/assets/images/slide1.png')}}" alt="">
                <div class="banner">
                    <span class=" matter "> </span>
                </div>
            </a>
        </li>
        <li>
            <a href="#"><img class="img-responsive" src="{{asset('public/assets/images/slide2.jpg')}}" alt="">
                <div class="banner">
                    <span class=" matter"> </span>
                </div>
            </a>
        </li>
        <li>
            <a href="#"><img class="img-responsive" src="{{asset('public/assets/images/slide3.jpg')}}" alt="">
                <div class="banner">
                    <span class="matter "> </span>
                </div>
            </a>
        </li>

        </a>
        </li>
    </ul>
</div>

<!--content-->
<div class="content">
    <div class="content-app">
        <div class="container">

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!---->
<div class="content-app-up">
    <div class="container">
        <span class="line"> </span>

    </div>
</div>
<!---->
</div>
@endsection
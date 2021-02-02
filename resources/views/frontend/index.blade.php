@extends('layout.master')
@section('title','Loud Smash')

@section('content')
<!-- Start Banner Area -->
<div class="frontcat">
    <h2 class="masthead-heading text-uppercase mb-0"> select your Category</h2>
    @php
        $categories =App\Models\Category::select('id','c_name')->get()
    @endphp

        <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
        <select id="category"  class=" form-control"  >

            <option > All Categories</option>

            @foreach ($categories as $cat )
            <option value="{{$cat->id}}" > {{ $cat->c_name }}</option>
            @endforeach
        </select>
        <div class="show-songs" ></div>

</div>
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center" style="height: 735px;">
            <div class="col-lg-10">
                <div class="banner-content text-center">
                    <h1 class="text-uppercase text-white">Music is life</h1>
                    <p class="text-uppercase mx-auto">
                        Universal Truth
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!-- Start quote Area -->
<section class="quote-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 quote-left">
                <h2 class="text-right">
                    <span>Music</span> gives soul to the universe,<br>
                    wings to the <span>mind</span>, flight<br>
                    to the <span>imagination</span>.
                </h2>
            </div>
            <div class="col-lg-6 col-sm-12 quote-right">
                <p class="text-left">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End quote Area -->


<!-- Start service Area -->
<section class="service-area pt-100 pb-100" data-parallax="scroll" data-image-src="frontstyle/img/service-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-service d-flex justify-content-between align-items-top">
                    <div class="icon">
                        <img src="frontstyle/img/s1.png" alt="">
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">DJ Party on the house</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex justify-content-between align-items-top">
                    <div class="icon">
                        <img src="frontstyle/img/s2.png" alt="">
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Concert at its best</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization.
                        </p>
                    </div>
                </div>
                <div class="single-service d-flex justify-content-between align-items-top">
                    <div class="icon">
                        <img src="frontstyle/img/s3.png" alt="">
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">playing Music Videos</h4>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->

<!-- Start member Area -->
<section class="member-area relative pt-100 pb-100">
    <div class="overlay overlay-bg"></div>
    <div class="container relative">
        <div class="row justify-content-center">
            <div class="active-member-carousel">
                <div class="single-member item">
                        <div class="member-info d-flex flex-row justify-content-center">
                            <img class="" style="width:100px;height: 100%;" src="frontstyle/img/m1.jpg" alt="">
                            <div class="details">
                                <h4 class="text-white text-uppercase">Fredric Elsa</h4>
                                <p>Lead Vocalist</p>
                                <p>Date of Birth: 31st Dec, 1989</p>
                            </div>
                        </div>
                        <p class="summery">
                            Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                </div>
                <div class="single-member item">
                        <div class="member-info d-flex flex-row justify-content-center">
                            <img class="" style="width:100px;height: 100%;" src="frontstyle/img/m1.jpg" alt="">
                            <div class="details">
                                <h4 class="text-white text-uppercase">Fredric Elsa</h4>
                                <p>Lead Vocalist</p>
                                <p>Date of Birth: 31st Dec, 1989</p>
                            </div>
                        </div>
                        <p class="summery">
                            Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                </div>

            </div>
        </div>
        <div class="next-trigger"><span class="lnr lnr-arrow-right"></span></div>
        <div class="prev-trigger"><span class="lnr lnr-arrow-left"></span></div>
    </div>
</section>
<!-- End member Area -->

<!-- Start About Area -->
<section class="about-area" id="about">
    <div class="container-fluid">
        <div class="row  d-flex justify-content-start align-items-center">
            <div class="col-lg-6 col-md-12 no-padding">
                <img class="img-fluid" src="frontstyle/img/about-img.png" alt="">
            </div>
            <div class="about-details col-lg-4 col-md-12">
                <h2>
                    <span>Music</span> gives soul to the universe, <br>
                    wings to the <span>mind</span>, flight <br>
                    to the <span>imagination</span>.
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start contact Area -->

<!-- End contact Area -->
@stop


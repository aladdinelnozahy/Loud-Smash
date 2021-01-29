@extends('layout.master')
@section('title','Loud Smash')

@section('content')
<!-- Start Banner Area -->
<div class="frontcat">
    <h2 class="masthead-heading text-uppercase mb-0"> select your Category</h2>
    @php
        $categories =App\Models\Category::select('id','c_name')->get()
    @endphp

        <input type="hidden " name="_token" value="{{ csrf_token() }}" class="form-control">
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

<!-- Start feature Area -->
<section class="feature-area pb-100" id="feature">
    <div class="container">
        @foreach($artists as $artist)
        
        <div class="row">
            <div class="col-lg-4 col-md-4 no-padding single-img">
                    <img src="public/photos/artists/{{ $artist->a_photo }}" class="image img-fluid" alt="{{ $artist->a_name }}">
                    <div class="middle">
                    <h2 class="text-uppercase text-white">Concert Toronto</h2>
                    <p>{{ $artist->namde }}</p>
                    </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-4 no-padding single-img">
                    <img src="frontstyle/img/f2.jpg" class="image img-fluid">
                    <div class="middle">
                    <h2 class="text-uppercase text-white">Concert Toronto</h2>
                    <p>Need concert details</p>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 no-padding single-img">
                    <img src="frontstyle/img/f3.jpg" class="image img-fluid">
                    <div class="middle">
                    <h2 class="text-uppercase text-white">Concert Toronto</h2>
                    <p>Need concert details</p>
                    </div>
            </div>
            <div class="col-lg-6 col-sm-12 no-padding single-img">
                    <img src="frontstyle/img/f4.jpg" class="image img-fluid">
                    <div class="middle2">
                    <a href="https://www.youtube.com/watch?v=L3V7LKYPIUQ" class="play-btn">
                        <img class="vdo-icon" src="frontstyle/img/video-btn.png" alt="">
                    </a>
                    <h2 class="text-uppercase text-white">Being unique is the preference</h2>
                    <p>Youtube video will appear in popover</p>
                    </div>
            </div>
            <div class="col-lg-6 col-sm-12 no-padding single-img">
                    <img src="frontstyle/img/f5.jpg" class="image img-fluid">
                    <div class="middle2">
                    <a href="https://www.youtube.com/watch?v=L3V7LKYPIUQ" class="play-btn">
                        <img class="vdo-icon" src="img/video-btn.png" alt="">
                    </a>
                    <h2 class="text-uppercase text-white">Being unique is the preference</h2>
                    <p>Youtube video will appear in popover</p>
                    </div>
            </div> --}}

        </div>
    </div>
</section> -->
<!-- End feature Area -->

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
<section class="contact-area pt-100 pb-100" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 title-section">
                <h2 class="text-uppercase">
                    Send <br>
                    Us <br>
                    Message
                </h2>
                <p>
                    We won’t send any kind of spam
                </p>
            </div>
            <div class="col-lg-8">
                    <form id="myForm" action="mail.php" method="post" class="contact-form">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required="" type="text">

                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required="" type="email">

                                <input name="phone" placeholder="Enter phone number"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" class="common-input mt-20" required="" type="tel">
                            </div>
                            <div class="col-lg-6">
                                <textarea class="common-textarea mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>

                                <button class="primary-btn d-inline-flex align-items-center mt-20"><span class="mr-10">Send Message</span><span class="lnr lnr-arrow-right"></span></button> <br>
                                <div class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact Area -->
@stop


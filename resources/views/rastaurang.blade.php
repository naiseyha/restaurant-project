@extends('Fronend.app')
<title>@yield('title')</title>
@section('section-app')

<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Expensive but the best</h5>
                        <h1>Deliciousness jumping into the mouth</h1>
                        <p>Together creeping heaven upon third dominion be upon won't darkness rule land
                            behold it created good saw after she'd Our set living. Signs midst dominion
                            creepeth morning</p>
                        <div class="banner_btn">
                            <div class="banner_btn_iner">
                                <a href="#" class="btn_2">Reservation <img src="{{ asset('FroneEnd/img/icon/left_1.svg')}}" alt=""></a>
                            </div>
                            <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                <span><img src="img/icon/play.svg" alt=""></span> Watch our story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="exclusive_item_part blog_item_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section_tittle">
                    <p>Popular Dishes</p>
                    <h2>Our Exclusive Items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('FroneEnd/img/food_item/food_item_1.png')}}" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Indian Burger</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="{{ asset('FroneEnd/img/icon/left_2.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('FroneEnd/img/food_item/food_item_2.png')}}" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Cremy Noodles</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="{{ asset('FroneEnd/img/icon/left_2.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{ asset('FroneEnd/img/food_item/food_item_3.png')}}" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Honey Meat</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="{{ asset('FroneEnd/img/icon/left_2.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                <div class="single_blog_item">
                    <div class="single_blog_img">
                        <img src="{{asset('FroneEnd/img/food_item/food_item_1.png')}}" alt="">
                    </div>
                    <div class="single_blog_text">
                        <h3>Cremy Noodles</h3>
                        <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                        <a href="#" class="btn_3">Read More <img src="{{asset('FroneEnd/img/icon/left_2.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="row align-items-center">
    <div class="col-sm-4 col-lg-5 offset-lg-1">
        <div class="about_img">
            <img src="{{asset('FroneEnd/img/about.png')}}" alt="">
        </div>
    </div>
    <div class="col-sm-8 col-lg-4">
        <div class="about_text">
            <h5>Our History</h5>
            <h2>Where The Food’s As Good
                As The Root Beer.</h2>
            <h4>Satisfying people hunger for simple pleasures</h4>
            <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                abundantly bearing, him, gathering you
                blessed bearing he our position best ticket in month hole deep </p>
            <a href="#" class="btn_3">Read More <img src="{{asset('FroneEnd/img/icon/left_2.svg')}}" alt=""></a>
        </div>
    </div>
</div>

<section class="intro_video_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro_video_iner text-center">
                    <h2>Expect The Best</h2>
                    <div class="intro_video_icon">
                        <a id="play-video_1" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                            <span class="ti-control-play"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="food_menu gray_bg">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <p>Our Menu</p>
                    <h2>TODAY'S SPECAILITY</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                    <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab" aria-controls="Special" aria-selected="false">Special <img src="{{asset('FroneEnd/img/icon/play.svg')}}" alt="play"></a>
                    <a id="Breakfast-tab" data-toggle="tab" href="#Breakfast" role="tab" aria-controls="Breakfast" aria-selected="false">Breakfast <img src="{{asset('FroneEnd/img/icon/play.svg')}}" alt="play"></a>
                    <a id="Launch-tab" data-toggle="tab" href="#Launch" role="tab" aria-controls="Launch" aria-selected="false">Launch <img src="{{asset('FroneEnd/img/icon/play.svg')}}" alt="play"></a>
                    <a id="Dinner-tab" data-toggle="tab" href="#Dinner" role="tab" aria-controls="Dinner" aria-selected="false">Dinner <img src="{{asset('FroneEnd/img/icon/play.svg')}}" alt="play"> </a>
                    <a id="Sneaks-tab" data-toggle="tab" href="#Sneaks" role="tab" aria-controls="Sneaks" aria-selected="false">Sneaks <img src="{{asset('FroneEnd/img/icon/play.svg')}}" alt="play"></a>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active single-member" id="Special" role="tabpanel" aria-labelledby="Special-tab">
                        <div class="row">



                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_1.png')}}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                     </div>
                </div>
            </div>


        </div>
    </div>
</section>


@endsection

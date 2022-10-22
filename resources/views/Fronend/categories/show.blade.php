@extends('Fronend.app')
@section('title', 'Menu | Rastaurang')
@section('section-app')



<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Food Category</h2>
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
                    <p>Categories Menu</p>
                    <h2> Food Categories</h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active single-member" id="Special" role="tabpanel" aria-labelledby="Special-tab">
                        <div class="row">

                            @foreach ($category->menus as $menu)


                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{ asset('images/Menu/'.$menu->image)}}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        {{ $menu->name }}</h4>
                                        <p class="leading-normal text-gray-700">
                                            {{ $menu->description }}
                                        </p>

                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>${{ $menu->price }}</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>


                            @endforeach



                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade single-member" id="Breakfast" role="tabpanel" aria-labelledby="Breakfast-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_4.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Easter Delight</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_5.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Tiener Schnitze</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_6.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Chicken Roast</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_1.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_2.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Roasted Marrow</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_3.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Summer Cooking</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade single-member" id="Launch" role="tabpanel" aria-labelledby="Launch-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_1.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_2.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Roasted Marrow</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_3.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Summer Cooking</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_4.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Easter Delight</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_5.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Tiener Schnitze</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/img/food_menu/single_food_6.png') }}" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Chicken Roast</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade single-member" id="Dinner" role="tabpanel" aria-labelledby="Dinner-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Easter Delight</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Tiener Schnitze</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Chicken Roast</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Roasted Marrow</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Summer Cooking</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade single-member" id="Sneaks" role="tabpanel" aria-labelledby="Sneaks-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Pork Sandwich</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>

                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Roasted Marrow</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>

                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Summer Cooking</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Easter Delight</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>
                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Tiener Schnitze</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>
                                    </div>
                                </div>

                                <div class="single_food_item media">
                                    <img src="{{asset('FroneEnd/') }}img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <h3>Chicken Roast</h3>
                                        <p>They're wherein heaven seed hath nothing</p>
                                        <h5>$40.00</h5>
                                        <button type="button" class="btn btn-outline-success btn-sm">Orther Now</button>

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


@endsection

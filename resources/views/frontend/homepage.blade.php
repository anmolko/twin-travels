@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')

@endsection
@section('content')

    <div class="body_content_wrapper">

        <div class="banner-wrapper position-relative">
            <section class="thumbimg-countnumber-carousel owl-theme owl-carousel p-0">
                @foreach($data['sliders']  as $slider)
                    <div class="item" >
                        <div class="slider-slide-item" style="background-image: url({{ asset(imagePath($slider->image)) }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-11 mx-auto">
                                        <div class="inner-banner-style1 text-center">
                                            <h6 class="hero-sub-title animate-up-1">{{ $slider->subtitle ?? '' }}</h6>
                                            <h2 class="hero-title animate-up-2">{{ $slider->title ?? '' }}</h2>
                                            @if($slider->link)
                                                <p class="hero-text fz15 animate-up-3">
                                                    <a href="{{ $slider->link ?? '' }}" class="ud-btn btn-white slider-btn"> {{ $slider->link ?? 'View More' }} <i class="fal fa-arrow-right-long"></i></a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
{{--            <div class="carousel-control-block d-flex d-md-none">--}}
{{--                <div class="carousel-btn-block slider-navigation-btn"> <span class="carousel-btn left-btn"><i class="fa fa-angle-up"></i></span> <span class="carousel-btn right-btn"><i class="fa fa-angle-down"></i></span> </div>--}}
{{--                <div class="slider-number-count"></div>--}}
{{--            </div>--}}
        </div>

        <section class="pt-0 pb0 bgc-f7 pb50-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="advance-style4 at-home5 mt-100 mt50-lg mb10 mx-auto animate-up-2">
                            <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        Flight
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        Tour
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    @include($module.'includes.flight_tab')
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    @include($module.'includes.tour_tab')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Apartment -->
        <section id="explore-property" class="pb90 pb30-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="main-title wow fadeInUp" data-wow-delay="300ms">
                            <h2 class="title">Explore Apartment Types</h2>
                            <p class="paragraph">Get some Inspirations from 1800+ skills</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="explore-apartment-slider navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-home"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Houses</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-corporation"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Apartments</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-network"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Office</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-garden"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Villa</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-chat"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Townhome</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-window"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Bungalow</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-bird-house"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Loft</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-garden"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Villa</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-chat"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Townhome</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-window"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Bungalow</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="page-property-single-v1.html">
                                    <div class="iconbox-style1">
                                        <span class="icon flaticon-bird-house"></span>
                                        <div class="iconbox-content">
                                            <h6 class="title">Loft</h6>
                                            <p class="text mb-0">22 Properties</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Apartment -->
        <section class="bgc-f7">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title">Our Top Tour</h2>
                            <p class="paragraph">
                                We have wide variety of tours and travel packages for your selection
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn2" href="{{ route('frontend.activity.index') }}">See All Properties<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm row">
                            @foreach($data['all_packages'] as $package)
                                <div class="col-md-4 item">
                                    <div class="listing-style1">
                                        <div class="list-thumb">
                                            <img class="w-100 lazy" data-src="{{ asset(imagePath($package->image)) }}" alt="">
                                            @if($package->package_ribbon_id)
                                                <div class="list-tag fz12 {{$package->packageRibbon->key ?? ''}}"><span class="flaticon-electricity me-2"></span>{{$package->packageRibbon->title ?? ''}}</div>
                                            @endif
                                            <div class="list-price">
                                                <a href="{{ route('frontend.activity.category', $package->packageCategory->slug) }}">
                                                    {{ $package->packageCategory->title ?? '' }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <p class="list-text">
                                                <i class="fal fa-earth mr-1"></i>
                                                {{ $package->country->title }}
                                            </p>
                                            <h6 class="list-title">
                                                <a href="{{ route('frontend.activity.show',$package->slug) }}">
                                                    {{ $package->title ?? '' }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-banner4 d-flex align-items-center" data-stellar-background-ratio="0.1" style="background-position: 50% 4.84063px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="cta-style4 position-relative text-center">
                            <h6 class="sub-title fw400 text-white">Explore more with us</h6>
                            <h1 class="cta-title mb30 text-white">Start your amazing journey right here us ! Book your first trip here.</h1>
                            <div class="d-block d-sm-flex justify-content-center">
                                <a href="{{ route($module.'activity.index') }}" class="ud-btn btn-white">Our Activity <i class="fal fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if(count($data['services'])>0)
            <section class="pb30 pb30-md">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="300ms">
                        <div class="col-lg-6 mx-auto">
                            <div class="main-title2 text-center">
                                <p class="paragraph">Explore</p>
                                <h2 class="title">Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="300ms">
                        @foreach($data['services'] as $service)
                            <div class="col-lg-4">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img">
                                        <img class="w-100 lazy" data-src="{{ asset(imagePath($service->image))}}" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h5 class="title mb-1">{{ $service->title }}</h5>
                                        </div>
                                        <div class="bottom-area">
                                            <a class="ud-btn2 text">
                                                {{ $service->description ? elipsis($service->description,20):'' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <section class="pb30 pb30-md bgc-f7">
            <div class="container">
                <div class="row align-items-md-center wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title">Properties by Cities</h2>
                            <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn2" href="#">See All Properties<i class="fal fa-arrow-right-long dark-color"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    @foreach($data['countries'] as $country)
                        <div class="col-sm-6 col-lg-4">
                            <div class="home9-city-style position-relative mb30 mb20-md mb0-sm d-flex align-items-center">
                                <div class="city-img flex-shrink-0">
                                    <img class="lazy" data-src="{{ asset(imagePath($country->image))}}" alt="">
                                </div>
                                <div class="flex-shrink-1 ms-3">
                                    <h6 class="mb-1">{{ $country->title }}</h6>
                                    <p class="mb-0">{{ $country->packages_count }} Activities</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Popular Property -->
        <section class="bgc-dark">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="00ms">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title text-white">Discover Popular Properties</h2>
                            <p class="paragraph text-white">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dark-light-navtab text-start text-lg-end mt-0 mt-lg-4 mb-4">
                            <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For Rent</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Sale</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                        <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                        <div class="list-price">$84,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                        <div class="list-price">$12,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                        <div class="list-price">$19,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                        <div class="list-price">$17,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                        <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                        <div class="list-price">$84,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                        <div class="list-price">$12,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                        <div class="list-price">$19,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="listing-style1">
                                                    <div class="list-thumb">
                                                        <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                        <div class="list-price">$17,000 / <span>mo</span></div>
                                                    </div>
                                                    <div class="list-content pb-2">
                                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                        <p class="list-text">California City, CA, USA</p>
                                                        <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                                                        </div>
                                                        <hr class="mt-2 mb-2">
                                                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                            <span class="for-what">For Rent</span>
                                                            <div class="icons d-flex align-items-center">
                                                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                                                <a href="#"><span class="flaticon-like"></span></a>
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
                        <div class="d-grid d-md-block text-center mt30 mt0-md">
                            <a href="page-grid-default-v1.html" class="ud-btn btn-thm">See All Properties<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Testimonials -->
        <section class="pb100 pb50-md bgc-thm-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="main-title">
                            <h2 class="title">People Love Living with Realton</h2>
                            <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content">
                                        <h5 class="title">Great Work</h5>
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                                        <div class="testimonial-review">
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="wa" src="images/testimonials/testimonial-1.png" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Leslie Alexander</h6>
                                            <p class="mb-0">Nintendo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content">
                                        <h5 class="title">Great Work</h5>
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                                        <div class="testimonial-review">
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="wa" src="images/testimonials/testimonial-2.png" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Floyd Miles</h6>
                                            <p class="mb-0">Bank of America</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content">
                                        <h5 class="title">Great Work</h5>
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                                        <div class="testimonial-review">
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="wa" src="images/testimonials/testimonial-3.png" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Dianne Russell</h6>
                                            <p class="mb-0">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content">
                                        <h5 class="title">Great Work</h5>
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                                        <div class="testimonial-review">
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="wa" src="images/testimonials/testimonial-3.png" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Dianne Russell</h6>
                                            <p class="mb-0">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content">
                                        <h5 class="title">Great Work</h5>
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                                        <div class="testimonial-review">
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="wa" src="images/testimonials/testimonial-3.png" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Dianne Russell</h6>
                                            <p class="mb-0">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Apartment -->
        <section class="pb90 pb20-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
                        <div class="main-title text-start text-md-center">
                            <h2 class="title">From Our Blog</h2>
                            <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="300ms">
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-style1">
                            <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                            <div class="blog-content">
                                <div class="date">
                                    <span class="month">July</span>
                                    <span class="day">28</span>
                                </div>
                                <a class="tag" href="#">Living Room</a>
                                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-style1">
                            <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                            <div class="blog-content">
                                <div class="date">
                                    <span class="month">July</span>
                                    <span class="day">28</span>
                                </div>
                                <a class="tag" href="#">Living Room</a>
                                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="blog-style1">
                            <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                            <div class="blog-content">
                                <div class="date">
                                    <span class="month">July</span>
                                    <span class="day">28</span>
                                </div>
                                <a class="tag" href="#">Living Room</a>
                                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Partners -->
        <section class="our-partners pt0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp">
                        <div class="main-title text-center">
                            <h6>Trusted by the world’s best</h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/1.png" alt="1.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/2.png" alt="2.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/3.png" alt="3.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/4.png" alt="4.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/5.png" alt="5.png"></div>
                            </div>
                            <div class="item">
                                <div class="partner_item"><img class="wa m-auto" src="images/partners/6.png" alt="6.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our CTA -->
        <section class="our-cta pt0">
            <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pt60-md pb120 pb60-md bdrs12 position-relative mx20-lg">
                <div class="img-box-5">
                    <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
                </div>
                <div class="img-box-6">
                    <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-xl-6 wow fadeInLeft">
                            <div class="cta-style1">
                                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                                <a href="page-contact.html" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                                <a href="page-contact.html" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection

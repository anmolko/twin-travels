@extends('frontend.layouts.master')
@section('title') {{ $data['row']->title ?? $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'team-cta-bg.jpeg'])

    <section class="pt60 pb90 bgc-f7">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="100ms">
                <div class="col-lg-8">
                    <div class="single-property-content mb30-md">
                        <h2 class="sp-lg-title">{{ $data['row']->title }}</h2>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="single-property-content">
                        <div class="property-action text-lg-end">
                            <h3 class="price mb-0">$958,000</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
                @if(count($data['row']->packageGalleries)>0)
                    @include($view_path.'partials.gallery')
                @endif
            </div>

            {{--  for description  --}}
            <div class="row wrap wow fadeInUp" data-wow-delay="500ms">
                @include($view_path.'partials.description')
                <div class="col-lg-4">
                    <div class="column">
                        <div class="sidebar-widget mb30">
                            <h6 class="widget-title">Categories</h6>
                            <div class="category-list mt20">
                                <a href="#">Houses</a>
                                <a href="#">Apartments</a>
                                <a href="#">Office</a>
                                <a href="#">Villa</a>
                                <a href="#">Townhome</a>
                            </div>
                        </div>
                        <div class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
                            <h4 class="form-title mb5">Schedule a tour</h4>
                            <p class="text">Choose your preferred day</p>
                            <div class="ps-navtab">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active mr15 mb5-lg" id="pills-inperson-tab" data-bs-toggle="pill" data-bs-target="#pills-inperson" type="button" role="tab" aria-controls="pills-inperson" aria-selected="true">In Person</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-videochat-tab" data-bs-toggle="pill" data-bs-target="#pills-videochat" type="button" role="tab" aria-controls="pills-videochat" aria-selected="false">Video Chat</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-inperson" role="tabpanel" aria-labelledby="pills-inperson-tab">
                                        <form class="form-style1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Time" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb10">
                                                        <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
                                                    </div>
                                                </div>
                                                <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                                    <label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-grid">
                                                        <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-videochat" role="tabpanel" aria-labelledby="pills-videochat-tab">
                                        <form class="form-style1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Time" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb20">
                                                        <input type="text" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb20">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb10">
                                                        <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-grid">
                                                        <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agen-personal-info position-relative bgc-white default-box-shadow1 bdrs12 p30 mt30">
                            <div class="widget-wrapper mb-0">
                                <h6 class="title fz17 mb30">Get More Information</h6>
                                <div class="agent-single d-sm-flex align-items-center pb25">
                                    <div class="single-img mb30-sm">
                                        <img class="w90" src="images/team/agent-3.png" alt="">
                                    </div>
                                    <div class="single-contant ml20 ml0-xs">
                                        <h6 class="title mb-1">Arlene McCoy</h6>
                                        <div class="agent-meta mb10 d-md-flex align-items-center">
                                            <a class="text fz15" href="#"><i class="flaticon-call pe-1"></i>(920) 012-3421</a>
                                        </div>
                                        <a href="#" class="text-decoration-underline fw600">View Listings</a>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="ud-btn btn-white2">Contact Agent<i class="fal fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-9">
                    <div class="main-title2">
                        <h2 class="title">Nearby Similar Homes</h2>
                        <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="900ms">
                <div class="col-lg-12">
                    <div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel">
                        <div class="item">
                            <div class="listing-style1">
                                <div class="list-thumb">
                                    <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                    <div class="list-price">$14,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <div class="list-price">$63,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <div class="list-price">$63,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <img class="w-100" src="images/listings/g1-5.jpg" alt="">
                                    <div class="list-price">$14,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <img class="w-100" src="images/listings/g1-6.jpg" alt="">
                                    <div class="list-price">$82,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">House on the beverly hills</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                    <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                    <div class="list-price">$14,000 / <span>mo</span></div>
                                </div>
                                <div class="list-content">
                                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                    <p class="list-text">California City, CA, USA</p>
                                    <div class="list-meta d-flex align-items-center">
                                        <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                                        <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                                        <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
    </section>

@endsection

@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
    <script src="{{asset('assets/frontend/js/navbar-sticky.js')}}"></script>
@endsection

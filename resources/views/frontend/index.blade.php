@extends('frontend.layouts.app')
@section('content')
    <!-- Start Banner Area
    ============================================= -->
    @include('frontend.components.slider')
    <!-- End Main -->
    <!-- Start Services
    ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">What we do</h5>
                            <h2 class="title">Currently we are<br> selling Dates, Mangoes, and Rice</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                {!! $aboutUs->our_mission !!}
                            </p>
                            <a class="btn btn-theme btn-md radius animation" href="{{ route('about-us') }}">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/thumb/1.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Fresh Vegetables</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>

                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/thumb/2.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Agricultural Products</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/thumb/3.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Organic Products</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/thumb/4.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Dairy Production</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/thumb/6.png') }}" alt="Image Not Found">
                                    </div>
                                    <h5><a href="services-details.html">Sweet Exotic Fruits</a></h5>
                                    <p>
                                        Continue indulged speaking technical out horrible domestic position. Seeing rather you.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Product
    ============================================= -->
    <div class="product-list-area default-padding-bottom bottom-less bg-dark text-center text-light">
        <div class="shape-bottom-right">
            <img src="{{ asset('frontend/assets/img/shape/21.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 mb-50 mb-xs-30">
                    <h2 class="mask-text" style="background-image: url(frontend/assets/img/banner/3.jpg);">Living a Healthy Lifestyle with Fresh Products</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Area -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area bg-gray default-padding" style="background-image: url(frontend/assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">
                @include('frontend.contact-us-form')
            </div>
        </div>
    </div>
    <!-- End Contact -->

@endsection

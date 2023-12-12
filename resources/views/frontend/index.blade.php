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
                            <h2 class="title">Currently we are<br> selling Dates</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. ladies she basket season age her uneasy saw. Discourse unwilling am no described.
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
                    <h2 class="mask-text" style="background-image: url(frontend/assets/img/banner/3.jpg);">Healthy life with fresh products</h2>
                </div>
                <div class="product-list-box">
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/1.png" alt="Icon">
                            <h5>Blueberry</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/2.png" alt="Icon">
                            <h5>Strawberry</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/3.png" alt="Icon">
                            <h5>Cabbage</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/4.png" alt="Icon">
                            <h5>Eggplant</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/5.png" alt="Icon">
                            <h5>Orange</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="product-list-item">
                        <a href="services-details.html">
                            <img src="frontend/assets/img/icon/6.png" alt="Icon">
                            <h5>Apples</h5>
                        </a>
                    </div>
                    <!-- End Single Item -->
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

                <div class="col-tact-stye-one col-lg-7">
                    <div class="contact-form-style-one mb-md-50">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Massage</h2>
                        <form action="#" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contact
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="">+4733378901</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        55 Main Street, The Grand Avenue 2nd Block, <br> New York City
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:info@agrul.com.com">info@agrul.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

@endsection

@extends('frontend.layouts.app')
@section('content')
    @include('frontend.components.banner',['pageName' => 'About Us'])

    <!-- Start About============================================= -->
        <div class="about-style-one-area default-padding">

            <!-- Shape -->
            <div class="shape-right-top">
                <img src="{{ asset('frontend/assets/img/shape/leaf.png') }}" alt="Image not found">
            </div>
            <!-- End Shape -->

            <div class="container">
                <div class="row align-center">
                    <div class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15">
                        <div class="thumb">
                            <img src="{{ asset('frontend/assets/img/about/5.jpg') }}" alt="Image Not Found">
                            <div class="sub-item">
                                <img src="{{ asset('frontend/assets/img/about/1.jpg') }}" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 about-style-one">
                        <div class="row align-center">
                            <div class="col-xl-7 col-lg-12">
                                <h2 class="heading">Agriculture For <br> Future Development</h2>
                                <p>
                                    There are many variations of passages of ipsum available but the majority have suffered alteration in some form by injected humor or random word which don’t look even. Comparison new ham melancholy son themselves.
                                </p>
                                <ul class="check-solid-list mt-20">
                                    <li>Organic food contains more vitamins</li>
                                    <li>Eat organic because supply meets demand</li>
                                    <li>Organic food is never irradiated</li>
                                </ul>
                            </div>
                            <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                                <div class="top-product-item">
                                    <img src="{{ asset('frontend/assets/img/icon/palm-tree.png') }}" alt="Icon">
                                    <h5><a href="services-details.html">Dates Production</a></h5>
                                    <p>
                                        Cultivating date palms in arid regions, producing nutritious fruits through manual pollination and careful harvesting.
                                    </p>
                                </div>
                                <div class="top-product-item">
                                    <img src="{{ asset('frontend/assets/img/icon/mango.png') }}" alt="Icon">
                                    <h5><a href="services-details.html">Mangoes Production</a></h5>
                                    <p>
                                        Growing mango trees in tropical climates, yielding sweet, juicy fruits after meticulous cultivation and pruning.                                    </p>
                                </div>
                                <div class="top-product-item">
                                    <img src="{{ asset('frontend/assets/img/icon/rice.png') }}" alt="Icon">
                                    <h5><a href="services-details.html">Rice Production</a></h5>
                                    <p>
                                        Farming rice in water-rich paddies, involving sowing, flooding, and harvesting for staple grain production.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End About -->

    <!-- Start Farmer============================================= -->
        <div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(assets/img/shape/36.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h5 class="sub-title">Our Team</h5>
                            <h2 class="title">Meet Our Team Experts</h2>
                            <div class="devider"></div>
                            <p>
                                Everything melancholy uncommonly but solicitude inhabiting <br> projection off. Connection stimulated estimating.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row">

                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/farmers/1.jpg') }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of tomatoes</span>
                                        <h4><a href="team-details.html">Aleesha Brown</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/farmers/2.jpg') }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of cherry</span>
                                        <h4><a href="team-details.html">Kevin Martin</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 farmer-stye-one">
                                <div class="farmer-style-one-item">
                                    <div class="thumb">
                                        <img src="{{ asset('frontend/assets/img/farmers/3.jpg') }}" alt="Image Not Found">
                                        <div class="social">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="linkedin">
                                                    <a href="#">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <span>Farmer of potato</span>
                                        <h4><a href="team-details.html">Sarah Albert</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Farmer -->

@endsection

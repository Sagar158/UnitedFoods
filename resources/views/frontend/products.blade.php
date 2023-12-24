@extends('frontend.layouts.app')
@section('content')
    @include('frontend.components.banner',['pageName' => 'Products'])

        <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-content">
                    <div class="magnific-mix-gallery masonary">
                        <div id="portfolio-grid" class="gallery-items colums-2">
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/2.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Fruit</span>
                                        <h4><a href="project-details.html">Healthy Food</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/3.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Vegetables</span>
                                        <h4><a href="project-details.html">Organic Vegetables</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/5.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Cereals</span>
                                        <h4><a href="project-details.html">Juicy Mandrains</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/7.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Organic</span>
                                        <h4><a href="project-details.html">Cow Milk</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/10.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Havest</span>
                                        <h4><a href="project-details.html">Crispy Cucumber</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="pf-item">
                                <div class="gallery-style-two">
                                    <img src="{{ asset('frontend/assets/img/gallery/2.jpg') }}" alt="Thumb">
                                    <div class="overlay">
                                        <span>Fruit</span>
                                        <h4><a href="project-details.html">Healthy Food</a></h4>
                                    </div>
                                    <a class="link" href="project-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection

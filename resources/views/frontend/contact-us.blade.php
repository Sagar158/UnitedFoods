@extends('frontend.layouts.app')
@section('content')
    @include('frontend.components.banner',['pageName' => 'Contact Us'])

    <!-- Start Contact Us  ============================================= -->
        <div class="contact-area default-padding" style="background-image: url({{ asset('frontend/assets/img/shape/28.png') }});">
            <div class="container">
                <div class="row align-center">

                    <div class="col-tact-stye-one col-lg-7 mb-md-50">
                        <div class="contact-form-style-one">
                            <h5 class="sub-title">Have Questions?</h5>
                            <h2 class="heading">Send us a Massage</h2>
                            <form action="{{ asset('frontend/assets/mail/contact.php') }}" method="POST" class="contact-form contact-form">
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

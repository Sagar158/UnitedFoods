@extends('frontend.layouts.app')
@section('content')
    @include('frontend.components.banner',['pageName' => 'Contact Us'])

    <!-- Start Contact Us  ============================================= -->
        <div class="contact-area default-padding" style="background-image: url({{ asset('frontend/assets/img/shape/28.png') }});">
            <div class="container">
                <div class="row align-center">
                    @include('frontend.contact-us-form')
                </div>
            </div>
        </div>
    <!-- End Contact -->
@endsection

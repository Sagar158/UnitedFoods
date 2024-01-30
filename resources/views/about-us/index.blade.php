@php
    $route = (!isset($aboutUs->id) ? route('home.aboutus.store') : route('home.aboutus.update',$aboutUs->id));
@endphp
<x-app-layout title="{{ $title }}">
    @push('css')
    	<link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('What We Do') }}"></x-page-heading>
        <x-alert></x-alert>
            <div class="container-fluid card mt-3">
                <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                    {{ @csrf_field() }}
                    <div class="row card-body">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <x-text-area id="our_mission" name="our_mission" :value="old('our_mission', $aboutUs->our_mission)" required autofocus autocomplete="our_mission" placeholder="Our Mission" />
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                            <x-text-area id="our_vission" name="our_vission" :value="old('our_vission', $aboutUs->our_vission)" required autofocus autocomplete="our_vission" placeholder="Our Vision" />
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                            <x-text-area id="privacy_policy" name="privacy_policy" :value="old('privacy_policy', $aboutUs->privacy_policy)" required autofocus autocomplete="privacy_policy" placeholder="Privacy Policy" />
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                            <x-text-area id="terms" name="terms" :value="old('terms', $aboutUs->terms)" required autofocus autocomplete="terms" placeholder="Terms" />
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                            <x-primary-button class="btn btn-primary">
                                {{ __('Submit') }}
                            </x-primary-button>
                            <x-back-button></x-back-button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    @endpush
</x-app-layout>

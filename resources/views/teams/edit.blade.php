@php
    $route = (!isset($team->id) ? route('home.aboutus.team.store') : route('home.aboutus.team.update',$team->id));
@endphp
<x-app-layout title="{{ $title }}">
    @push('css')
    	<link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Create / Update Team') }}"></x-page-heading>
        <x-back-button></x-back-button>

        <div class="container-fluid card mt-3">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                {{ @csrf_field() }}
                <div class="row card-body">
                    <div class="col-lg-1 col-sm-12 col-md-1">
                        <x-select-box id="prefix" name="prefix" :value="old('prefix', $team->prefix)" :values="\App\Models\Teams::$prefix" autocomplete="prefix" placeholder="Prefix" />
                    </div>
                    <div class="col-lg-11 col-sm-12 col-md-11">
                        <x-text-input id="name" type="text" name="name" :value="old('name', $team->name)" required autofocus autocomplete="name" placeholder="Name" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="designation" type="text" name="designation" :value="old('designation', $team->designation)" required autofocus autocomplete="designation" placeholder="Designation" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="mobile" type="text" name="mobile" :value="old('mobile', $team->mobile)" required autofocus autocomplete="mobile" placeholder="Mobile" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                        <x-text-area id="description" name="description" :value="old('description', $team->description)" required autofocus autocomplete="description" placeholder="Description" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <input type="file" id="myDropify" name="image" class="border"/>
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
    <script>
        $(document).ready(function(){
            @if(isset($team->image))
                $('.dropify-render').html('<img src="{{ asset($team->image) }}">')
                $('.dropify-preview').css('display','block');
            @endif
        });
    </script>


    @endpush
</x-app-layout>

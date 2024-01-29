@php
    $route = (!isset($certification->id) ? route('home.certifications.store') : route('home.certifications.update',$certification->id));
@endphp
<x-app-layout title="{{ $title }}">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Create / Update Certification') }}"></x-page-heading>
        <x-back-button></x-back-button>

        <div class="container-fluid card mt-3">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                {{ @csrf_field() }}
                <div class="row card-body">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="title" type="text" name="title" :value="old('title', $certification->title)" required autofocus placeholder="Title" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <label for="" class="font-weight-bold">Certificate</label>
                        <input type="file" name="pdf" class="border form-control" />
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
</x-app-layout>

@php
    $route = (!isset($event->id) ? route('events.store') : route('events.update',$event->id));
@endphp
<x-app-layout title="{{ $title }}">
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">

    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Create / Update Event') }}"></x-page-heading>
        <x-back-button></x-back-button>

        <div class="container-fluid card mt-3">
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                {{ @csrf_field() }}
                <div class="row card-body">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-input id="name" type="text" name="name" :value="old('name', $event->name)" required autofocus placeholder="Name" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-date-picker id="from" name="from" :value="old('from', $event->from)" required autofocus placeholder="From Date" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-date-picker id="to" name="to" :value="old('to', $event->to)" required autofocus placeholder="To Date" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <x-text-area id="description" name="description" :value="old('description', $event->description)" required autofocus placeholder="Description" />
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <label for="" class="font-weight-bold">Thumbnail</label>
                        <input type="file" name="images[]" class="border form-control" multiple/>
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
        <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    @endpush
</x-app-layout>

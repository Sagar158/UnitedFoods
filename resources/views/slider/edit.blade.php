<x-app-layout>
    @push('css')
    	<link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Create / Update Slider') }}"></x-page-heading>
        <x-back-button></x-back-button>
        <div class="container-fluid card mt-3">
            <div class="row card-body">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <x-text-input id="title" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" placeholder="Title" />
                    <x-text-input id="subtitle" type="text" name="subtitle" :value="old('subtitle')" required autofocus autocomplete="subtitle" placeholder="Sub Title" />
                    <x-text-area id="description" name="description" :value="old('description')" required autofocus autocomplete="description" placeholder="Description" />
                    <input type="file" id="myDropify" name="image" class="border"/>

                    <x-primary-button class="btn btn-primary">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
	<script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('assets/js/tinymce.js') }}"></script>
	<script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js') }}"></script>
    @endpush
</x-app-layout>
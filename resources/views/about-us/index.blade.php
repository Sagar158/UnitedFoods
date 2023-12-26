<x-app-layout>
    @push('css')
    	<link rel="stylesheet" href="{{ asset('assets/vendors/simplemde/simplemde.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('What We Do') }}"></x-page-heading>
        <x-alert></x-alert>
        <div class="container-fluid card mt-3">
            <div class="row card-body">
                <div class="col-lg-12 col-sm-12 col-md-12">

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    @endpush
</x-app-layout>

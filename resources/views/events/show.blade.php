<x-app-layout title="{{ $title }}">
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate.css/animate.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Event Details') }}"></x-page-heading>
        <x-back-button></x-back-button>
            <div class="container-fluid card mt-3">
            <div class="row card-body ">
                <div class="col-lg-12 col-md-12 col-sm-12 p-4">
                    <h3 class="font-weight-bold">
                        {{ $event->name }}
                        <a href="{{ route('events.edit', $event->id) }}"><i data-feather="edit"></i></a>
                        <a href="{{ route('events.destroy', $event->id) }}"><i data-feather="trash-2" class="text-danger"></i></a>
                    </h3>
                    <h6 href="javascript: void(0);" class="mt-1"><span class="font-weight-bold">Event Started: </span><span class="text-muted">{{ date('F j, Y', strtotime($event->from)) }}</span></h6>
                    <h6 href="javascript: void(0);" class="mt-1"><span class="font-weight-bold">Event Ended: </span><span class="text-muted">{{ date('F j, Y', strtotime($event->to)) }}</span></h6>

                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 mt-1 p-4">
                    {!! $event->description !!}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('assets/js/carousel.js') }}"></script>
    @endpush

</x-app-layout>

<x-app-layout title="{{ $title }}">
    @push('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/fullcalendar/main.min.css') }}">
    @endpush
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <x-page-heading title="{{ __('Events') }}"></x-page-heading>
        <x-right-side-button link="{{ route('events.create') }}" title="Create"></x-right-side-button>
        <x-alert></x-alert>
        <div class="container-fluid card mt-3">
            <div class="row card-body">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div id='fullcalendar'></div>
                </div>
            </div>
        </div>
    </div>
    @push("scripts")
        <script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>

        <script src="{{ asset('assets/vendors/fullcalendar/main.min.js') }}"></script>

        <script>
        $(function() {
            var baseUrl = "{{ url('events/show') }}/";

            function onEventClick(eventId)
            {
                var url = baseUrl + eventId;
                window.location.href = url;
            }
            var events = <?php echo json_encode($transformedEvents); ?>;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('fullcalendar');

            var calendarEvents = {
                id: 1,
                backgroundColor: 'rgba(1,104,250, .15)',
                borderColor: '#0168fa',
                events: events
            };
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                left: "prev,today,next",
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar
                fixedWeekCount: true,
                initialView: 'dayGridMonth',
                timeZone: 'UTC',
                hiddenDays:[],
                navLinks: 'true',
                events: [],
                eventSources: [calendarEvents],
                drop: function(info) {
                },
                eventClick: function(info) {
                    onEventClick(info.event.id);
                },
                dateClick: function(info) {

                },
            });

            calendar.render();


            });
        </script>
    @endpush
</x-app-layout>

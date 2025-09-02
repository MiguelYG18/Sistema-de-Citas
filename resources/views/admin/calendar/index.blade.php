<x-admin-layout 
title="Calendario | Gerardo"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Calendario'
    ],
]">
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        <div x-data="data()">
            <div x-ref='calendar'></div>
        </div>
    </x-wire-card>
    @push('js')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>
        <script>
            function data(){
                return {
                    init(){
                        let calendarEl = this.$refs.calendar;
                        let calendar = new FullCalendar.Calendar(calendarEl, {
                            headerToolbar:{
                                left: 'prev,next today',
                                center: 'title',
                                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                            },
                            locale:'es',
                            buttonText:{
                                today: 'Hoy',
                                month: 'Mes',
                                week: 'Semana',
                                day: 'Día',
                                list: 'Lista'
                            },
                            allDayText: 'Todo el día',

                            initialView: 'timeGridWeek',
                            noEventsText: 'No hay eventos para mostrar',
                            slotDuration: '00:15:00',
                            /*slotMinTime: '08:00:00',*/
                            /*slotMaxTime: '18:00:00',*/
                            slotMinTime: "{{config('schedule.start_time')}}",                            
                            slotMaxTime: "{{config('schedule.end_time')}}",
                            events: {
                                url: "{{ route('api.appointments.index')}}",
                                failure: function(){
                                    alert('Hubo un error al cargar los eventos');
                                }
                            },
                            scrollTime: "{{date('H:i:s')}}",
                        });
                        calendar.render();
                    }
                }
            }
        </script>
    @endpush
</x-admin-layout>
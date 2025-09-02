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
    @push('css')
        <style>
            .fc-event{
                cursor: pointer;
            }
        </style>
    @endpush
    <x-wire-card class="bg-white border-4 border-blue-300 rounded-xl">
        <div x-data="data()">
            <x-wire-modal-card 
                title="Cita Médica" 
                name="appointmentModal"   
                width="sm"
                align="center"         
            >
                <div class="space-y-4 mb-4">
                    <div>
                        <strong>Fecha y Hora: </strong>
                        <span x-text="selectedEvent.dateTime"></span>
                    </div>
                    <div>
                        <strong>Paciente:</strong>
                        <span x-text="selectedEvent.patient"></span>
                    </div>
                    <div>
                        <strong>Médico: </strong>
                        <span x-text="selectedEvent.doctor"></span>
                    </div>
                    <div>
                        <strong>Estado: </strong>
                        <span x-text="selectedEvent.status"></span>
                    </div>
                </div>
                <a x-bind:href="selectedEvent.url" class="w-full">
                    <x-wire-button sky class="w-full">
                        Gestionar Cita
                    </x-wire-button>
                </a>
            </x-wire-modal-card>
            <div x-ref='calendar'></div>
        </div>
    </x-wire-card>
    @push('js')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>
        <script>
            function data(){
                return {
                    selectedEvent:{
                        dateTime: null,
                        patient:null,
                        doctor: null,
                        status: null,
                        color: null,
                        url: null,
                    },
                    openModal(info){
                        this.selectedEvent = {
                            dateTime: info.event.extendedProps.dateTime,
                            patient: info.event.extendedProps.patient,
                            doctor: info.event.extendedProps.doctor,
                            status: info.event.extendedProps.status,
                            color: info.event.extendedProps.color,
                            url: info.event.extendedProps.url,
                        };
                        $openModal('appointmentModal');
                    },
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
                            eventClick: (info) => this.openModal(info),
                            scrollTime: "{{date('H:i:s')}}",
                        });
                        calendar.render();
                    }
                }
            }
        </script>
    @endpush
</x-admin-layout>
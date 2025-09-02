<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Calendario | Gerardo','breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Calendario'
    ],
])]); ?>
    <?php $__env->startPush('css'); ?>
        <style>
            .fc-event{
                cursor: pointer;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <?php if (isset($component)) { $__componentOriginal983a7eb9047f01311cddd82e78ab7d46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal983a7eb9047f01311cddd82e78ab7d46 = $attributes; } ?>
<?php $component = WireUi\Components\Card\Index::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Card\Index::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-white border-4 border-blue-300 rounded-xl']); ?>
        <div x-data="data()">
            <?php if (isset($component)) { $__componentOriginal6a7d148983ed3ace55a3e668006b80a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a7d148983ed3ace55a3e668006b80a5 = $attributes; } ?>
<?php $component = WireUi\Components\Modal\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-modal-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Modal\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Cita Médica','name' => 'appointmentModal','width' => 'sm','align' => 'center']); ?>
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
                    <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sky' => true,'class' => 'w-full']); ?>
                        Gestionar Cita
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1)): ?>
<?php $attributes = $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1; ?>
<?php unset($__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1)): ?>
<?php $component = $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1; ?>
<?php unset($__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1); ?>
<?php endif; ?>
                </a>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a7d148983ed3ace55a3e668006b80a5)): ?>
<?php $attributes = $__attributesOriginal6a7d148983ed3ace55a3e668006b80a5; ?>
<?php unset($__attributesOriginal6a7d148983ed3ace55a3e668006b80a5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a7d148983ed3ace55a3e668006b80a5)): ?>
<?php $component = $__componentOriginal6a7d148983ed3ace55a3e668006b80a5; ?>
<?php unset($__componentOriginal6a7d148983ed3ace55a3e668006b80a5); ?>
<?php endif; ?>
            <div x-ref='calendar'></div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal983a7eb9047f01311cddd82e78ab7d46)): ?>
<?php $attributes = $__attributesOriginal983a7eb9047f01311cddd82e78ab7d46; ?>
<?php unset($__attributesOriginal983a7eb9047f01311cddd82e78ab7d46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal983a7eb9047f01311cddd82e78ab7d46)): ?>
<?php $component = $__componentOriginal983a7eb9047f01311cddd82e78ab7d46; ?>
<?php unset($__componentOriginal983a7eb9047f01311cddd82e78ab7d46); ?>
<?php endif; ?>
    <?php $__env->startPush('js'); ?>
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
                            slotMinTime: "<?php echo e(config('schedule.start_time')); ?>",                            
                            slotMaxTime: "<?php echo e(config('schedule.end_time')); ?>",
                            events: {
                                url: "<?php echo e(route('api.appointments.index')); ?>",
                                failure: function(){
                                    alert('Hubo un error al cargar los eventos');
                                }
                            },
                            eventClick: (info) => this.openModal(info),
                            scrollTime: "<?php echo e(date('H:i:s')); ?>",
                        });
                        calendar.render();
                    }
                }
            }
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\resources\views/admin/calendar/index.blade.php ENDPATH**/ ?>
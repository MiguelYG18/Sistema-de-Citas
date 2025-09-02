<div x-data="data()">
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
        <div class="mb-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">
                Gestor de Horarios
            </h1>
            <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-sky-900','positive' => true,'wire:click' => 'save']); ?>
                Guardar Horario
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
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-sky-900">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Día/Hora
                        </th>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                                <?php echo e($day); ?>

                            </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tr>
                </thead>
                <tbody class="divide-y divide-sky-900">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->hourBlocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hourBlock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $hour = $hourBlock->format('H:i:s');
                        ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <label>
                                    <input type="checkbox" 
                                    x-on:click="toggleFullHourBlock('<?php echo e($hour); ?>',$el.checked)"
                                    :checked="isFullHourChecked('<?php echo e($hour); ?>')"
                                    class="h-4 w-4 text-sky-400 border-sky-900 rounded focus:text-emerald-500">
                                    <span class="font-bold ml-2">
                                        <?php echo e($hour); ?>

                                    </span>
                                </label>
                            </td>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexDay => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex flex-col space-y-2">
                                        <label>
                                            <input type="checkbox" 
                                            x-on:click="toggleHourBlock('<?php echo e($indexDay); ?>','<?php echo e($hour); ?>', $el.checked)"
                                            :checked="isHourBlockChecked('<?php echo e($indexDay); ?>','<?php echo e($hour); ?>')"
                                            class="h-4 w-4 text-sky-400 border-sky-900 rounded focus:text-emerald-500">
                                            <span class="ml-2 text-sm font-medium text-gray-700">Todos</span>
                                        </label>
                                        <!--[if BLOCK]><![endif]--><?php for($i = 0; $i < $intervals; $i++): ?>
                                            <?php
                                                $startTime = $hourBlock->copy()->addMinutes($i * $appointment_duration);
                                                $endTime = $startTime->copy()->addMinutes($appointment_duration);
                                            ?>
                                            <label>
                                                <input type="checkbox" 
                                                    x-model="schedule['<?php echo e($indexDay); ?>']['<?php echo e($startTime->format('H:i:s')); ?>']"
                                                    class="h-4 w-4 text-sky-400 border-sky-900 rounded 
                                                    focus:ring-emerald-500 focus:text-emerald-500">
                                                <span class="ml-2 text-sm font-medium text-gray-700">
                                                    <?php echo e($startTime->format('H:i')); ?> - <?php echo e($endTime->format('H:i')); ?>

                                                </span>
                                            </label>
                                        <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
        <div class="flex justify-end mt-4">
            <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-sky-900','positive' => true,'wire:click' => 'save']); ?>
                Guardar Horario
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
        <script>
            function data(){
                return {
                    schedule: <?php if ((object) ('schedule') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('schedule'->value()); ?>')<?php echo e('schedule'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('schedule'); ?>')<?php endif; ?>,
                    appointment_duration: <?php if ((object) ('appointment_duration') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('appointment_duration'->value()); ?>')<?php echo e('appointment_duration'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('appointment_duration'); ?>')<?php endif; ?>,
                    intervals: <?php if ((object) ('intervals') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('intervals'->value()); ?>')<?php echo e('intervals'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('intervals'); ?>')<?php endif; ?>,
                    days: <?php if ((object) ('days') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('days'->value()); ?>')<?php echo e('days'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('days'); ?>')<?php endif; ?>,
                    toggleHourBlock(indexDay,hourBlock,checked){
                        let hour=new Date(`1970-01-01T${hourBlock}`);
                        for($i=0 ; $i<this.intervals; $i++){
                            let startTime = new Date(hour.getTime() + ($i * this.appointment_duration * 60000));
                            let formattedStartTime = startTime.toTimeString().split(' ')[0];
                            this.schedule[indexDay][formattedStartTime]=checked; 
                        }
                    },
                    isHourBlockChecked(indexDay,hourBlock){
                        let hour=new Date(`1970-01-01T${hourBlock}`);
                        for($i=0 ; $i<this.intervals; $i++){
                            let startTime = new Date(hour.getTime() + ($i * this.appointment_duration * 60000));
                            let formattedStartTime = startTime.toTimeString().split(' ')[0];
                            if(!this.schedule[indexDay][formattedStartTime]){
                                return false;
                            }
                        }
                        return true;
                    },
                    toggleFullHourBlock(hourBlock,checked){
                        Object.keys(this.days).forEach((indexDay)=>{
                            this.toggleHourBlock(indexDay,hourBlock,checked);
                        });
                    },
                    isFullHourChecked(hourBlock){
                        return Object.keys(this.days).every((indexDay)=>{
                            return this.toggleHourBlock(indexDay,hourBlock);
                        });
                    }
                }
            }
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH D:\DW\CODE\citas\resources\views/livewire/admin/schedule-manager.blade.php ENDPATH**/ ?>
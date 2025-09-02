<div>
    <?php if (isset($component)) { $__componentOriginal983a7eb9047f01311cddd82e78ab7d46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal983a7eb9047f01311cddd82e78ab7d46 = $attributes; } ?>
<?php $component = WireUi\Components\Card\Index::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Card\Index::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-8 border-4 border-blue-300 rounded-xl']); ?>
        <div class="lg:flex lg:justify-between lg:items-center">
            <div>
                <p class="text-2xl font-bold text-gray-900 mb-1">
                    <?php echo e($appointment->patient->user->name); ?>

                </p>
                <p class="text-sm font-semibold text-gray-500">
                    DNI: <?php echo e($appointment->patient->user->dni); ?>

                </p>
            </div>
            <div class="lg:flex lg:space-x-3 space-y-2 lg:space-y-0 mt-4 lg:mt-0">
                <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$openModal(\'historyModal\')','light' => true,'sky' => true,'class' => 'w-full lg:w-auto']); ?>
                    <i class="fa-solid fa-notes-medical"></i>
                    Ver Historial
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
                <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['light' => true,'lime' => true,'x-on:click' => '$openModal(\'previousConsultationsModal\')','class' => 'w-full lg:w-auto']); ?>
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    Consultas Anteriores
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
    <?php if (isset($component)) { $__componentOriginal983a7eb9047f01311cddd82e78ab7d46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal983a7eb9047f01311cddd82e78ab7d46 = $attributes; } ?>
<?php $component = WireUi\Components\Card\Index::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Card\Index::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'border-4 border-blue-300 rounded-xl']); ?>  
        <?php if (isset($component)) { $__componentOriginalb5964ceaff5596b67291a601bad6f23f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5964ceaff5596b67291a601bad6f23f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs','data' => ['active' => 'consulta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => 'consulta']); ?>
             <?php $__env->slot('header', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal38c904af31df9cc1dcad6566e2f13366 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38c904af31df9cc1dcad6566e2f13366 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'consulta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'consulta']); ?>
                    <i class="fa-solid fa-notes-medical me-2"></i>
                    Consulta
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38c904af31df9cc1dcad6566e2f13366)): ?>
<?php $attributes = $__attributesOriginal38c904af31df9cc1dcad6566e2f13366; ?>
<?php unset($__attributesOriginal38c904af31df9cc1dcad6566e2f13366); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38c904af31df9cc1dcad6566e2f13366)): ?>
<?php $component = $__componentOriginal38c904af31df9cc1dcad6566e2f13366; ?>
<?php unset($__componentOriginal38c904af31df9cc1dcad6566e2f13366); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal38c904af31df9cc1dcad6566e2f13366 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38c904af31df9cc1dcad6566e2f13366 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'receta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'receta']); ?>
                    <i class="fa-solid fa-prescription-bottle-medical me-2"></i>
                    Receta
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38c904af31df9cc1dcad6566e2f13366)): ?>
<?php $attributes = $__attributesOriginal38c904af31df9cc1dcad6566e2f13366; ?>
<?php unset($__attributesOriginal38c904af31df9cc1dcad6566e2f13366); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38c904af31df9cc1dcad6566e2f13366)): ?>
<?php $component = $__componentOriginal38c904af31df9cc1dcad6566e2f13366; ?>
<?php unset($__componentOriginal38c904af31df9cc1dcad6566e2f13366); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal465aab28a93155063926343ebd00ccaa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal465aab28a93155063926343ebd00ccaa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'consulta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'consulta']); ?>
                <div class="space-y-4">
                    <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Diagnóstico','placeholder' => 'Describa el diagnóstico del paciente aquí...','wire:model' => 'form.diagnosis']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $attributes = $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $component = $__componentOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Trataimiento','placeholder' => 'Describa el tratamiento del paciente aquí...','wire:model' => 'form.treatment']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $attributes = $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $component = $__componentOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Notas','placeholder' => 'Describa el notas del paciente aquí...','wire:model' => 'form.notes']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $attributes = $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__attributesOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8)): ?>
<?php $component = $__componentOriginal766d51b9779a62d55606e4facdbf6fa8; ?>
<?php unset($__componentOriginal766d51b9779a62d55606e4facdbf6fa8); ?>
<?php endif; ?>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal465aab28a93155063926343ebd00ccaa)): ?>
<?php $attributes = $__attributesOriginal465aab28a93155063926343ebd00ccaa; ?>
<?php unset($__attributesOriginal465aab28a93155063926343ebd00ccaa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal465aab28a93155063926343ebd00ccaa)): ?>
<?php $component = $__componentOriginal465aab28a93155063926343ebd00ccaa; ?>
<?php unset($__componentOriginal465aab28a93155063926343ebd00ccaa); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal465aab28a93155063926343ebd00ccaa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal465aab28a93155063926343ebd00ccaa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'receta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'receta']); ?>
                <div class="space-y-4">
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $form['prescriptions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-gray-50 p-4 rounded-lg border lg:flex gap-4 space-y-4 lg:space-y-0" wire:key="prescription-<?php echo e($index); ?>">
                            <div class="flex-1">
                                <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Medicamento','placeholder' => 'Ej: Amoxicilina 500mg','wire:model' => 'form.prescriptions.'.e($index).'.medicine']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $attributes = $__attributesOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__attributesOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $component = $__componentOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__componentOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
                            </div>
                            <div class="lg:w-32">
                                <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Dosis','placeholder' => 'Ej: 1 cápsula','wire:model' => 'form.prescriptions.'.e($index).'.dosage']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $attributes = $__attributesOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__attributesOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $component = $__componentOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__componentOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
                            </div>
                            <div class="flex-1">
                                <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Frecuencia / Duración','placeholder' => 'Ej: cada 8 horas por 7 días','wire:model' => 'form.prescriptions.'.e($index).'.frequency']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $attributes = $__attributesOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__attributesOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal125559500674abc14ca4c750a63c3764)): ?>
<?php $component = $__componentOriginal125559500674abc14ca4c750a63c3764; ?>
<?php unset($__componentOriginal125559500674abc14ca4c750a63c3764); ?>
<?php endif; ?>
                            </div>
                            <div class="flex-shrink-0 lg:pt-6.5">
                                <?php if (isset($component)) { $__componentOriginal2a262af96c483a1eb8dd58a827ff85d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a262af96c483a1eb8dd58a827ff85d6 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Mini::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-mini-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Mini::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['red' => true,'icon' => 'trash','wire:click' => 'removePrescription('.e($index).')','spinner' => 'removePrescription('.e($index).')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a262af96c483a1eb8dd58a827ff85d6)): ?>
<?php $attributes = $__attributesOriginal2a262af96c483a1eb8dd58a827ff85d6; ?>
<?php unset($__attributesOriginal2a262af96c483a1eb8dd58a827ff85d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a262af96c483a1eb8dd58a827ff85d6)): ?>
<?php $component = $__componentOriginal2a262af96c483a1eb8dd58a827ff85d6; ?>
<?php unset($__componentOriginal2a262af96c483a1eb8dd58a827ff85d6); ?>
<?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="text-center bg-red-300 text-red-500 py-6 border border-red-600 rounded-lg">
                            No hay medicamentos añadidos en la receta.
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="mt-4">
                    <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['outline' => true,'positive' => true,'wire:click' => 'addPrescription','spinner' => 'addPrescription']); ?>
                        <i class="fa-solid fa-plus mr-2"></i>
                        Añadir Medicamento
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
<?php if (isset($__attributesOriginal465aab28a93155063926343ebd00ccaa)): ?>
<?php $attributes = $__attributesOriginal465aab28a93155063926343ebd00ccaa; ?>
<?php unset($__attributesOriginal465aab28a93155063926343ebd00ccaa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal465aab28a93155063926343ebd00ccaa)): ?>
<?php $component = $__componentOriginal465aab28a93155063926343ebd00ccaa; ?>
<?php unset($__componentOriginal465aab28a93155063926343ebd00ccaa); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5964ceaff5596b67291a601bad6f23f)): ?>
<?php $attributes = $__attributesOriginalb5964ceaff5596b67291a601bad6f23f; ?>
<?php unset($__attributesOriginalb5964ceaff5596b67291a601bad6f23f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5964ceaff5596b67291a601bad6f23f)): ?>
<?php $component = $__componentOriginalb5964ceaff5596b67291a601bad6f23f; ?>
<?php unset($__componentOriginalb5964ceaff5596b67291a601bad6f23f); ?>
<?php endif; ?>
        <div class="flex justify-end mt-6">
            <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['positive' => true,'wire:click' => 'save','spinner' => 'save','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!$appointment->status->isEditable())]); ?>
                <i class="fa-solid fa-save mr-2"></i>
                Guardar Consulta
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
    <?php if (isset($component)) { $__componentOriginal6a7d148983ed3ace55a3e668006b80a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a7d148983ed3ace55a3e668006b80a5 = $attributes; } ?>
<?php $component = WireUi\Components\Modal\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-modal-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Modal\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Historial Médico','name' => 'historyModal','width' => '5xl']); ?>
        <div class="grid lg:grid-cols-4 gap-6">
            <div>
                <p class="font-medium text-gray-500 mb-1">Tipo de Sangre:</p>
                <p class="font-semibold text-gray-800">
                    <?php echo e($patient->bloodType?->name ?? 'No registrado'); ?>

                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Alergias:</p>
                <p class="font-semibold text-gray-800">
                    <?php echo e($patient->allergies ?? 'No registrado'); ?>

                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Enfermedades crónicas:</p>
                <p class="font-semibold text-gray-800">
                    <?php echo e($patient->chronic_conditions ?? 'No registrado'); ?>

                </p>
            </div>
            <div>
                <p class="font-medium text-gray-500 mb-1">Antecedentes quirúrgicos:</p>
                <p class="font-semibold text-gray-800">
                    <?php echo e($patient->surgical_history ?? 'No registrado'); ?>

                </p>
            </div>
        </div>
         <?php $__env->slot('footer', null, []); ?> 
            <div class="flex justify-end">
                <a href="<?php echo e(route('admin.patients.edit',$patient->id)); ?>"
                    class="font-semibold text-blue-400 hover:text-blue-800"
                    target="_blank"    
                >
                    Ver/Editar Historial Médico
                </a>
            </div>
         <?php $__env->endSlot(); ?>
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
    <?php if (isset($component)) { $__componentOriginal6a7d148983ed3ace55a3e668006b80a5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a7d148983ed3ace55a3e668006b80a5 = $attributes; } ?>
<?php $component = WireUi\Components\Modal\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-modal-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Modal\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Consultas Ánteriores','name' => 'previousConsultationsModal','width' => '4xl']); ?>
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $previousConsultations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('admin.appointments.show', $consultation->appointment_id)); ?>" 
                class="block p-5 rounded-lg shadow-md border-gray-200 hover:border-indigo-400 hover:shadow-indigo-100 transition-all duration-200"
                target="_blank"
            >
                <div class="lg:flex justify-between items-center space-y-2 lg:space-y-0">
                    <div>
                        <p class="font-semibold text-gray-800 flex items-center">
                            <i class="fa-solid fa-calendar-days text-gray500 mr-2"></i>
                            <?php echo e($consultation->appointment->date->format('d/m/Y H:i:s')); ?> 
                        </p>
                        <p>
                           Atendido por:
                           Dr(a).<?php echo e($consultation->appointment->doctor->user->name); ?> 
                        </p>
                    </div>
                    <div >
                        <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['light' => true,'sky' => true,'class' => 'w-full lg:w-auto']); ?>
                            VER DETALLE
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
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="bg-red-200 text-center border-2 border-dashed border-red-500 py-10 rounded-xl">
                <i class=" fa-solid fa-inbox text-4xl text-red-600"></i>
                <p class="mt-4 text-sm font-medium text-red-600">
                    No se encontraron consultas anteriores
                </p>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
         <?php $__env->slot('footer', null, []); ?> 
            <div class="flex justify-end">
                <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['outline' => true,'red' => true,'sm' => true,'x-on:click' => '$closeModal(\'previousConsultationsModal\')']); ?>
                    Cerrar
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
         <?php $__env->endSlot(); ?>
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
</div>
<?php /**PATH D:\DW\CODE\citas\resources\views/livewire/admin/consultation-manager.blade.php ENDPATH**/ ?>
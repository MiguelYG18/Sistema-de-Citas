<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pacientes | Gerardo','breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pacientes',
        'href' => route('admin.patients.index'),
    ],
    [
        'name' => 'Editar',
    ],    
])]); ?>
    <form action="<?php echo e(route('admin.patients.update', $patient)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
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
                <div class="flex items-center space-x-5">
                    <img src="<?php echo e($patient->user->profile_photo_url); ?>" alt="<?php echo e($patient->user->name); ?>" class="h-20 w-20 rounded-full object-cover object-center">
                    <div>
                        <p class="text-2xl font-bold text-gray-900 mb-1">
                            <?php echo e($patient->user->name); ?>

                        </p>
                        <p class="text-sm font-semibold text-gray-500">
                            DNI: <?php echo e($patient->user->dni); ?>

                        </p>
                    </div>
                </div>
                <div class="flex space-x-3 mt-6 lg:mt-0">
                    <?php if (isset($component)) { $__componentOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf04362c37f55b087f96f1c4fb07d5ce1 = $attributes; } ?>
<?php $component = WireUi\Components\Button\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Button\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.patients.index')).'','class' => 'bg-sky-800 rounded-5 border-2 border-gray-300 hover:bg-sky-500']); ?>
                        Volver
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
<?php $component->withAttributes(['type' => 'submit','spinner' => 'save','class' => 'bg-green-600 rounded-5 border-2 border-gray-300 hover:bg-green-400']); ?>
                        Actualizar
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tabs','data' => ['active' => 'datos-personales']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => 'datos-personales']); ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginal38c904af31df9cc1dcad6566e2f13366 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38c904af31df9cc1dcad6566e2f13366 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'datos-personales']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'datos-personales']); ?>
                        <i class="fa-solid fa-user me-2"></i>
                        Datos Personales
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'antecedentes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'antecedentes']); ?>
                            <i class="fa-solid fa-file-lines me-2"></i>   
                            Antecedentes
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'informacion-general']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'informacion-general']); ?>
                        <i class="fa-solid fa-info me-2"></i>
                        Información General
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-link','data' => ['tab' => 'contacto-emergencia']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'contacto-emergencia']); ?>                       
                        <i class="fa-solid fa-heart me-2"></i>
                        Contacto de Emergencia
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'datos-personales']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'datos-personales']); ?>
                    <?php if (isset($component)) { $__componentOriginal2d3e6b52b2eab45c791560108ee8ee7b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d3e6b52b2eab45c791560108ee8ee7b = $attributes; } ?>
<?php $component = WireUi\Components\Alert\Index::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Alert\Index::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Edición de usuario','info' => true,'class' => 'border-4 border-blue-300 rounded-xl']); ?>
                        <div>
                            <p>
                                Para editar esta información, dirigete al 
                                <a href="<?php echo e(route('admin.users.edit', $patient->user)); ?>" 
                                    class="text-blue-800 hover:underline"
                                    target="_blank">
                                    perfil de usuario
                                </a> 
                                asociado a este paciente
                            </p>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d3e6b52b2eab45c791560108ee8ee7b)): ?>
<?php $attributes = $__attributesOriginal2d3e6b52b2eab45c791560108ee8ee7b; ?>
<?php unset($__attributesOriginal2d3e6b52b2eab45c791560108ee8ee7b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d3e6b52b2eab45c791560108ee8ee7b)): ?>
<?php $component = $__componentOriginal2d3e6b52b2eab45c791560108ee8ee7b; ?>
<?php unset($__componentOriginal2d3e6b52b2eab45c791560108ee8ee7b); ?>
<?php endif; ?>
                    <div class="grid lg:grid-cols-2 gap-4 mt-3">
                        <div>
                            <span class="text-gray-500 font-semibold text-sm">
                                Telefono:
                            </span>
                            <span class="text-gray-900 text-sm ml-1">
                                <?php echo e($patient->user->phone); ?>

                            </span>
                        </div>
                        <div> 
                            <span class="text-gray-500 font-semibold text-sm">
                                Email:
                            </span>
                            <span class="text-gray-900 text-sm ml-1">
                                <?php echo e($patient->user->email); ?>

                            </span>
                        </div>
                        <div>
                            <span class="text-gray-500 font-semibold text-sm">
                                Dirección:
                            </span>
                            <span class="text-gray-900 text-sm ml-1">
                                <?php echo e($patient->user->address); ?>

                            </span>
                        </div>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'antecedentes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'antecedentes']); ?>
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div>
                            <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Alergias conocidas','name' => 'allergies']); ?>
                                <?php echo e(old('allergies',$patient->allergies)); ?>

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
                        <div>
                            <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Enfermedades cronicas','name' => 'chronic_conditions']); ?>
                                <?php echo e(old('chronic_conditions',$patient->chronic_conditions)); ?>

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
                        <div>
                            <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Antecedentes quirúrgicos','name' => 'surgical_history']); ?>
                                <?php echo e(old('surgical_history',$patient->surgical_history)); ?>

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
                        <div>
                            <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Antecedentes familiares','name' => 'family_history']); ?>
                                <?php echo e(old('family_history',$patient->family_history)); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'informacion-general']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'informacion-general']); ?>
                    <?php if (isset($component)) { $__componentOriginalb421b625325d6862bcafcfe35877042a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb421b625325d6862bcafcfe35877042a = $attributes; } ?>
<?php $component = WireUi\Components\Select\Native::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-native-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Select\Native::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'blood_type_id','label' => 'Tipo de Sangre']); ?>
                        <option value="">Seleccione su tipo de Sangre</option>
                        <?php $__currentLoopData = $bloodTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bloodType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($bloodType->id); ?>" <?php if($bloodType->id === $patient->blood_type_id): echo 'selected'; endif; ?>>
                                <?php echo e($bloodType->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb421b625325d6862bcafcfe35877042a)): ?>
<?php $attributes = $__attributesOriginalb421b625325d6862bcafcfe35877042a; ?>
<?php unset($__attributesOriginalb421b625325d6862bcafcfe35877042a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb421b625325d6862bcafcfe35877042a)): ?>
<?php $component = $__componentOriginalb421b625325d6862bcafcfe35877042a; ?>
<?php unset($__componentOriginalb421b625325d6862bcafcfe35877042a); ?>
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
<?php $component->withAttributes(['class' => 'mt-4','name' => 'observations','label' => 'Observaciones']); ?>
                        <?php echo e(old('observations', $patient->observations)); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab-content','data' => ['tab' => 'contacto-emergencia']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => 'contacto-emergencia']); ?>
                    <div class="space-y-4">
                        <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre del contacto','name' => 'emergency_contact_name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('emergency_contact_name', $patient->emergency_contact_name))]); ?>
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
                        <?php if (isset($component)) { $__componentOriginalbd8992b92cb6a484ff643320e7ac61b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8992b92cb6a484ff643320e7ac61b7 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Phone::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Phone::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Teléfono del contacto','name' => 'emergency_contact_phone','value' => ''.e(old('emergency_contact_phone', $patient->emergency_contact_phone)).'','mask' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['(+51) ###-###-###'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd8992b92cb6a484ff643320e7ac61b7)): ?>
<?php $attributes = $__attributesOriginalbd8992b92cb6a484ff643320e7ac61b7; ?>
<?php unset($__attributesOriginalbd8992b92cb6a484ff643320e7ac61b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd8992b92cb6a484ff643320e7ac61b7)): ?>
<?php $component = $__componentOriginalbd8992b92cb6a484ff643320e7ac61b7; ?>
<?php unset($__componentOriginalbd8992b92cb6a484ff643320e7ac61b7); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Relación con el contacto','name' => 'emergency_contact_relationship','value' => ''.e(old('emergency_contact_relationship', $patient->emergency_contact_relationship)).'']); ?>
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
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\resources\views/admin/patients/edit.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Doctores | Gerardo','breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Doctores',
        'href' => route('admin.doctors.index'),
    ],
    [
        'name' => 'Editar',
    ],    
])]); ?>
    <form action="<?php echo e(route('admin.doctors.update', $doctor)); ?>" method="POST">
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
<?php $component->withAttributes(['class' => 'mb-8 border-4 border-gray-500 rounded-xl']); ?>
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center space-x-5">
                    <img src="<?php echo e($doctor->user->profile_photo_url); ?>" alt="<?php echo e($doctor->user->name); ?>" class="h-20 w-20 rounded-full object-cover object-center">
                    <div>
                        <p class="text-2xl font-bold text-gray-900 mb-1">
                            <?php echo e($doctor->user->name); ?>

                        </p>
                        <p class="text-sm font-semibold text-gray-500">
                            Licencia: <?php echo e($doctor->medical_license_number ??  'N/A'); ?>

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
<?php $component->withAttributes(['href' => ''.e(route('admin.doctors.index')).'','class' => 'bg-sky-800 rounded-5 border-2 border-gray-300 hover:bg-sky-500']); ?>
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
<?php $component->withAttributes(['type' => 'submit','positive' => true,'spinner' => 'save']); ?>
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
<?php $component->withAttributes(['class' => 'border-4 border-gray-500 rounded-xl']); ?>
            <div class="space-y-4">
                <?php if (isset($component)) { $__componentOriginalb421b625325d6862bcafcfe35877042a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb421b625325d6862bcafcfe35877042a = $attributes; } ?>
<?php $component = WireUi\Components\Select\Native::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-native-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Select\Native::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Especialidad','name' => 'speciality_id']); ?>
                    <option value="">Selecciona una especialidad</option>
                    <?php $__currentLoopData = $specialities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speciality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($speciality->id); ?>" <?php if($speciality->id == old('speciality_id',$doctor->speciality_id)): echo 'selected'; endif; ?>><?php echo e($speciality->name); ?></option>
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
                <?php if (isset($component)) { $__componentOriginalbd8992b92cb6a484ff643320e7ac61b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd8992b92cb6a484ff643320e7ac61b7 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Phone::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Phone::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'medical_license_number','label' => 'Número de licencia médica','placeholder' => 'Licencia médica','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('medical_license_number', $doctor->medical_license_number)),'mask' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['####-####-####']),'description' => 'Ingrese la licencia médica']); ?>
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
                <?php if (isset($component)) { $__componentOriginal766d51b9779a62d55606e4facdbf6fa8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal766d51b9779a62d55606e4facdbf6fa8 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Textarea::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Biografía','name' => 'biography','rows' => '3','placeholder' => 'Biografía del doctoe']); ?>
                <?php echo e(old('biography',$doctor->biography)); ?>

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
                <div class="flex justify-end">
                    <div class="w-32">
                        <?php if (isset($component)) { $__componentOriginalb421b625325d6862bcafcfe35877042a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb421b625325d6862bcafcfe35877042a = $attributes; } ?>
<?php $component = WireUi\Components\Select\Native::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-native-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Select\Native::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Estado','name' => 'active']); ?>
                            <option value="1" <?php if(old('active',$doctor->active)== 1): echo 'selected'; endif; ?>>Activo</option>
                            <option value="0" <?php if(old('active',$doctor->active)== 0): echo 'selected'; endif; ?>>Inactivo</option>
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
                    </div>
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
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\resources\views/admin/doctors/edit.blade.php ENDPATH**/ ?>
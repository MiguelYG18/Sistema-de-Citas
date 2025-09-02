<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Usuario | Gerardo','breadcrumbs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index')
    ],
    [
        'name' => 'Nuevo'
    ],
])]); ?>
    <?php if (isset($component)) { $__componentOriginal983a7eb9047f01311cddd82e78ab7d46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal983a7eb9047f01311cddd82e78ab7d46 = $attributes; } ?>
<?php $component = WireUi\Components\Card\Index::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Card\Index::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <form action="<?php echo e(route('admin.users.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nombre','name' => 'name','placeholder' => 'Nombre del usuario','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name')),'description' => 'Ingrese el nombe del usuario']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'email','label' => 'Correo Electrónico','type' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'placeholder' => 'Email del usuario','description' => 'Ingrese el correo del usuario','suffix' => '@gmail.com']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal728935b8358d1c6f525570f19e1ac6de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal728935b8358d1c6f525570f19e1ac6de = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Password::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Password::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password','label' => 'Contraseña','description' => 'Ingrese la contraseña']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal728935b8358d1c6f525570f19e1ac6de)): ?>
<?php $attributes = $__attributesOriginal728935b8358d1c6f525570f19e1ac6de; ?>
<?php unset($__attributesOriginal728935b8358d1c6f525570f19e1ac6de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal728935b8358d1c6f525570f19e1ac6de)): ?>
<?php $component = $__componentOriginal728935b8358d1c6f525570f19e1ac6de; ?>
<?php unset($__componentOriginal728935b8358d1c6f525570f19e1ac6de); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal728935b8358d1c6f525570f19e1ac6de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal728935b8358d1c6f525570f19e1ac6de = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Password::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Password::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'password_confirmation','label' => 'Confirmar Contraseña','description' => 'Confirme la contraseña']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal728935b8358d1c6f525570f19e1ac6de)): ?>
<?php $attributes = $__attributesOriginal728935b8358d1c6f525570f19e1ac6de; ?>
<?php unset($__attributesOriginal728935b8358d1c6f525570f19e1ac6de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal728935b8358d1c6f525570f19e1ac6de)): ?>
<?php $component = $__componentOriginal728935b8358d1c6f525570f19e1ac6de; ?>
<?php unset($__componentOriginal728935b8358d1c6f525570f19e1ac6de); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <?php if (isset($component)) { $__componentOriginal8f41ae2f3fc4fc3fa542f94af5403568 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f41ae2f3fc4fc3fa542f94af5403568 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Maskable::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-maskable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Maskable::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'dni','label' => 'DNI','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('dni')),'placeholder' => 'DNI del usuario','description' => 'Ingrese el DNI del usuario','mask' => '########']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f41ae2f3fc4fc3fa542f94af5403568)): ?>
<?php $attributes = $__attributesOriginal8f41ae2f3fc4fc3fa542f94af5403568; ?>
<?php unset($__attributesOriginal8f41ae2f3fc4fc3fa542f94af5403568); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f41ae2f3fc4fc3fa542f94af5403568)): ?>
<?php $component = $__componentOriginal8f41ae2f3fc4fc3fa542f94af5403568; ?>
<?php unset($__componentOriginal8f41ae2f3fc4fc3fa542f94af5403568); ?>
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
<?php $component->withAttributes(['name' => 'phone','label' => 'Télefono','placeholder' => 'Teléfono del usuario','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('phone')),'mask' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['(+51) ###-###-###']),'description' => 'Ingrese el teléfono del usuario']); ?>
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
                    <?php if (isset($component)) { $__componentOriginalb421b625325d6862bcafcfe35877042a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb421b625325d6862bcafcfe35877042a = $attributes; } ?>
<?php $component = WireUi\Components\Select\Native::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-native-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Select\Native::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'role_id','label' => 'Rol','description' => 'Importante asignarle un rol']); ?>
                        <option value="">Seleccione un Rol</option>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>" <?php if(old('role_id') == $role->id): echo 'selected'; endif; ?>>
                                <?php echo e($role->name); ?>

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
                </div>
                <?php if (isset($component)) { $__componentOriginal125559500674abc14ca4c750a63c3764 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal125559500674abc14ca4c750a63c3764 = $attributes; } ?>
<?php $component = WireUi\Components\TextField\Input::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\TextField\Input::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'address','label' => 'Dirección','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('address')),'placeholder' => 'Dirección del usuario','description' => 'Ingrese la dirección del usuario']); ?>
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
<?php $component->withAttributes(['type' => 'submit','positive' => true,'spinner' => 'save','teal' => true]); ?>
                    Guardar
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
        </form>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\resources\views/admin/users/create.blade.php ENDPATH**/ ?>
<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginalf7dd765db12ff00241c1dc4f4ca5bdfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7dd765db12ff00241c1dc4f4ca5bdfa = $attributes; } ?>
<?php $component = WireUi\Components\Label\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Label\Base::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7dd765db12ff00241c1dc4f4ca5bdfa)): ?>
<?php $attributes = $__attributesOriginalf7dd765db12ff00241c1dc4f4ca5bdfa; ?>
<?php unset($__attributesOriginalf7dd765db12ff00241c1dc4f4ca5bdfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7dd765db12ff00241c1dc4f4ca5bdfa)): ?>
<?php $component = $__componentOriginalf7dd765db12ff00241c1dc4f4ca5bdfa; ?>
<?php unset($__componentOriginalf7dd765db12ff00241c1dc4f4ca5bdfa); ?>
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\storage\framework\views/1278cadba97c73261971e2d6edc2bdbf.blade.php ENDPATH**/ ?>
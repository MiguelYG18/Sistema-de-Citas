<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>

<?php if (isset($component)) { $__componentOriginal63fbfee98b11ac051c54dbeb44a56b9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal63fbfee98b11ac051c54dbeb44a56b9b = $attributes; } ?>
<?php $component = WireUi\Components\Errors\Single::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('wire-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireUi\Components\Errors\Single::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal63fbfee98b11ac051c54dbeb44a56b9b)): ?>
<?php $attributes = $__attributesOriginal63fbfee98b11ac051c54dbeb44a56b9b; ?>
<?php unset($__attributesOriginal63fbfee98b11ac051c54dbeb44a56b9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63fbfee98b11ac051c54dbeb44a56b9b)): ?>
<?php $component = $__componentOriginal63fbfee98b11ac051c54dbeb44a56b9b; ?>
<?php unset($__componentOriginal63fbfee98b11ac051c54dbeb44a56b9b); ?>
<?php endif; ?><?php /**PATH D:\DW\CODE\citas\storage\framework\views/d2a11060e8709188eb743fa58e6f3832.blade.php ENDPATH**/ ?>
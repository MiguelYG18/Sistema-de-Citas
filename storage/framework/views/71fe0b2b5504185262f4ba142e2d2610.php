<!--[if BLOCK]><![endif]--><?php if($invalidated): ?>
    <label <?php echo e($attributes->class('text-sm text-negative-600')); ?>>
        <?php echo e($slot->isEmpty() ? $message : $slot); ?>

    </label>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH D:\DW\CODE\citas\vendor\wireui\wireui\src/Components/Errors/views/single.blade.php ENDPATH**/ ?>
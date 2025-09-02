<div <?php echo e($attributes->class([
    data_get($colorClasses, 'background', ''),
    data_get($colorClasses, 'border', ''),
    $shadowClasses => !$shadowless,
    'w-full flex flex-col p-4',
    $roundedClasses,
])); ?>>
    <?php if(isset($header)): ?>
        <div <?php echo e($header->attributes); ?>>
            <?php echo e($header); ?>

        </div>
    <?php elseif($title): ?>
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'flex justify-between items-center',
            'pb-3' => $slot->isNotEmpty(),
        ]); ?>">
            <div class="flex items-center">
                <?php if($icon && !$iconless): ?>
                    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => WireUi::component('icon')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\DynamicComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => $icon,'class' => \Illuminate\Support\Arr::toCssClasses([
                            data_get($colorClasses, 'iconColor', ''),
                            'w-5 h-5 mr-3 shrink-0',
                        ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
                <?php endif; ?>

                <div <?php echo e(WireUi::extractAttributes($title)->class([
                    'font-semibold' => $slot->isNotEmpty(),
                    data_get($colorClasses, 'text', ''),
                    'font-normal' => $slot->isEmpty(),
                    'text-sm whitespace-normal',
                ])); ?>>
                    <?php echo e($title); ?>

                </div>
            </div>

            <?php if(isset($action)): ?>
                <div <?php echo e($action->attributes); ?>>
                    <?php echo e($action); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if($slot->isNotEmpty()): ?>
        <div <?php echo e(WireUi::extractAttributes($slot)->class([
            data_get($colorClasses, 'text', ''),
            $paddingClasses,
            'grow text-sm',
        ])); ?>>
            <?php echo e($slot); ?>

        </div>
    <?php endif; ?>

    <?php if(isset($footer)): ?>
        <div <?php echo e($footer->attributes->class('mt-2 pt-2')); ?>>
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\DW\CODE\citas\vendor\wireui\wireui\src/Components/Alert/views/index.blade.php ENDPATH**/ ?>
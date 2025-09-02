<?php
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'href' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard')
    ],
    [
        'header' => 'Gestión'
    ],
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'href' => route('admin.dashboard'),
        'active' => false,
        'submenu' => [
            [
                'name' => 'Products',
                'href' => '#',
                'active' => false
            ],
            [
                'name' => 'Billing',
                'href' => '#',
                'active' => false
            ],
            [
                'name' => 'Invoice',
                'href' => '#',
                'active' => false
            ],
        ]
    ],
    [
        'name' => 'Roles y Permisos',
        'icon' => 'fa-solid fa-shield-halved',
        'href' => route('admin.roles.index'),
        'active' => request()->routeIs('admin.roles.*'),
    ],
    [
        'name' => 'Usuarios',
        'icon' => 'fa-solid fa-users',
        'href' => route('admin.users.index'),
        'active' => request()->routeIs('admin.users.*'),
    ],
    [
        'name' => 'Pacientes',
        'icon' => 'fa-solid fa-user-injured',
        'href' => route('admin.patients.index'),
        'active' => request()->routeIs('admin.patients.*'),
    ],
    [
        'name' => 'Doctores',
        'icon' => 'fa-solid fa-user-doctor',
        'href' => route('admin.doctors.index'),
        'active' => request()->routeIs('admin.doctors.*'),
    ], 
    [
        'name' => 'Citas Médicas',
        'icon' => 'fa-solid fa-calendar-check',
        'href' => route('admin.appointments.index'),
        'active' => request()->routeIs('admin.appointments.*'),
    ],
    [
        'name'=>'Calendario',
        'icon' =>'fa-solid fa-calendar-days',
        'href'=>route('admin.calendar.index'),
        'active'=>request()->routeIs('admin.calendar.*'),
    ]     
];
?>
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-sky-900 border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-sky-900">
        <ul class="space-y-2 font-medium">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php if(isset($link['header'])): ?>
                        <div class="px-2 py-2 text-xs font-semibold text-white uppercase">
                            <?php echo e($link['header']); ?>

                        </div>
                    <?php else: ?>
                        <?php if(isset($link['submenu'])): ?>
                            <button type="button" class="flex items-center w-full p-2 text-base text-white transition duration-75 rounded-lg group hover:bg-sky-400" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <span class="w-6 h-6 inline-flex justify-center items-center text-white">
                                    <i class="<?php echo e($link['icon']); ?>"></i>
                                </span>
                                <span class="ms-3 flex-1 text-left rtl:text-right whitespace-nowrap"><?php echo e($link['name']); ?></span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                <?php $__currentLoopData = $link['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e($item['href']); ?>" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-sky-400"><?php echo e($item['name']); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo e($link['href']); ?>" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group <?php echo e($link['active'] ? 'bg-sky-400' : ''); ?>">
                                <span class="w-6 h-6 inline-flex justify-center items-center text-white">
                                    <i class="<?php echo e($link['icon']); ?>"></i>
                                </span>
                                <span class="ms-3"><?php echo e($link['name']); ?></span>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</aside><?php /**PATH D:\DW\CODE\citas\resources\views/layouts/includes/admin/sidebar.blade.php ENDPATH**/ ?>
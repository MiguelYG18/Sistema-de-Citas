<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => config('app.name','Laravel'),
    'breadcrumbs' => []
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => config('app.name','Laravel'),
    'breadcrumbs' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e($title); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/301ea3eb83.js" crossorigin="anonymous"></script>
        
        <!-- Sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        
        <!--Wire UI-->
        <script >window.Wireui = {cache: {},hook(hook, callback) {window.addEventListener(`wireui:${hook}`, () => callback())},dispatchHook(hook) {window.dispatchEvent(new Event(`wireui:${hook}`))}}</script>
<script src="http://citas.test/wireui/assets/scripts" defer ></script>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <!-- Styles -->
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

        <?php echo $__env->yieldPushContent('css'); ?>
    </head>
    <body class="font-sans antialiased bg-sky-900">
        <?php echo $__env->make('layouts.includes.admin.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <?php echo $__env->make('layouts.includes.admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="p-4 sm:ml-64">
            <div class="mt-14 flex items-center">
                <?php echo $__env->make('layouts.includes.admin.breadcrumb', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php if(isset($action)): ?>
                    <div class="ml-auto">
                        <?php echo e($action); ?>

                    </div>
                <?php endif; ?>
            </div>
            <?php echo e($slot); ?>

        </div>      
        <?php echo $__env->yieldPushContent('modals'); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <?php if(session('swal')): ?>
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire(<?php echo json_encode(session('swal'), 15, 512) ?>);
            </script>            
        <?php endif; ?>
        <script>
            forms = document.querySelectorAll('.delete-form');
            forms.forEach(
                form=>{
                    form.addEventListener('submit', function(e){
                        e.preventDefault();
                        Swal.fire({
                            title: "¿Estás seguro?",
                            text: "¡No podrás revertir esto!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#2ecc71",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "¡Si, eliminar!",
                            cancelButtonText: "Cancelar"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                }
            );
        </script>
        <script>
            Livewire.on('swal',(data)=>{
                Swal.fire(data[0]);
            });
        </script>
        <?php echo $__env->yieldPushContent('js'); ?>
    </body>
</html>
<?php /**PATH D:\DW\CODE\citas\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
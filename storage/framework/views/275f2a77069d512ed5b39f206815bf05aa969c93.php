<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/menu.css">

    <div class="menu">
        <div onclick="window.location.href='/analytics'" class="menu-item">
            <span>Компания №1</span>
        </div>
        <div class="menu-item">
            <span>Компания №2</span>
        </div>
        <div class="menu-item">
            <span>Компания №3</span>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project\resources\views/menu.blade.php ENDPATH**/ ?>
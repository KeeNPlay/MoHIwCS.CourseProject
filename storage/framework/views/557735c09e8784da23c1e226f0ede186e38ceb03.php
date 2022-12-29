<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/menu.css">

    <div class="menu">
        <!-- window.location.href='/management/НАЗВАНИЕ КОМПАНИИ' (Нужно откуда-то дёргать это название, я не знаю как у тебя это реализовано)-->
        <div onclick="window.location.href='/management/Компания №1'" class="menu-item">
            <span>Компания №1</span>
        </div>
        <div onclick="window.location.href='/management/Компания №2'" class="menu-item">
            <span>Компания №2</span>
        </div>
        <div onclick="window.location.href='/management/Компания №3'" class="menu-item">
            <span>Компания №3</span>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project-1\resources\views/management-menu.blade.php ENDPATH**/ ?>
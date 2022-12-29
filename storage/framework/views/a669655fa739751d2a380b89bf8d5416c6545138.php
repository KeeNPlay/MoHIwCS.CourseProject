<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/analytics.css">

    <div class="title">
        <h2>Компания №1</h2>
    </div>
    <div class="analytics">
        <div class="analytic-cards">
            <div class="card">
                <span class="title">Количество техники в автопарке</span>
                <span class="number">30</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в рейсе</span>
                <span class="number">11</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на текущем ремонте</span>
                <span class="number">3</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в простое без водителя</span>
                <span class="number">1</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в технолог. простое</span>
                <span class="number">3</span>
            </div>
            <div class="card">
                <span class="title">Количество техники в перебазировке</span>
                <span class="number">9</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на хранении (испр.)</span>
                <span class="number">2</span>
            </div>
            <div class="card">
                <span class="title">Количество техники на хранении (не испр.)</span>
                <span class="number">1</span>
            </div>
        </div>
        <div class="statistical-analytic">
            <div class="title">
                <h3>Статистический анализ</h3>
            </div>
            <div class="statistical-analytic-content">
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Использование техники в среднем (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">5.67</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний показатель использования техники (часов за 1 смену): </span>
                    <span class="statistical-analytic-item-number">3.25</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний показатель использования техники (часов за 2 смену): </span>
                    <span class="statistical-analytic-item-number">2.67</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Коэффицент технической готовности: </span>
                    <span class="statistical-analytic-item-number">0.9</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Средний простой с выключенным двигателем (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">6.78</span>
                </div>
                <div class="statistical-analytic-item">
                    <span class="statistical-analytic-item-title">Среднее время работы двигателя на холостом ходу (часов в сутки): </span>
                    <span class="statistical-analytic-item-number">4.18</span>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project\resources\views/analytics.blade.php ENDPATH**/ ?>
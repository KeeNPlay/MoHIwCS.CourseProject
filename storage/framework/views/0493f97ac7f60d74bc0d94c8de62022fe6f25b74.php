<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/vehicle-card.css">

    <div class="vehicle-card-container">
        <form method="post">
            <div class="header">
                <div>
                    <div class="img-container">
                        <img src="/img/icons/vehicle-card-photo.png" alt="">
                    </div>
                    <div class="header-inputs">
                        <input type="text" value="КАМАЗ-65111-50" required>
                        <input type="text" value="Самосвал (20-25т)" required>
                    </div>
                </div>
                <button class="btn" type="submit">Применить</button>
            </div>
            <div class="vehicle-info">
                <label for="garage-number">Гаражный номер</label>
                <input type="text" class="input" id="garage-number" value="102111" readonly required>
                <label for="vin-number">VIN-номер</label>
                <input type="text" class="input" id="vin-number" value="JMBSNCS3A6U004025" required>
                <label for="company">Производственная компания</label>
                <input type="text" class="input" id="company" value="Компания №1" required>
                <label for="object">Объект</label>
                <input type="text" class="input" id="object" value="Харасавейское НГКМ" required>
                <label for="area">Участок</label>
                <input type="text" class="input" id="area" value="Электростанция собственных нужд" required>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project\resources\views/vehicle-card.blade.php ENDPATH**/ ?>
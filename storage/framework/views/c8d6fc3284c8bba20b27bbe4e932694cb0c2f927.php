<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/vehicle-card.css">

    <div class="vehicle-card-container">
        <form method="post" action="<?php echo e(route('updateInformation')); ?>">
            <?php echo csrf_field(); ?>
            <div class="header">
                <div>
                    <div class="img-container">
                        <img src="/img/icons/vehicle-card-photo.png" alt="">
                    </div>
                    <div class="header-inputs">
                        <input type="text" value="<?php echo e($machines->vehicleName); ?>" id="vehicleName"  name="vehicleName" required>
                        <input type="text" value="<?php echo e($machines->vahicleType); ?>" id="vehicleType" name="vehicleType" required>
                    </div>
                </div>
            </div>
            <div class="vehicle-info">
                <label for="garageNumber">Гаражный номер</label>
                <input type="text" class="input" id="garageNumber" name="garageNumber" value="<?php echo e($machines->garageNumber); ?>" readonly required>
                <label for="vehicleVin">VIN-номер</label>
                <input type="text" class="input" id="vehicleVin" name="vehicleVin" value="<?php echo e($machines->vehicleVin); ?>" required>
                <label for="company">Производственная компания</label>
                <input type="text" class="input" id="company" name="company" value="<?php echo e($machines->company); ?>" required>
                <label for="vehicleObject">Объект</label>
                <input type="text" class="input" id="vehicleObject" name="vehicleObject" value="<?php echo e($machines->vehicleObject); ?>" required>
                <label for="vehicleArea">Участок</label>
                <input type="text" class="input" id="vehicleArea" name="vehicleArea" value="<?php echo e($machines->vehicleArea); ?>" required>
            </div>
            <button class="btn" type="submit">Применить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\course-project-1\resources\views/vehicle-card.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="/css/page-styles/settings.css">

    <div class="settings-card-container">
        <form method="post" id="submit-settings" action="/formUpdateInformationUser">
            <?php echo csrf_field(); ?>
            <div class="header">
                <div>
                    <div class="img-container">
                        <img src="/img/icons/profile-card-photo.png" alt="">
                    </div>
                    <div class="header-inputs">
                        <input type="text" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->fullName); ?>" name="userName" required>
                        <input type="text" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->position); ?>" name="jobTitle" required>
                    </div>
                </div>
            </div>
            <div class="profile-info">
                <label for="eMail">E-Mail</label>
                <input type="text" class="input" id="eMail" name="eMail" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->electronic_mail); ?>" required>
                <label for="mobileNumber">Номер телефона</label>
                <input type="text" class="input" id="mobileNumber" name="mobileNumber" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->phone_number); ?>" required>
                <label for="company">Производственная компания</label>
                <input type="text" class="input" id="company" name="company" value="<?php echo e(\Illuminate\Support\Facades\Auth::user()->company); ?>" required>
            </div>
            <div class="settings-btn">
                <button type="button" class="btn settings" id="changePasswordPopUp">Сменить пароль</button>
            </div>
            <button class="btn" type="submit" form="submit-settings">Сохранить изменения</button>
        </form>

        <div class="pop-up">
            <div class="pop-up-container">
                <div class="pop-up-body">
                    <h3>Смена пароля</h3>
                    <hr>
                    <form method="post">
                        <label for="newPass">Новый пароль</label>
                        <input type="password" id="newPass" placeholder="Новый пароль">
                        <label for="newPassSubmit">Повторите новый пароль</label>
                        <input type="password" id="newPassSubmit" placeholder="Повторите новый пароль">
                        <button class="btn" type="submit">Применить</button>
                    </form>
                    <div class="pop-up-close">&#10006</div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/change-pass-pop-up.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\course-project\resources\views/settings.blade.php ENDPATH**/ ?>
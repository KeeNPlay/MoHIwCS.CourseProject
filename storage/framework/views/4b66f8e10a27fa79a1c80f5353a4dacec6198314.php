<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="/css/assets.css">
    <link rel="stylesheet" href="/css/page-styles/login.css">
    <title>ГСП Log-In</title>
</head>

<body>
<main>
    <div class="container">
        <div class="illustration-container">
            <img class="login-illustration" src="/img/illustrations/login-illustration.png" alt="login-illustration">
        </div>
        <div class="form-container">
            <div class="img-container">
                <img class="logo" src="/img/logo.svg" alt="logo">
            </div>
            <h1>Analytic system</h1>
            <form class="login-form"
                          action="<?php echo e(route('user.login')); ?>"
                  method="post">
                <?php echo csrf_field(); ?>
                <div class="input-form">
                    <label>Логин</label>
                    <input class="input" type="text" placeholder="Введите ваш логин" id="email" name="email" autocomplete="off"
                           required>
                </div>
                <div class="input-form">
                    <label>Пароль</label>
                    <input class="input input-password" type="password" placeholder="Введите ваш пароль" id="password" name="password"
                           autocomplete="off"
                           required>
                </div>
                <button class="login-button" type="submit">Войти</button>
            </form>
        </div>
    </div>
    
</main>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\course-project\resources\views/login.blade.php ENDPATH**/ ?>
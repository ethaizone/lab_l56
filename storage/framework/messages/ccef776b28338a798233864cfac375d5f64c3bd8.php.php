<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <?php echo _i('Hello2!'); ?>

                <div class="links">
                    <a href="https://laravel.com/docs"><?php echo e(_i('Documentation %s', 'test')); ?></a>
                    <a href="https://laravel.com/docs"><?php echo e(_i('Documentation')); ?></a>
                    <a href="https://laracasts.com"><?php echo e(_i('Laracast')); ?></a>
                    <a href="https://laravel-news.com"><?php echo e(_i('News')); ?></a>
                    <a href="https://forge.laravel.com"><?php echo e(_i('Forge')); ?></a>
                    <a href="https://github.com/laravel/laravel"><?php echo e(_i('GitHub')); ?></a>
                </div>

                <p>
                    Test translate<br/>
                    <?php $dog = rand(1, 1); ?>
                    <?php echo e(_n('I have %s dog.', 'I have %s dogs.', $dog, $dog)); ?><br/>

                </p>


                <ul>
                    <?php $__currentLoopData = Config::get('laravel-gettext.supported-locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="/lang/<?php echo e($locale); ?>"><?php echo e($locale); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>


                <h1><?php echo e(env('APP_ENV')); ?></h1>

            </div>
        </div>
    </body>
</html>

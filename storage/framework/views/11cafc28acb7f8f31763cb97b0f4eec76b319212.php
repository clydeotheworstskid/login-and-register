<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        <h1>Make yourself a new account!</h1>
        <form action="" method="post">
            <?php echo csrf_field(); ?>

            <p>
                Username:
                <input type="text" name="username">
            </p>

            <p>
                Email:
                <input type="email" name="email">
            </p>

            <p>
                Password:
                <input type="password" name="password">
            </p>

            <p>
                Repeat password:
                <input type="password" name="password2">
            </p>

            <p>
                <input type="submit" name="submit" value="Sign up!"> 
            </p>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hiapp\resources\views/register.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        <h1>Hello, stranger!</h1>
        <form action="" method="post">
            <?php echo csrf_field(); ?>

            <?php if(session('status')): ?>
                <p> <?php echo e(session('status')); ?> </p>
            <?php endif; ?>

            <p>
                Username:
                <input type="text" name="username">
            </p>

            <p>
                Password:
                <input type="password" name="password">
            </p>

            <p>
                <input type="submit" name="submit" value="Log in!"> 
            </p>

            <?php $__errorArgs = ['IncorrectData'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p>
                    <b> <?php echo e($message); ?> </b>
                </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hiapp\resources\views/login.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body>
        <h1>Hello, <?php echo e(Auth::user()->username); ?> </h1>
        
        This is the main page!

        <p>
            <a href="/logout">Logout</a>
        </p>
    </body>
</html><?php /**PATH C:\xampp\htdocs\hiapp\resources\views/main.blade.php ENDPATH**/ ?>
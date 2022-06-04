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
            @csrf()

            @if (session('status'))
                <p> {{ session('status') }} </p>
            @endif

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

            @error('IncorrectData')
                <p>
                    <b> {{ $message }} </b>
                </p>
            @enderror
        </form>
    </body>
</html>
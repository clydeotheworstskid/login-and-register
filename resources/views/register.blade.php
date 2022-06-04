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
            @csrf()

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

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            @endif
            
        </form>
    </body>
</html>

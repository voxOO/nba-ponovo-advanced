<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>EMAIL VERIFICATION</title>
</head>
<body>
    <h3>
        Hello {{ $user->name }} welcome to the NBA portal
    </h3>
<hr>
    <p>Please confirm your email address clicking on the link below!</p>
<<hr>
    <a href="{{ route('verify', ['id' => $user->id ]) }}">PLEASE CLICK HERE TO VERIFY YOUR EMAIL ADDRESS</a>
</body>
</html>




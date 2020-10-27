<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
    Hello {{ $user->first_name}}
</h2>

<p>Please, click on link bellow!</p>

<a href="http://localhost:8080/verification/{{$token}}">Verification link</a>
</body>
</html>
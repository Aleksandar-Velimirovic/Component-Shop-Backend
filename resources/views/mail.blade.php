<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <p>
            Hello {{ $user->first_name}}
        </p>
        
        <p>Please, click on link bellow!</p>
        
        <a href="http://localhost:8080/verification/{{$token}}">Verification link</a>
    </div>
</body>
</html>
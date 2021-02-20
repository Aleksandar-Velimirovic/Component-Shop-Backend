<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <p>
            Hello {{ $user->first_name}},
        </p>

        <p>These are your order details:</p>
        <div class="list-group-item">
            Name: <b>{{ $orderDetailes->customer_first_name }} {{ $orderDetailes->customer_last_name }}</b>
            <br>
            City: <b>{{ $orderDetailes->city }}</b>
            <br>
            Address: <b>{{ $orderDetailes->address }}</b>
            <br>
            Apartment number: <b>{{ $orderDetailes->apartment_number }}</b>
            <br>
            Phone Number: <b>{{ $orderDetailes->number }}</b>
        </div>

        <br>

        <span class="list-group">
            You have successfuly ordered these products: 
            @foreach($products as $product)
                <p class="list-group-item">
                    <b>{{ $product->product_title }}</b>
                    <br>
                    Price: <b>{{ $product->price }}</b>
                    Rate and comment: 
                    <a href="http://localhost:8080/addCommentAndRating/{{$product->id}}">Rate and Comment</a>
                </p>
            @endforeach
        </span>
    </div>
</body>
</html>
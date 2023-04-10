<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Product')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <h1>Choose Your Item</h1>
    <h1>@yield('Product')</h1>
    @foreach ($productCard as $card)
        <div class="card" style="width: 18rem;">
            <div class="col-4 col-md-4 text-center">
                <h1 class="card-title">{{$card['productName']}}</h1>
                <p class="card-text">{{$card['status']}}</p>
                <h1>{{$card['price']}}</h1>
                <a href="" class="btn btn-primary">Buy</a>
            </div>
        </div>
    @endforeach
    {{-- @if ($status >= 'S') --}}

    {{-- @endif --}}
</body>
</html>

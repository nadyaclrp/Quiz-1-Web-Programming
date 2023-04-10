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
    <h1 class="text-center">Choose Your Item</h1>
    <h1>@yield('Product')</h1>
    <div class="d-flex align-items-center flex-column">
        @foreach ($productCard as $card)
            @if ($card['status'] == 'R')
            {{-- @if ($status = 'R') --}}
                {{-- <div class="card" style="background-color: red"> --}}
                <div class="card p-4 g-col-6" style="background-color: red; width: 35vw;  ">
                    <div class="col-12 col-md-12 text-center">
                        <h1 class="card-title">{{$card['productName']}}</h1>
                        <p class="card-text">{{$card['status']}}</p>
                        <h1>{{$card['price']}}</h1>
                        <a href="" class="btn btn-primary">Buy</a>
                    </div>
                </div>
                @elseif ($card['status'] == 'SR')
                    <div class="card p-4 g-col-6" style="background-color: silver; width: 35vw;  ">
                        <div class="col-12 col-md-12 text-center">
                            <h1 class="card-title">{{$card['productName']}}</h1>
                            <p class="card-text">{{$card['status']}}</p>
                            <h1>{{$card['price']}}</h1>
                            <a href="" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                @elseif ($card['status'] == 'SSR')
                    <div class="card p-4 g-col-6" style="background-color: gold; width: 35vw;  ">
                        <div class="col-12 col-md-12 text-center">
                            <h1 class="card-title">{{$card['productName']}}</h1>
                            <p class="card-text">{{$card['status']}}</p>
                            <h1>{{$card['price']}}</h1>
                            <a href="" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                @endif

            {{-- <div class="card" style="width: 18rem;">
                <div class="col-4 col-md-4 text-center">
                    <h1 class="card-title">{{$card['productName']}}</h1>
                    <p class="card-text">{{$card['status']}}</p>
                    <h1>{{$card['price']}}</h1>
                    <a href="" class="btn btn-primary">Buy</a>
                </div>
            </div> --}}
        @endforeach
    </div>

</body>
</html>

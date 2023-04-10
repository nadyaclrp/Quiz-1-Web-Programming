@extends('onlineShop')
@section('viewTitle','Product')
@section('konten')
    <h2 class="text-center">Choose Your Item</h2>
    <div class="d-flex align-items-center flex-column">
        @foreach ($productCard as $card)
            @if ($card['status'] == 'R')
            {{-- @if ($status = 'R') --}}
                {{-- <div class="card" style="background-color: silver"> --}}
                <div class="card p-4 g-col-6 m-2" style="background-color: silver; width: 35vw;">
                    <div class="col-12 col-md-12 text-center">
                        <h1 class="card-title">{{$card['productName']}}</h1>
                        <p class="card-text">{{$card['status']}}</p>
                        <h1>{{$card['price']}}</h1>
                        <a href="" class="btn btn-primary">Buy</a>
                    </div>
                </div>
                @elseif ($card['status'] == 'SR')
                    <div class="card p-4 g-col-6 m-2" style="background-color: red; width: 35vw;  ">
                        <div class="col-12 col-md-12 text-center">
                            <h1 class="card-title">{{$card['productName']}}</h1>
                            <p class="card-text">{{$card['status']}}</p>
                            <h1>{{$card['price']}}</h1>
                            <a href="" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                @elseif ($card['status'] == 'SSR')
                    <div class="card p-4 g-col-6 m-2" style="background-color: gold; width: 35vw;  ">
                        <div class="col-12 col-md-12 text-center">
                            <h1 class="card-title">{{$card['productName']}}</h1>
                            <p class="card-text">{{$card['status']}}</p>
                            <h1>{{$card['price']}}</h1>
                            <a href="" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                @endif
        @endforeach
    </div>
@endsection

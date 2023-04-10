@extends('onlineShop')
@section('viewTitle','Product Detail')

@section('konten')
        <div class="d-flex justify-content-center m-auto">
            <div class="card p-4 g-col-6 m-2" style="background-color: silver; width: 35vw;">
                <div class="col-12 col-md-12 text-center">
                    <h1 class="card-title text-warning bg-dark">{{$tampungPrint['itemName']}}</h1>
                    <h2>Rp{{$tampungPrint['price']}}</h2>
                    <p class="card-text">{{$tampungPrint['desc']}}</p>
                    <p class="card-text">{{$tampungPrint['level']}}</p>
                </div>
            </div>
        </div>
@endsection

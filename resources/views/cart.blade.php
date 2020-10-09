@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('errors'))
        <div class="alert alert-danger w-1/2" role="alert">
            У вас недостаточно денег для покупки этого товара
        </div>
    @else
        <div class="alert alert-success w-1/2" role="alert">
            Успешная покупка
        </div>
    @endif
    @foreach($products as $product)
        <div class="card mx-auto mb-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">Цена товара: {{$product->amount}}</p>
                <a href="{{url("buy/{$product->id}")}}" class="btn btn-primary">Купить сейчас</a>
            </div>
        </div>
    @endforeach
@endsection

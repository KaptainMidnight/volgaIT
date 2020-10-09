@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($purchases as $purchase)
                <div class="col-sm-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$purchase->title}}</h5>
                            <p class="card-text">Цена всего: {{$purchase->amount}}₽</p>
                            <a href="{{url("cart/{$purchase->id}")}}" class="btn btn-primary">Добавить в корзину</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

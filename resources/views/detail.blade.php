@extends('layouts.app')

@section('content')
    <h1 class="text-center">Детали заказа №{{ $data->id }}</h1>
    <h2 class="text-center">Сумма заказа: {{ $data->amount }}</h2>
    <h2 class="text-center">Дата заказа: {{ $data->created_at }}</h2>
    <h2 class="text-center">Адрес: {{ $data->address }}</h2>
@endsection

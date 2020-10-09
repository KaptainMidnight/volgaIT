@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-4">Здравствуйте, {{$user->name}}</h1>
    <h2 class="text-center mt-4">Баланс: {{ $user->balance }}</h2>
    <h4 class="text-center my-4">Вот твои покупки:</h4>
    <p class="text-center">В итоге вы потратили: {{$sum}}₽</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Статус заказа</th>
                <th scope="col">Адрес</th>
                <th scope="col">Цена</th>
                <th scope="col">Дата отправки</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <th scope="row"><a href="{{ url("/detail/{$purchase->id}") }}">{{$purchase->id}}</a></th>
                    <td>{{$purchase->title}}</td>
                    <td>{{$purchase->status}}</td>
                    <td>{{$purchase->address}}</td>
                    <td>{{$purchase->amount}}</td>
                    <td>{{$purchase->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

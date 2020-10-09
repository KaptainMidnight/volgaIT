<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store($id)
    {
        (new Cart([
            'user_id' => Auth::id(),
            'purchase_id' => $id
        ]))->save();

        $products = Cart::query()->where('user_id', Auth::id())->get();

        return back(201);
    }

    public function index()
    {
        $products = Purchase::query()->whereIn('id', Cart::query()->where('user_id', Auth::id())->where('bought', false)->select('id')->get())->get();

        return view('cart', ['products' => $products])->with('success', 'Успешно добавленно в корзину');
    }
}

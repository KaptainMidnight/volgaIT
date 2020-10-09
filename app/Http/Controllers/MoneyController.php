<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Purchase;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoneyController extends Controller
{
    public function buy($id)
    {
        $product = Purchase::query()->find($id)->first();

        if ($product->amount > Auth::user()->balance) {
            return back()->with('errors', true);
        }
        User::query()->find(Auth::id())->first()->decrement('balance', $product->amount);

        Cart::query()->where('user_id', '=', Auth::id())->where('purchase_id', '=', $id)->delete();
        return back()->with('success', true);
    }
}

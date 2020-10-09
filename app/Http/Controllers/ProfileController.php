<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $purchases = Purchase::query()->where('user_id', Auth::id())->get();
        $sum = Purchase::query()->sum('amount');
        return view('profile', ['user' => Auth::user(), 'purchases' => $purchases, 'sum' => $sum]);
    }
}

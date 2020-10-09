<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        return view('detail', ['data' => Purchase::query()->findOrFail($id)]);
    }
}

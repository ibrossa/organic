<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        return response()->json(['id'=>$request->id]);
    }
}

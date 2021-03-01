<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $session_id = session()->getId();
        $cart = Cart::where('session_id', $session_id)->first();

        if($session_id = $cart ){

            $cart_items = CartItem::where('cart_id',$cart->id)->get();
        }
        else{
            $cart_items = null;
        }

        return view('cart',compact('cart_items'));
    }

    public function cart_add(Product $product)
    {
        $session_id = session()->getId();
        $cart = Cart::where('session_id', $session_id)->first();

        if(!isset($cart)) {

            $cart = new Cart();
            $cart->session_id = $session_id;
            $cart->save();
        }

        $cart_item = new CartItem();
        $cart_item->product_id = $product->id;
        $cart_item->cart_id = $cart->id;
        $cart_item->save();

        return redirect()->back();
    }
}

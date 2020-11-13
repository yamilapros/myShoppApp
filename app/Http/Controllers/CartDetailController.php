<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;

class CartDetailController extends Controller
{
    public function store(Request $request)
    {

        $cartDetail = new CartDetail();
        //A que carrito de compra pertenece este detalle
        //Un carrito activo por cada cliente
        $cartDetail->cart_id = auth()->user()->cart->id;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->save();

        return redirect('/home');
    }

    public function destroy(Request $request)
    {
        $cartDetail = CartDetail::find($request->cart_detail_id);
        $cartDetail->delete();
        return back();
    }
}
//cart_id
//product_id
//quantity 
//discount;
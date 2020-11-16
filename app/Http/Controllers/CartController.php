<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Mail\NewOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function update()
    {
        $client = auth()->user();
        $cart = auth()->user()->cart;
        $cart->status = 'Pending';
        $cart->order_date = Carbon::now();
        $cart->save();

        $admins = User::where('admin', true)->get();
        Mail::to($admins)->send(new NewOrder($client, $cart));

        return view('ready-order')->with('status', 'El pedido se ha realizado con éxito!, en breve recibirás un email.');
    }
}

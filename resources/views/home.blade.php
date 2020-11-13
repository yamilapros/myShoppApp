@extends('layouts.app')

@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Products</a></li>
            <li class="breadcrumb-item active">Mi Carrito</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-page-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>SubTotal</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <?php $total = 0; ?>
                                @foreach( auth()->user()->cart->details as $detail )
                                <tr>
                                    <td>
                                        <div class="img">
                                            <a href="#"><img src="{{ $detail->product->featured_image }}" alt="Image"></a>
                                            <a href="{{ url('/products/'.$detail->product->id) }}"><p>{{ $detail->product->name }}</p></a>
                                        </div>
                                    </td>
                                    <td>$ {{ $detail->product->price }}</td>
                                    <td>
                                        {{ $detail->quantity }}
                                        {{--  <div class="qty">
                                            <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                            <input type="text" value="1">
                                            <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                        </div>  --}}
                                    </td>
                                <?php $total = $total + ($detail->product->price*$detail->quantity) ?>
                                    <td>$ {{ $detail->product->price * $detail->quantity }}</td>
                                    <form action="{{ url('/cart') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">
                                        <td><button type="submit"><i class="fa fa-trash"></i></button></td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon">
                                <input type="text" placeholder="Coupon Code">
                                <button>Apply Code</button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-summary">
                                <div class="cart-content">
                                    <h1>Resumen de la compra</h1>
                                    {{--  <p>Sub Total<span>$99</span></p>  --}}
                                    {{--  <p>Descuento<span>$1</span></p>  --}}
                                    <h2>Total<span>$ {{$total}}</span></h2>
                                </div>
                                <div class="cart-btn">
                                    <form action="{{ url('/order') }}" method="post">
                                    @csrf
                                    <a class="btn" href="{{ url('/') }}"><i class="fa fa-angle-left"></i> Más productos</a>
                                    <button type="submit">Finalizar compra</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

@extends('layouts.app')

@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Products</a></li>
            <li class="breadcrumb-item active">Pedido realizado</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Cart Start -->
<div class="cart-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <h3>Tu pedido se ha realizado con éxito!. Nos pondremos en contacto contigo vía email. Gracias!.</h3>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

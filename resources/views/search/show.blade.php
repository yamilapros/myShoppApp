@extends('layouts.app')
@section('content')
<div class="container text-center mt-3 mb-5">
    <h1>Se encontraron {{ $products->count() }} resultados para la búsqueda {{ $query }}.</h1>
</div>
<div class="product-view">
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="product-item">
                <div class="product-title">
                    <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                    
                    <div class="ratting">
                        <a href="">{{ $product->category_name }}</a>
                    </div>
                </div>
                <div class="product-image">
                    <a href="product-detail.html">
                        <img src="{{ $product->featured_image }}" alt="Product Image">
                    </a>
                    {{-- <div class="product-action">
                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                    </div> --}}
                </div>
                <div class="product-price">
                    <h3><span>$</span>{{ $product->price }}</h3>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
</div>     
       
        
      
@endsection

@extends('layouts.app')
@section('content')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Categorías</a></li>
            <li class="breadcrumb-item active">{{ $category->name }}</li>
        </ul>
    </div>
    <div class="container text-center mt-3 mb-5">
        <h1>{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>
        <img src="{{ $category->featured_image }}" alt="">
    </div>
</div>
<!-- Breadcrumb End -->
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

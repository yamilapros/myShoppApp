@extends('layouts.app')
@section('content')
<!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Productos</a></li>
                    <li class="breadcrumb-item active">{{ $product->name }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        @foreach($product->images as $image)
                                        <img src="{{ $image->url }}" alt="Product Image">
                                        @endforeach
                                        
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        @foreach($product->images as $image)
                                            <div class="slider-nav-img"><img src="{{ $image->url }}" alt="Product Image"></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>{{ $product->name }}</h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4>Price:</h4>
                                            <p>$ {{ $product->price }}</p>
                                        </div>
                                        <div class="quantity">
                                            <h4>Quantity:</h4>
                                            <div class="qty">
                                        <form action="{{ url('/cart') }}" method="post">
                                            @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                {{--  <button class="btn-minus"><i class="fa fa-minus"></i></button>  --}}
                                                <input type="number" value="1" name="quantity">
                                                {{--  <button class="btn-plus"><i class="fa fa-plus"></i></button>  --}}
                                            </div>
                                        </div>
                                        <div class="action">
                                            <button type="submit" class="btn" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="col-md-4">
                        <div id="description" class="container tab-pane active">
                            <h4>Descripción</h4>
                            <p>{{ $product->long_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="{{--  img/brand-1.png  --}}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
@endsection

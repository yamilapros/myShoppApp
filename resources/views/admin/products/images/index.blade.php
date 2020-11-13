@extends('layouts.app-admin')
@section('style')
<style>
    @supports(object-fit: cover){
        .card img{
          height: 100%;
          object-fit: cover;
          object-position: center center;
        }
    }
    .card img{
        width: 100%;
        height: auto;
    }
    
</style>
@endsection

@section('content')
<h2 class="mb-5">Imágenes del producto "{{ $product->name }}"</h2>
@include('partials.alert')
<div class="row">
    <div class="col-md-9">
        <form action="{{ url('/admin/products/'.$product->id.'/images') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" class="@error('image') is-invalid @enderror" name="image">
                <button class="btn btn-primary" type="submit" role="button"><i class="fa fa-plus"></i> Subir Imagen</button>
                
                @error('image')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
            </div>
        </form>
    </div>
    
    {{--  <div class="col-md-3">
        
            
    </div>  --}}
    <div class="col-md-3">
        <a class="btn btn-secondary" href="{{ url('/admin/products') }}" role="button"><i class="fa fa-arrow-left"></i> Volver</a>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-2">
        @foreach($images as $image)
            <div class="col mb-4">
                <div class="card card-style">
                <img src="{{ $image->url }}" alt="...">
                <form action="{{ url('admin/products/'.$product->id.'/images') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="image_id" value="{{ $image->id }}">
                    <button type="submit" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></button>
                    @if($image->featured == true)
                    <button class="btn btn-primary btn-sm"><i class="fa fa-heart"></i></button>
                    @else
                    <a href="{{ url('/admin/products/'.$product->id.'/images/featured/'.$image->id) }}" class="btn btn-secondary btn-sm"><i class="fa fa-heart"></i></a>
                    @endif
                </form>
                </div>
                
            </div>
        @endforeach
    </div>
</div>

@endsection


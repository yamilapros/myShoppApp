@extends('layouts.app-admin')
@section('title', 'Añadir producto')

@section('content')
<h2>Editar producto</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('admin/products/'.$product->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}">
                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                        @if($category->id == $product->category_id) selected @endif
                        >{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="price">Precio</label>
                  <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}">
                  @error('price')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="long_description">Descripción larga</label>
                    <textarea class="form-control @error('long_description') is-invalid @enderror" name="long_description" rows="3">{{ $product->long_description }}</textarea>
                    @error('long_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    
</div>
  
@endsection


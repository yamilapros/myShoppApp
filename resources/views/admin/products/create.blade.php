@extends('layouts.app-admin')
@section('title', 'Añadir producto')

@section('content')
<h2>Añadir nuevo producto</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('admin/products/') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                  <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                  @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="long_description">Descripción larga</label>
                    <textarea class="form-control  @error('long_description') is-invalid @enderror" name="long_description" rows="3"></textarea>
                    @error('long_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    
</div>
  
@endsection


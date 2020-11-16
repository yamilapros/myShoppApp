@extends('layouts.app-admin')
@section('title', 'Añadir producto')

@section('content')
<h2>Editar categoría</h2>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('admin/categories/'.$category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="name">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}">
                  @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $category->description }}">
                    @error('description')
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


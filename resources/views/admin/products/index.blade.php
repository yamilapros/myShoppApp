@extends('layouts.app-admin')


@section('content')
<h2>Productos</h2>
<hr>
@include('partials.alert')
<a class="btn btn-primary" href="{{ url('/admin/products/create') }}" role="button"><i class="fa fa-plus"></i> Añadir producto</a>
<table class="table table-hover table-sm mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoría</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <form action="{{ url('/admin/products/'.$product->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{ url('products/'.$product->id) }}" target="_blank" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                <a href="{{ url('admin/products/'.$product->id.'/images') }}" class="btn btn-warning btn-sm"><i class="fa fa-image"></i></a>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="text-center">{{ $products->links() }}</div>
  
@endsection


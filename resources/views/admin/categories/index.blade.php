@extends('layouts.app-admin')


@section('content')
<h2>Categorías</h2>
<hr>
@include('partials.alert')
<a class="btn btn-primary" href="{{ url('/admin/categories/create') }}" role="button"><i class="fa fa-plus"></i> Añadir categoría</a>
<table class="table table-hover table-sm mt-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $key => $category)
      <tr>
        <th scope="row">{{ ($key+1) }}</th>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td>
            <form action="{{ url('/admin/categories/'.$category->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{ url('admin/categories/'.$category->id.'/edit') }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  
@endsection


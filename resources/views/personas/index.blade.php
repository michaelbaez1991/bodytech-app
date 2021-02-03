@extends('layout')

@section('content')
<br>
<a href="personas/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4 text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">identificación</th>
      <th scope="col">Tipo identificación</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($personas as $persona)
    <tr>
        <td>{{$persona->id}}</td>
        <td>{{$persona->identificacion}}</td>
        <td>{{$persona->tipo_identificacion}}</td>
        <td>{{$persona->primer_nombre.' '.$persona->segundo_nombre}}</td>
        <td>{{$persona->primer_apellido.' '.$persona->segundo_apellido}}</td>
        <td>{{$persona->direccion}}</td>
        <td>{{$persona->telefono}}</td>
        <td>
         <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
          <a href="/personas/{{$persona->id}}/edit" class="btn btn-info btn-sm">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
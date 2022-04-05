@extends('Saludos')
@section('Content')
<h1 class= "text-center">Tabla de Registros</h1>
<div class="container w-50  p-4 mt-10 text-center">
<div class="row row-cols-1 row-cols-md-3 g-4">
<table class="table table-striped table-hover bg-success p-2 text-dark bg-opacity-10 mt-4">
 
  <head>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nombre</th>
      <th scope="col">AP PATERNO</th>
      <th scope="col">AP MATERNO</th>
      <th scope="col">FECHA NACIMIENTO</th>
      <th scope="col">EDAD</th>
      <th scope="col">CARRERA</th>
      <th scope="col">MATRICULA</th>
      <th scope="col">FUNCION</th>
  </tr>
</head>
    <tbody>
  @foreach ($alumnos as $Al)
  <tr>
    <td> <img src="{{str_replace('public','storage',$Al->foto) }}" class="card-img-top" alt="..."> </td>
    <td>{{$Al->Nombre}}</td>
    <td>{{$Al->Apellido_Paterno}}</td>
    <td>{{$Al->Apellido_Materno}}</td>
    <td>{{$Al->Fecha_Nacimiento}}</td>
    <!--para calcular la fechha-->
    <td>{{(new DateTime($Al->Fecha_Nacimiento))->diff(new DateTime("now"))->y }}</td>
    
    <td>{{$Al->Carrera}}</td>
    <td>{{$Al->Matricula}}</td>

    <td>
     <div class="row">
      <div class="col">
      <form action="{{route('eliminar-alumno',[$Al->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="sumit" class="btn btn-danger btn-sm">Eliminar</button>
    </form>
      </div>
      <div class="col">
      <form action="{{route('alumnos-show',[$Al->id])}}" method="POST">
        @method('GET')
        @csrf
        <button type="sumit" class="btn btn-primary btn-sm">Actualizar</button>
    </form>
      </div>
  </div>

    </td>
  </tr>
  @endforeach
 </tbody>
 </table>

</div>
</div>
@endsection
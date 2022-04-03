@extends('Saludos')
@section('Content')

<div class="container w-25 border p-4 mt-4"> 
<form action="{{route('alumno-update',[$alumnos->id])}}" method="POST"> 
  @csrf
  @method('PATCH')
  @if(session('success'))
  <h6 class="alert alert-success">{{session('success')}}</h6>
  @endif
  @error('Alumnos')
  <h6 class="alert alert-danger">{{$message}}</h6>
  @enderror

  <div class="mb-3">
    <label for="Matricula" class="form-label">Matricula</label>
    <input type="int" class="form-control" name="Matricula" value="{{$Alumnos->Matricula}}">

    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{$Alumnos->Nombre}}">

    <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{$Alumnos->ApellidoPaterno}}">

    <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{$Alumnos->ApellidoMaterno}}">

    <label for="FechaNacimiento" class="form-label">Fecha Nacimiento</label>
    <input type="datetime" class="form-control" name="FechaNacimiento" value="{{\Carbon\Carbon::parse($Alumnos->FechaNacimiento)->format('Y-m-d')}}">

    <label for="Carrera" class="form-label">Carrera</label>
    <input type="text" class="form-control" name="Carrera" value="{{$Alumnos->Carrera}}">

  </div>
  <button type="submit" class="btn btn-success d-grid gap-2 col-6 mx-auto" >Actualizar Alumno</button>
</form>

</div>
@endsection
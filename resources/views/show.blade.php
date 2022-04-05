@extends('Saludos')
@section('Content')

<div class="container w-25 border p-4 mt-4"> 
<form action="{{route('alumno-update',[$Alumnos->id])}}" method="POST" accept-charset="UTF-8"  enctype="multipart/form-data">   
  @csrf
  @method('PATCH')
  @if(session('success'))
  <h6 class="alert alert-success">{{session('success')}}</h6>
  @endif
  @error('Alumnos')
  <h6 class="alert alert-danger">{{$message}}</h6>
  @enderror

  <div class="mb-3">
    <label for="Matricula" class="form-label">Matricula:</label>
    <input type="int" class="form-control" name="Matricula"  value="{{$Alumnos->Matricula}}">

    <label for="Nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="Nombre" value="{{$Alumnos->Nombre}}">

    <label for="ApPaterno" class="form-label">Apellido Paterno:</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{$Alumnos->Apellido_Paterno}}">

    <label for="ApMaterno" class="form-label">Apellido Materno:</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{$Alumnos->Apellido_Materno}}">
    
   
    <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
    <input type="date" class="form-control" name="FechaNacimiento" value="{{$Alumnos->Fecha_Nacimiento}}" >

    <label for="Carrera" class="form-label">Carrera:</label>
    <input type="text" class="form-control" name="Carrera" value="{{$Alumnos->Carrera}}">

    <label for="Foto" class="form-label">Foto:</label>
    <input type="file" class="form-control" name="Foto_alumno" value="{{$Alumnos->foto}}">

  </div>
  
  <button type="submit" class="btn btn-success d-grid gap-2 col-6 mx-auto" >Actualizar Alumno</button>

  </form>


</div>
@endsection
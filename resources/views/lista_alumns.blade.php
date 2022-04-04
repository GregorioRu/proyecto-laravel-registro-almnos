@extends('Saludos')
@section('Content')
<div class="container w-50  p-4 mt-10 text-center">
<div class="row row-cols-1 row-cols-md-3 g-4">
  
  
  @foreach ($alumnos as $Al)
               
  <div class="col">
    <div class="card">
        
      <img src="{{str_replace('public','storage',$Al->foto) }}" class="card-img-top" alt="...">
      <div class="card-body text-dark bg-light">
        <h5 class="card-title">{{$Al->Nombre}}</h5>
        <p class="card-title">{{$Al->Matricula}}</p>
        <p class="card-title">{{$Al->Apellido_Paterno}}</p>
        <p class="card-title">{{$Al->Apellido_Materno}}</p>
        <p class="card-title">{{$Al->Fecha_Nacimiento}}</p>
        <p class="card-title">{{$Al->Carrera}}</p>
   
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
        <button type="sumit" class="btn btn-success btn-sm">Actualizar</button>
    </form>
      </div>
  </div>
    
    
    

        
        
      </div>
    </div>
  </div>     
               
    @endforeach

</div>
</div>
@endsection
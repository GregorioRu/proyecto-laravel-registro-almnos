@extends('Saludos')
@section('Content')
<div class="container w-50  p-4 mt-10 text-center">
<div class="row row-cols-1 row-cols-md-3 g-4">
  
  
  @foreach ($alumnos as $Al)
               
  <div class="col">
    <div class="card">
        
      <img src="{{str_replace('public','storage',$Al->foto) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">{{$Al->Nombre}}</h4>
        <h5 class="card-title">{{$Al->Matricula}}</h5>
        <h5 class="card-title">{{$Al->Apellido_Paterno}}</h5>
        <h5 class="card-title">{{$Al->Apellido_Materno}}</h5>
        <h5 class="card-title">{{$Al->Fecha_Nacimiento}}</h5>
        <h5 class="card-title">{{$Al->Carrera}}</h5>

        
      </div>
    </div>
  </div>     
               
            @endforeach

</div>
</div>
@endsection
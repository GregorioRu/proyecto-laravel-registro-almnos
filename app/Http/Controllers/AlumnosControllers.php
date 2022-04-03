<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\Log;

class AlumnosControllers extends Controller
{
    //
    public function store(Request $request){
       // $request->validate([
            //'Alumnos'=>'required|min:5'
        //]);
        $alumno=new Alumno();
        $alumno->foto='';
        Log::info('evaluando foto');
        Log::info($request->all());
        //if ($request->hasFile('Foto')) {
            $file = $request->file('Foto_alumno');
            $path = $file->store('public');
           // $path = $file->path();
            $alumno->foto=$path;
        //}else{dd("no se subio");}
        
        $alumno->Matricula=$request->Matricula;
        $alumno->Nombre=$request->Nombre;
        $alumno->Apellido_Paterno=$request->ApellidoPaterno;
        $alumno->Apellido_Materno=$request->ApellidoMaterno;
        $alumno->Fecha_Nacimiento=$request->FechaNacimiento;
        $alumno->Carrera=$request->Carrera;
        $alumno->save();
        return redirect()->route('Alumnos')->with('success','Alumno agregado correctamente');
    }

    public function index(){
        $Alumnos=Alumno::all();
        return view('index',compact('Alumnos'));
    }
    public function show($id){
        $Alumnos=Alumno::find($id);
       
        return view('show',['Alumnos'=>$Alumnos]);
    }
    public function update(Request $request, $id){
        $modificarAlumno=Alumno::find($id);
        $modificarAlumno->Matricula=$request->Matricula;
        $modificarAlumno->Nombre=$request->Nombre;
        $modificarAlumno->ApellidoPaterno=$request->ApellidoPaterno;
        $modificarAlumno->ApellidoMaterno=$request->ApellidoMaterno;
        $modificarAlumno->FechaNacimiento=$request->FechaNacimiento;
        $modificarAlumno->Carrera=$request->Carrera;
        $modificarAlumno->save();
        return redirect()->route('Alumnos')->with('success',"Alumno actualizado");
    }
    public function destroy($id){
        $eliminarAlumno=Alumno::find($id);
        $eliminarAlumno->delete();
        return redirect()->route('Alumnos')->with('success',"Alumno eliminado");

    }
}

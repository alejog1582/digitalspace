<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Http\Requests\EmpleadoRequest;

class EmpleadoController extends Controller
{
    public function new(EmpleadoRequest $request){

        $empleado = Empleado::create([
			'nombre' => $request->input('nombre'),
			'email' => $request->input('email'),
			'sexo' => $request->input('sexo'),
			'area' => $request->input('area'),
			'boletin' => $request->input('boletin'),
			'descripcion' => $request->input('descripcion'),			
        ]);

        
        $empleado->save();

        return view('empleadonew', [
            'empleado' => $empleado,
        ]);
    }
    
    public function empleados(Request $request){

        $empleados = Empleado::all();
        
        return view('empleados', [
            'empleados' => $empleados,
        ]);
    }
    
    public function editar($id){

        $empleado = Empleado::find($id);
        
        return view('empleadoedit', [
            'empleado' => $empleado,
        ]);
    }

    public function actualizar(EmpleadoRequest $request){

        $id_empleado = $request->id_empleado;
        $empleado = Empleado::find($id_empleado);

        $empleado->nombre = $request->nombre;
        $empleado->email = $request->email;
        $empleado->sexo = $request->sexo;
        $empleado->area = $request->area;
        $empleado->boletin = $request->boletin;
        $empleado->descripcion = $request->descripcion;

        $empleado->save();

        return view('empleadonew', [
            'empleado' => $empleado,
        ]);
    }

    public function eliminar($id){

        $empleado = Empleado::find($id);
        
        $empleado->delete();
        
        return view('eliminado');
    }
}

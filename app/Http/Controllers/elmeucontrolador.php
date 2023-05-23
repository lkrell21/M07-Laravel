<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\texemple;
use Illuminate\Database\Eloquent\Model;

class elmeucontrolador extends Controller
{
    public function formularibuscar ()
    {
        $todo= texemple::all();
        return view('buscar',['todos.buscar'=>$todo]);
    }

    public function buscar (Request $request)
    {
        $request->validate(
            [
                'nombre'=>'required'
            ],
            [
            'nombre.required'=>'El nombre es obligatorio'            
            ]            
        );
       
        $nombre=$request->nombre;
        //dd($nombre); //comprova informació en el SGBD
        $todo=texemple::where('nom','like',"%$nombre%")->paginate(10);        
        return view('mostrarresul', compact('todo'));        
    }


    public function insert (Request $request)
    {
        $request->validate(
            [
                'nombre'=>'required|min:3',
                'email' => 'required|email',
                'contrasenya' => 'required|min:6'
            ],
            [
                'nombre.required'=>'El nombre es obligatorio',
                'nombre.min'=>'El nombre debe tener al menos 3 caracteres',
                'email.required' => 'El correu electrònic és obligatori',
                'email.email' => 'El correu electrònic no té un format vàlid',
                'contrasenya.required' => 'La contrasenya és obligatòria',
                'contrasenya.min' => 'La contrasenya ha de tenir com a mínim 6 caràcters',
                
            ]
            );
            $todo=new texemple();
            $todo->nombre=$request->nombre;
            $todo->email = $request->email;
            $todo->contrasenya = $request->contrasenya;
            $todo->save();
            return redirect()->route('inici')->with('sucess','creat correctament');
    }

    public function formulari ()
    {
        $todo = texemple::all();
        return view('index',['todos.index'=>$todo]);
    }

    public function mostrar()
    {
        $todo= texemple::all();
        //return $todo;
        return view('mostrar', compact('todo'));    


    }

}

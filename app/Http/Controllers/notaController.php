<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nota;
use App\Models\Categoria;

class notaController extends Controller
{
    public function index(){
        //$notas = nota::All(); para mostrarlos a todos

        $notas = nota::paginate(10);
        return view("listaDeNotas")->with('notas', $notas);
    }

    public function vernota($id){
        $nota = nota::findOrFail($id);
        return view('notaUnica')->with('nota', $nota);
    }



    public function crear(){
        return view('formularioNota');
    }

    public function guardar(Request $request){
        $request->validate([
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);

        $nuevaNota = new nota();

        $nuevaNota->titulo= $request->input('titulo');
        $nuevaNota->descripcion = $request->input ('descripcion');
        $nuevaNota['feche_creacion'] = now();
        $creado = $nuevaNota->save();

        if($creado){
            return redirect()->route('notas.index')
            ->with('mensaje', '¡Nota creada correctamente!');
        }
    }

    public function edit($id){
        $nota = nota::findOrFail($id);
        return view('formularioNota')-> with('nota', $nota);//le pasamos la nota individual

    }

    public function eliminar($id){
        nota::destroy($id);
        //redirigir
       return redirect('/notas')->with('mensaje','Eliminado correctamente');
    }

    public function notasPorCategoria()
{
    $categoriasConNotas = Categoria::with('notas')->get();

    return view('categoriasnotas', compact('categoriasConNotas'));
}

}

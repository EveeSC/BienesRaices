<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    //
    public function index(){
        $propiedades = Propiedad::all(); //metodo que devuelve todos los registros de labase
        // echo $propiedades;
        return view('home', compact('propiedades'));
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        // echo $request;
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color=$request->input('color');
        $nvaPropiedad->metros=$request->input('metros');
        $nvaPropiedad->tipoPropiedad=$request->input('tipopropiedad');
        $nvaPropiedad->costoxmtr=$request->input('costoxmtr');
        $nvaPropiedad->codigoDuenio=$request->input('codigoduenio');
        $nvaPropiedad->domicilio=$request->input('domicilio');
        $nvaPropiedad->save();

        $propiedades = Propiedad::all();

        return redirect('/');

    }

    public function editar($id){
        //recupera ese objeto que ya existe
        //creando un objeto igual a el modelo, este modelo esta mapeando a una tabla de objetos en la base 
        $propiedad = Propiedad::find($id);
        //con find trae el registro del id 
        // echo $propiedad;
        return view('editar', compact('propiedad'));
    }

    public function actualizar(Request $request, $id){
        //recuperar el objeto o hacer consulta en base al id y asi mandarlo a la vista y poderlo edutar
        $nvaPropiedad = Propiedad::find($id);
        $nvaPropiedad->color=$request->input('color');
        $nvaPropiedad->metros=$request->input('metros');
        $nvaPropiedad->tipoPropiedad=$request->input('tipopropiedad');
        $nvaPropiedad->costoxmtr=$request->input('costoxmtr');
        $nvaPropiedad->codigoDuenio=$request->input('codigoduenio');
        $nvaPropiedad->domicilio=$request->input('domicilio');
        $nvaPropiedad->save();
        return redirect('/');
        //como el registro ya existe 
    }

    public function eliminar($id){
        //recuperar el archivo con unid
        // $propiedad = Propiedad::where('color' , $id);
        //me va a devolver todas las propiedades donde color sea igual al valor que le estoy pasando 
        $propiedad = Propiedad::find($id);
        return view('eliminarPropiedad', compact('propiedad'));
    }

    public function destroy($id){
        $propiedad = Propiedad::find($id);
        $propiedad->delete();
        return redirect('/');
    }
}

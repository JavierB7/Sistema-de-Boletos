<?php

namespace SistemaBoletos\Http\Controllers;

use Illuminate\Http\Request;
use SistemaBoletos\Boleto;
use SistemaBoletos\Usuario;
use Illuminate\Support\Facades\Redirect;
use SistemaBoletos\Http\Requests\BoletoFormRequest; 
use DB;

class BoletosController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
    	if($request){
    		//$query=trim($request->get('searchText'));
    		$boletos= DB::table('boletos')->orderBy('id')->get();
    		//return view('profesor.evaluacion.index', ['evaluaciones'=>$evaluaciones,'searchText'=>$query]);
    		return view('index', ["boletos"=>$boletos]);
    	}
    }
    public function crear(){
        return view('usuario.create');
    }


    public function create(){
    	return view('usuario.create');
    }

    public function store(BoletoFormRequest $request){
    	$boleto = new Boleto;
    	$boleto->serial = $request->get('serial');
    	$boleto->evento = $request->get('evento');
    	$boleto->fecha = $request->get('fecha');
    	$boleto->ubicacion = $request->get('ubicacion');
    	$boleto->usuario = $request->get('usuario'); //Para decirle activa de una
    	$boleto->save();
    	//return Redirect::to("usuario.comprado");
        return view('usuario.creado', [
            'serial' => $boleto->serial,
            'evento' => $boleto->evento,
            'fecha' => $boleto->fecha,
            'ubicacion' => $boleto->ubicacion,
            'usuario' => $boleto->usuario
        ]);
    }

    public function show($id){
        //return view('profesor.evaluacion.show', ["evaluacion"=>Evaluacion::findOrFail($id)]);
        return view('admin.destroyBoleto', ["boleto"=>Boleto::findOrFail($id)]);
    }

     public function mostrar(Request $request){
        $id = $request->get('id');
        $boleto = Boleto::findOrFail($id);
        return view('admin.detallesBoleto')->with('boleto', $boleto);
    }

     public function edit($id){
        return view('admin.editarBoleto', ["boleto"=>Boleto::findOrFail($id)]);
    } 

    public function update(BoletoFormRequest $request, $id){
        $boleto = Boleto::findOrFail($id);
        $boleto->serial = $request->get('serial');
        $boleto->evento = $request->get('evento');
        $boleto->fecha = $request->get('fecha');
        $boleto->ubicacion = $request->get('ubicacion');
        $boleto->usuario = $request->get('usuario');
        $boleto->update();

        $usuarios= DB::table('usuarios')->orderBy('id')->get();
        $boletos= DB::table('boletos')->orderBy('id')->get();
                    
        return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos])->with('usuario', $request->post('usuario'));
    }  

     public function destroy($id){
        $boleto = Boleto::findOrFail($id);
        $boleto->delete();
        $usuarios= DB::table('usuarios')->orderBy('id')->get();
        $boletos= DB::table('boletos')->orderBy('id')->get();
                    
        return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos]);
    }

}

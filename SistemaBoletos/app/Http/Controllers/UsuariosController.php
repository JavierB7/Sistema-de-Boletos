<?php

namespace SistemaBoletos\Http\Controllers;

use Illuminate\Http\Request;
use SistemaBoletos\Usuario;
use SistemaBoletos\Boleto;
use Illuminate\Support\Facades\Redirect;
use SistemaBoletos\Http\Requests\UsuarioFormRequest; 
use DB;

class UsuariosController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
    	if($request){
    		//$query=trim($request->get('searchText'));
    		$usuarios= DB::table('usuarios')->orderBy('id')->get();
    		//return view('profesor.evaluacion.index', ['evaluaciones'=>$evaluaciones,'searchText'=>$query]);
    		return view('usuario.index', ["usuarios"=>$usuarios]);
    	}
    }

     public function show($id){
        //return view('profesor.evaluacion.show', ["evaluacion"=>Evaluacion::findOrFail($id)]);
        return view('admin.destroy', ["usuario"=>Usuario::findOrFail($id)]);
    }

    public function mostrar(Request $request){
        $id = $request->get('id');
        $usuario = Usuario::findOrFail($id);
        return view('admin.detalles')->with('usuario', $usuario);
    }

   

    public function create(){
    	return view('usuario.create');
    }

    public function inicio(){
        $usuarios= DB::table('usuarios')->orderBy('id')->get();
        $boletos= DB::table('boletos')->orderBy('id')->get();
                    
        return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos]);
    }
    
    
    public function store(UsuarioFormRequest $request){
    	$usuario = new Usuario;
    	$usuario->nombres = $request->get('nombres');
    	$usuario->apellidos = $request->get('apellidos');
    	$usuario->cedula = $request->get('cedula');
    	$usuario->direccion = $request->get('direccion');
        $usuario->sexo = $request->get('sexo');
        $usuario->telefono = $request->get('telefono');
        $usuario->email = $request->get('email');
        $usuario->usuario = $request->get('usuario');
        $usuario->password = $request->get('password');
        $usuario->admin = '0';
    	$usuario->save();
    	return Redirect::to("/");
    }
    public function iniciar(){
        return view('usuario.login');
    }

    public function login(Request $request){
        $usuarios= DB::table('usuarios')->orderBy('id')->get();

        foreach ($usuarios as $user) {
            if(($user->usuario == $request->post('usuario')) && 
                ($user->password == $request->post('password'))){
                $id = $user->admin;
                if($id=='1'){
                    $usuarios= DB::table('usuarios')->orderBy('id')->get();
                    $boletos= DB::table('boletos')->orderBy('id')->get();
                    
                    return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos])->with('usuario', $request->post('usuario'));
                }else{
                    return view('usuario.inicio')->with('usuario', $request->post('usuario'));
                }
            }
            
        }
        
        
        
    }
    public function edit($id){
        return view('admin.edit', ["usuario"=>Usuario::findOrFail($id)]);
    } 

    public function update(UsuarioFormRequest $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->nombres = $request->get('nombres');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->cedula = $request->get('cedula');
        $usuario->direccion = $request->get('direccion');
        $usuario->sexo = $request->get('sexo');
        $usuario->telefono = $request->get('telefono');
        $usuario->email = $request->get('email');
        $usuario->usuario = $request->get('usuario');
        $usuario->password = $request->get('password');
        $usuario->admin = '0';
        $usuario->update();
         $usuarios= DB::table('usuarios')->orderBy('id')->get();
        $boletos= DB::table('boletos')->orderBy('id')->get();
                    
        return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos]);
    }  

  /*  
    public function show($id){
    	//return view('profesor.evaluacion.show', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    	return view('profesor.evaluacion.destroy', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    }
    
    public function edit($id){
    	return view('profesor.evaluacion.edit', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    } 

    public function update(EvaluacionFormRequest $request, $id){
    	$evaluacion = Evaluacion::findOrFail($id);
    	$evaluacion->nombre_eval = $request->get('nombre_eval');
    	$evaluacion->fecha_eval = $request->get('fecha_eval');
    	$evaluacion->cant_puntos = $request->get('cant_puntos');
    	$evaluacion->num_parcial = $request->get('num_parcial');
    	$evaluacion->activa = $request->get('activa');
    	$evaluacion->update();
    	return Redirect::to("home");
    }  
}*/

    public function destroy($id){
    	$usuario = Usuario::findOrFail($id);
    	$usuario->delete();
    	$usuarios= DB::table('usuarios')->orderBy('id')->get();
        $boletos= DB::table('boletos')->orderBy('id')->get();
                    
        return view('admin.inicio', ["usuarios"=>$usuarios, "boletos"=>$boletos]);
    }

   /* public function listarEstudiantes(){
        // $evaluacion = Evaluacion::findOrFail($id);
        //$evaluacion = $id;
        //$num_parcial = $evaluacion->num_parcial;

        //$estudiantes= DB::table('estudiantes')->where('num_parcial','=', $num_parcial)->orderBy('idestudiantes')->get();
        $estudiantes= DB::table('estudiantes')->orderBy('idestudiantes')->get();
        return view('profesor.evaluacion.listar', ["estudiantes"=>$estudiantes]);
    */
}

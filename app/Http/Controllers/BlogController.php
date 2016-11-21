<?php

namespace App\Http\Controllers;
date_default_timezone_set('America/Mexico_City');
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Input;
use DateTime;
use Auth;
use App\Blog; 
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
class BlogController extends Controller
{

	public function crearBlogVista() {
    	return view('crearBlogVista');
    }

    public function insertarBlog() {
    	//dd(Input::all());
    	$user = Auth::User();
    	$datos = Input::all();
    	$now = new DateTime();
    	//DB::table('Blog')->insert(
    	//	['title' => $datos['title'], 'summary' => $datos['summary'], 'idUser' => $datos['idUser'], 'content' => $datos['content'], 'category' => 'comida mexicana', 'created_at' => $now->format('Y-m-d H:i:s')]
    	//);
    	$modelo = new Blog;
    	$modelo->title = $datos['title'];
    	$modelo->summary = $datos['summary'];
    	$modelo->idUser = $user->id;
    	$modelo->content = $datos['content'];
    	$modelo->category = 'comida mexicana';
    	$modelo->save();
    	$vista = $this->mostrarLobby();
    	return $vista;
    }

    public function borrarBlog($data) {
    	$modelo = Blog::find(7);
    	$modelo->delete();
    	//echo $data;


    }

    public function mostrarLobby() {
    	$recetas = DB::table('Blog')->get();
    	return view('lobby', ['recetas' => $recetas]);
    }

    public function mostrarListado() {
    	$recetas = DB::table('Blog')->get();
    	return view('listadoRecetas', ['recetas' => $recetas]);
    }

    public function mostrarDetalle($idBlog) {
    	$modelo = Blog::find($idBlog);
    	return view('detalleBlog', ['blog' => $modelo]);
    }

    public function actualizarBlog($id) {
    	$modelo = Blog::find($id);
    	$datos = Input::all();
    	if(isset($datos['title']) || $datos['title'] != ' ') {
    		$modelo->title = $datos['title'];
    	}

    	$modelo->save();
    	echo $id;
    }
}

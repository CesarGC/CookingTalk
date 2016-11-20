<?php

namespace App\Http\Controllers;
date_default_timezone_set('America/Mexico_City');
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Input;
use DateTime;
use App\Blog; 

class BlogController extends Controller
{

	public function crearBlogVista() {
    	return view('crearBlogVista');
    }

    public function insertarBlog() {
    	//dd(Input::all());
    	$datos = Input::all();
    	echo $datos['title'];
    	$now = new DateTime();
    	//DB::table('Blog')->insert(
    	//	['title' => $datos['title'], 'summary' => $datos['summary'], 'idUser' => $datos['idUser'], 'content' => $datos['content'], 'category' => 'comida mexicana', 'created_at' => $now->format('Y-m-d H:i:s')]
    	//);
    	$modelo = new Blog;
    	$modelo->title = $datos['title'];
    	$modelo->summary = $datos['summary'];
    	$modelo->idUser = $datos['idUser'];
    	$modelo->content = $datos['content'];
    	$modelo->category = 'comida mexicana';
    	$modelo->save();
    	$vista = $this->mostrarListado();
    	return $vista;
    }

    public function borrarBlog() {
    	echo 'borrarBlog';
    }

    public function mostrarListado() {
    	$recetas = DB::table('Blog')->get();
    	return view('listadoRecetas', ['recetas' => $recetas]);
    }
}

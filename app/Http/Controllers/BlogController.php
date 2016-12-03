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
use App\Comment; 
use App\Categoria; 
use App\Users;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Http\Response;
class BlogController extends Controller
{

	public function crearBlogVista() {
        $categoria = Categoria::all();
        return view('crearBlogVista', ['categoria' => $categoria]);
    }

    public function insertarBlog() {
    	//dd(Input::all());
     $user = Auth::User();
     $datos = Input::all();
     $now = new DateTime();
     $modelo = new Blog;
     $categoria = (int)$datos['idCategory'];
     $categoria++;
     $modelo->title = $datos['title'];
     $modelo->summary = $datos['summary'];
     $modelo->idUser = $user->id;
     $modelo->content = $datos['content'];
     $modelo->idCategoria = $categoria;

       //$modelo->category = 'comida mexicana';
     $modelo->save();
     $vista = $this->mostrarLobby();
     return $vista;
       //echo var_dump($datos);
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
     $user = Auth::User();
    if($modelo) {
        $comments = Blog::find($idBlog)->comments;
        foreach ($comments as $comment) {
          $user = Comment::find($comment['idUser'])->user;
          $comment->{"nombreUsuario"} = $user['name'];
          $comment->{"avatar"} = $user['avatar'];
      }

      $modelo->{"comments"} = $comments;
    	//echo $modelo;
      if(isset($user)) {
        return view('detalleBlog', ['blog' => $modelo, 'usuario' =>$user]);
    } else {
        return view('detalleBlog', ['blog' => $modelo]);
    }

} else {
    return view('lobby');
}

}

public function editarDetalle($data) {
 $modelo = Blog::find($data);
 return view('editarBlogVista', ['blog' => $modelo]);
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

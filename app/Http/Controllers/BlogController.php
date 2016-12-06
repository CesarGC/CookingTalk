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
use App\Image;
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
       if (Input::hasFile('foto1'))
       {
           $foto = Input::file('foto1');
           $imageName = $modelo->title . '.' . 
           $foto->getClientOriginalExtension();

           $foto->move(
            base_path() . '/public/imagenes', $imageName
            );
           $image = new Image;
           $image->urlImage = "imagenes/".$imageName;
           $image->idBlog = $modelo->idBlog;
           $image->save();
       }

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
       $recetas = Blog::all();
       $imagenes;
       foreach ($recetas as $receta) {
        $receta{'user'} = Users::find($receta->idUser);
        $imagenes = Image::where('idBlog', $receta->idBlog)->first();
        if($imagenes !== null) {
            $receta{'imagen'} = $imagenes->urlImage;
        } else {
            $receta{'imagen'} = null;
        }
        
    }
    return view('lobby', ['recetas' => $recetas]);
}

public function mostrarListado() {
   $recetas = DB::table('Blog')->get();
   return view('listadoRecetas', ['recetas' => $recetas]);
}

public function mostrarDetalle($idBlog) {
   $modelo = Blog::find($idBlog);
   $user = Auth::User();

   if($modelo !== null) {
       $userBlog = Users::find($modelo->idUser);
       if($userBlog !== null) {
        $modelo{'userBlog'} = $userBlog;
    }
    $imagenes = Image::where('idBlog', $idBlog)->get();
    if(count($imagenes) !== 0) {
        $modelo->{'imagenes'} = $imagenes;
    //echo $modelo->imagenes[0]->urlImage;
    }
    $comments = Blog::find($idBlog)->comments;
    if($comments !== null) {
        foreach ($comments as $comment) {
          $userComment = Comment::find($comment['idUser'])->user;
          $comment->{"nombreUsuario"} = $userComment['name'];
          $comment->{"avatar"} = $userComment['avatar'];
      }
      $modelo->{"comments"} = $comments;
  }

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

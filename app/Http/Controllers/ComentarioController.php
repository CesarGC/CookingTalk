<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use App\Comment;
use Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class ComentarioController extends Controller
{
	public function insertarComment(Request $request) {
    	//dd(Input::all());
		$user = Auth::User();
		//$datos = Input::all();
		//$now = new DateTime();
    	//DB::table('Blog')->insert(
    	//	['title' => $datos['title'], 'summary' => $datos['summary'], 'idUser' => $datos['idUser'], 'content' => $datos['content'], 'category' => 'comida mexicana', 'created_at' => $now->format('Y-m-d H:i:s')]
    	//);
		$modelo = new Comment;
		$modelo->comment = $request['comentario'];
		$modelo->idBlog = $request['idBlog'];
		$modelo->idUser = $user->id;
		//$modelo->content = $datos['content'];
		//$modelo->category = 'comida mexicana';
		$modelo->save();

		$user = Comment::find($modelo->idUser)->user;
		$modelo->{"nombreUsuario"} = $user['name'];

		return response($modelo,200);
	}
    //
}

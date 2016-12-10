<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Auth;
use App\Users;
use App\Blog; 
use App\Image;
use App\Http\Requests;

class PerfilController extends Controller
{

	public function modificarDatos() {
		$user = Auth::User();
		$recetas = Blog::where('idUser', $user->id)->get();
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
		return view('perfil', ['usuario' => $user, 'recetas' => $recetas]);
	}

		public function editarPerfil() {
			$user = Auth::User();
			$datos = Input::all();
			$f = Input::file('thefile');
			$att = Users::find($user['id']);
			$att->avatar = base64_encode(file_get_contents($f->getRealPath()));
			echo var_dump($att);
			$att->save();
		}
	}

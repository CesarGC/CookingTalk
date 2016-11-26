<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Auth;
use App\Users;
use App\Http\Requests;

class PerfilController extends Controller
{

	public function modificarDatos() {
		$user = Auth::User();
		return view('perfil', ['usuario' => $user]);
	}

	public function editarPerfil() {
		$user = Auth::User();
		$datos = Input::all();
		dd(Input::all());
		$f = Input::file('thefile');
		$att = Users::find($user['id']);
		$att->avatar = base64_encode(file_get_contents($f->getRealPath()));
		$att->save();
	}
}

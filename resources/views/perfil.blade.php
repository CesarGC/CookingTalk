@extends('layouts.app')

@section('content')
<div id="mainVistaPerfil">
	<header class="headerPerfil">
		<div class="headerTitle"><h1>Perfíl de usuario</h1></div>
		<div class="headerTitle logoSide">
			<div class="logotipoPerfil">
				<img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Cooking Talks">
			</div>
        </div>
	</header>
	<div class="contenedorPerfilUsuario">
		<p>
			<label class="labelPerfil">Nombre</label> <br>
			<input type="text" class="camposPerfil">
		</p>
		<p>
			<label class="labelPerfil">Apellidos</label> <br>
			<input type="text" class="camposPerfil">
		</p>
		<p>
			<label class="labelPerfil">Nickname</label> <br>
			<input type="text" class="camposPerfil">
		</p>
		<p>
			<label class="labelPerfil">Correo electrónico</label> <br>
			<input type="text" class="camposPerfil">
		</p>
		<div class="btnOpcionesPerfil">
			<p class="btnOpc">
				<input type="button" value="Actualizar" id="btnActualizarPerfil" class="btnCambiarData"/>
			</p>
			<p class="btnOpc">
				<a href="{{ url('/password/reset') }}" class="btnCambiarData">
					<span>Cambiar contraseña</span>
				</a>
			</p>
		</div>
	</div>
</div>
@endsection
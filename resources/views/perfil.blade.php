@extends('layouts.app')

@section('content')
<div id="mainVistaPerfil">
	<header class="headerPerfil w3-animate-top">
		<div class="headerTitle"><h1>Perfíl de usuario</h1></div>
		<div class="headerTitle logoSide">
			<div class="logotipoPerfil">
				<a href="{{ url('/lobby') }}">
					<img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Volver al lobby">
				</a>
			</div>
		</div>
	</header>
	<div id="contenedorUsuarioData">
		<div class="contenedorPerfilUsuario w3-animate-left w3-col m5 l4">
			{{ Form::open(['url' => ['editarPerfil'], 'method' => 'POST', 'files'=>true]) }}
			<div id="contenedorAvatarPerfil" class="w3-light-grey w3-border w3-border-blue">
				<div class="campoEdicionAvatar w3-text-light-blue">
					@if(empty($usuario['avatar']))
					<i class="fa fa-user-circle-o fa-5x" area-hidden="true"></i>
					@else
					<img src="data:{{$usuario['avatar']}};base64,{{$usuario['avatar']}}" id="logotipoCookingTalks" class="imgLogotipo" alt="Volver al lobby" style="width: 72px; height: 72px">
					@endif
				</div>
				{{ Form::file('thefile', array(
				'class' => 'camposPerfil',
				'id' => '',
				'value' => 'modificar'
				)) }}
			</div>
		<p>
			<label class="labelPerfil w3-text-deep-orange">Nombre :</label> <br>
			{{ Form::text('nombre', $usuario['name'], array(
			'class' => 'camposPerfil',
			'id' => '',
			'placeholder' => 'Nombre',
			))
		}}
	</p>
<p>
	<label class="labelPerfil w3-text-deep-orange">Correo electrónico :</label> <br>
	{{ Form::text('correo', $usuario['email'], array(
	'class' => 'camposPerfil',
	'id' => '',
	'placeholder' => 'Correo electrónico',
	))
}}
</p>
<div class="btnOpcionesPerfil">
	<p class="btnOpc opcActualizar">
		<button type="submit" id="btnActualizarPerfil" class="btnCambiarData w3-round w3-green w3-hover-deep-orange"><i class="fa fa-pencil-square fa-2x itemDataChange" aria-hidden="true"></i> <span class="itemDataChange">Actualizar</span></button>
	</p>
	<p class="btnOpc opcCambiatContra">
		<button id="btnActiaulizarContra" class="btnCambiarData w3-round w3-green w3-hover-deep-orange"><i class="fa fa-exchange fa-2x itemDataChange" aria-hidden="true"></i> <span class="itemDataChange">Cambiar contraseña</span></button>
	</p>
</div>
{{ Form::close() }}
</div>
<div id="listadoBlogsUsuarios" class="w3-col w3-container m7 l8">
</div>
<div style="clear:both"></div>
</div>
</div>
@endsection
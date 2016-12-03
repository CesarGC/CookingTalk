	@extends('layouts.app')

	@section('content')
	<!--@{{ message }}-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
	<!--<script type="text/javascript">
	var app = new Vue({
		el: '#app',
		data: {
			message: 'Hello Vue!'
		}
	})
</script>-->

<div id="mainVistaCrearBlog">
	<header class="headerPerfil w3-animate-top">
		<div class="headerTitle"><h1>Nuevo Blog</h1></div>
		<div class="headerTitle logoSide">
			<div class="logotipoPerfil">
				<a href="{{ url('/lobby') }}">
					<img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Volver al lobby">
				</a>
			</div>
		</div>
	</header>
	<div id="contenedorCreacionBlog" class="w3-container w3-card-4 w3-light-grey w3-animate-bottom">
<?php $nombreCategoria;
	  $idCategoria;
	foreach ($categoria as $catego) {
		$nombreCategoria[] = $catego['nombre'];
		$idCategoria[] = $catego['idCategoria'];
	}
 ?>

		{{ Form::open(array('url' => 'listadoRecetas', 'method' => 'POST', 'files'=>true)) }}
		<p>
			<label for="newTituloBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Título :</span></label>
			{{ Form::text('title', null, array(
				'class' => 'campoCreacionBlog w3-input w3-border w3-white w3-leftbar w3-border-blue w3-text-grey',
				'id' => 'newTituloBlog',
				//'placeholder' => 'Titulo',
				))
			}}
		</p>
		<p>
			<label for="newResumenBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Resúmen :</span></label>
			{{ Form::text('summary', null, array(
				'class' => 'campoCreacionBlog w3-input w3-border w3-white w3-leftbar w3-border-blue w3-text-grey',
				'id' => 'newResumenBlog',
				//'placeholder' => 'Resumen',
				))
			}}
		</p>
		<p>
			<label for="rewContenidoBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Contenido :</span></label>
			{{ Form::textarea('content', null, array(
				'class' => 'campoCreacionBlog w3-input w3-border w3-white w3-leftbar w3-border-blue w3-text-grey',
				'id' => 'newContenidoBlog',
				//'placeholder' => 'Contenido',
				))
			}}
		</p>
		<p>
			<label for="newResumenBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Categoría :</span></label>
			{{ Form::select('idCategory', $nombreCategoria
    			, $idCategoria, array('class' => 'campoCreacionBlog w3-input w3-border w3-white w3-leftbar w3-border-blue w3-text-grey', 'id' => 'idCategoria'))
			}}
		</p>
		<p>
			{{ Form::file('foto1', array(
				'class' => 'campoCreacionBlog w3-input w3-border w3-white w3-leftbar w3-border-blue w3-text-grey',
				'id' => 'newContenidoBlog',
				'value' => 'modificar'
				)) }}
		</p>
		<div id="contenedorBtnCrearBlog">
			<button type="submit" id="btnCrearBlog" class="w3-btn w3-round w3-blue"><i class="fa fa-check-circle-o fa-3x itemCrearBlog" aria-hidden="true"></i><span class="itemCrearBlog">Crear Blog</span></Button>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection
			<!--
			// enviar parametros cambiar prueba por id
			{{ Form::open(['url' => ['listadoRecetas', 'dos'], 'method' => 'DELETE']) }}
			<Button type="submit"> Borrar </Button>
			{{ Form::close() }}






			{{ Form::open(['url' => ['listadoRecetas', '9'], 'method' => 'PUT']) }}

	        {{ Form::text('title', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'Titulo',
				))
			}}
			<br>
			<br>
			{{ Form::text('summary', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'Resumen',
				))
			}}
			<br>
			<br>
			{{ Form::text('content', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'Contenido',
				))
			}}
			<br>
			<br>
			{{ Form::text('idCategory', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'Categoria',
				))
			}}
			<br>
			<br>
			{{ Form::text('created_at', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'Creado',
				))
			}}
			<br>
			<br>
			{{ Form::text('idUser', null, array(
	    		'class' => '',
	    		'id' => '',
	    		'placeholder' => 'idUsuario',
				))
			}}
			<br>
			<br>

			<Button type="submit"> Actualizar </Button>
			{{ Form::close() }}-->
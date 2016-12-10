<html>
<head>
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<link href="/css/l-g-estilos.css" rel="stylesheet">
	<link href="/css/w3.css" rel="stylesheet">
	<link href="/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <!--<div id="app">
 		@{{ message }}
 	</div>-->
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
    <!--<script type="text/javascript">
        var app = new Vue({
  		el: '#app',
  		data: {
    		message: 'Hello Vue!'
  		}
		})
	</script>-->

	<header class="headerPerfil w3-animate-top">
		<div class="headerTitle w3-panel w3-light-grey w3-border w3-round w3-text-blue w3-border-blue"><h1>Edición de Blog</h1></div>
		<div class="headerTitle logoSide">
			<div class="logotipoPerfil">
				<a href="{{ url('/lobby') }}">
					<img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Volver al lobby">
				</a>
			</div>
		</div>
	</header>
	<div id="contenedorEdicionBlog" class="w3-container w3-card-4 w3-light-grey w3-animate-bottom">
		{{ Form::open(['url' => ['listadoRecetas', $blog['id']], 'method' => 'PUT']) }}
		<div class="w3-third w3-animate-left w3-padding-right">
			<p>
				<label class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-spoon fa-2x" aria-hidden="true"></i> Muestras de la receta:</label>

				{{ Form::file('fotoEdit1', array(
				'class' => 'campoCreacionBlog w3-padding-top w3-padding-bottom w3-border-bottom w3-border-top w3-border-orange w3-white w3-margin-bottom',
				'id' => 'editContenidoBlog',
				'value' => 'modificar'
				)) }}

				{{ Form::file('fotoEdit2', array(
				'class' => 'campoCreacionBlog w3-padding-top w3-padding-bottom w3-border-bottom w3-border-top w3-border-orange w3-white w3-margin-bottom',
				'id' => 'editContenidoBlog2',
				'value' => 'modificar'
				)) }}

				{{ Form::file('fotoEdit3', array(
				'class' => 'campoCreacionBlog w3-padding-top w3-padding-bottom w3-border-bottom w3-border-top w3-border-orange w3-white w3-margin-bottom',
				'id' => 'editContenidoBlog3',
				'value' => 'modificar'
				)) }}
			</p>
		</div>
		<div class="w3-twothird">
			<p>
				<label for="newTituloBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Título :</span></label>
				{{ Form::text('title', $blog['title'], array(
				'class' => 'w3-input w3-border w3-white w3-leftbar w3-border-orange w3-text-grey',
				'id' => '',
				'placeholder' => 'Titulo',
				))
			}}
		</p>
		<p>
			<label for="newResumenBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Resúmen :</span></label>
			{{ Form::text('summary', $blog['summary'], array(
			'class' => 'w3-input w3-border w3-white w3-leftbar w3-border-orange w3-text-grey',
			'id' => '',
			'placeholder' => 'Resumen',
			))
		}}
	</p>
	<p>
		<label for="rewContenidoBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Contenido :</span></label>
		{{ Form::textarea('content', $blog['content'], array(
		'class' => 'w3-input w3-border w3-white w3-leftbar w3-border-orange w3-text-grey',
		'id' => '',
		'placeholder' => 'Contenido',
		))
	}}
</p>
<p>
	<label for="newResumenBlog" class="auxCampoCrearBlog w3-text-green w3-white w3-leftbar w3-border w3-border-green"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> <span>Categoría :</span></label>
	{{ Form::text('idCategory', null, array(
		'class' => '',
		'id' => '',
		'placeholder' => 'Categoria',
		))
	}}
</p>
</div>
<div id="contenedorBtnCrearBlog">
	<button type="submit" id="btnActualizarBlog" class="w3-btn w3-round w3-deep-orange"><i class="fa fa-refresh fa-3x itemCrearBlog" aria-hidden="true"></i><span class="itemCrearBlog"> Actualizar </span></button>
</div>
{{ Form::close() }}
</div>
</body>
</html>
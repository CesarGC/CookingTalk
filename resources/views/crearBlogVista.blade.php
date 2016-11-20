<html>
    <body>
    <div id="app">
 		@{{ message }}
	</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
    <script type="text/javascript">
        var app = new Vue({
  		el: '#app',
  		data: {
    		message: 'Hello Vue!'
  		}
		})
    </script>

        <h1>Crear blog nuevo</h1>


        {{ Form::open(array('url' => 'listadoRecetas', 'method' => 'POST')) }}
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

        <Button type="submit"> Insertar </Button>
		{{ Form::close() }}
    </body>
</html>
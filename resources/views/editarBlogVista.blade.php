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

        <h1>Editar blog</h1>


		{{ Form::open(['url' => ['listadoRecetas', $blog['id']], 'method' => 'PUT']) }}

        {{ Form::text('title', $blog['title'], array(
    		'class' => '',
    		'id' => '',
    		'placeholder' => 'Titulo',
			))
		}}
		<br>
		<br>
		{{ Form::text('summary', $blog['summary'], array(
    		'class' => '',
    		'id' => '',
    		'placeholder' => 'Resumen',
			))
		}}
		<br>
		<br>
		{{ Form::text('content', $blog['content'], array(
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

		<Button type="submit"> Actualizar </Button>
		{{ Form::close() }}
    </body>
</html>
<html>
    <body>
	<ul files="{{ $recetas }}" id="example-1">
  		<li v-for="item in items">
    		<a href="detalleBlog/@{{item['idBlog']}}">@{{ item['title'] }}</a>
    		<button
    		v-on:click="actualizarBlog(item)"
  			> Actualizar </button>
  		</li>
	</ul>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
    <script type="text/javascript">
    	var currency = <?php echo $recetas; ?>;
        var example1 = new Vue({
  		el: '#example-1',
  		props: ['files'],
  		data: {
    	items: currency
  		},
  		methods: {
    		actualizarBlog: function (receta) {
      		console.log(receta['idBlog']);
    	},
  }
		});
    </script>
    </body>
</html>


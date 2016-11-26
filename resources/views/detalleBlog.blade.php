<html>
<HEAD>
 <meta name="token" id="token" value="{{ csrf_token() }}">
</HEAD>
<body>

  <div>
    <a>{{ $blog['title'] }}</a>
    <br>
    <br>
    <a>{{ $blog['summary'] }}</a>
    <br>
    <br>
    <a>{{ $blog['content'] }}</a>
  </div>
  <div>
    <br>
    <br>
    <div id="divButton"> 
      <a> Comentarios </a>
      <br>
      <textarea id="comentarioNuevo" placeholder="Escribe un comentario"></textarea>
      <br>
      <br>
      <button
      v-on:click="insertarCommentario(blog)"
      > Actualizar </button>

    </div>
    <ul files="{{ $blog['comments'] }}" id="example-1">
      <li v-for="item in items">
        <div style="width:32px; height:32px; border: 1px solid; display: inline-block;"></div>
        <a href=""> @{{ item['nombreUsuario']}} </a>
        <br>
        <a href="detalleBlog/@{{item['idBlog']}}">@{{ item['comment'] }}</a>
      </li>
    </ul>

  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/vue.resource/1.0.3/vue-resource.min.js"></script>
  <script type="text/javascript">

      var currency = <?php echo $blog['comments']; ?>;
      var infoBlog = <?php echo $blog['idBlog']; ?>;
      var currentComment = document.getElementById("comentarioNuevo").value;

      var example1 = new Vue({
        el: '#example-1',
        props: ['files'],
        data: {
          items: currency
        },
        methods: {
        }
      });


      var divButton = new Vue({
        el: '#divButton',
        http: {
            root: '/root',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },
        data: {
          blog: infoBlog
        },
        methods: {
          insertarCommentario: function(comment) {
            currentComment = document.getElementById("comentarioNuevo").value;
            console.log(currentComment);
            this.$http.post('/crearComentario', {comentario: 'bar', idBlog: '1', idUser: '@{{Auth::User()->id}}'}, function(data) {
              console.log(data);
            }).then((response) => {

    // get status
    response.status;

    // get status text
    response.statusText;

    // get 'Expires' header
    response.headers.get('Expires');

    console.log(response.body);
    // set data on vm
    //this.$set('someData', response.body);

  }, (response) => {

    // error callback
  });
          }
        }
      });
    </script>
  </body>

  </html>
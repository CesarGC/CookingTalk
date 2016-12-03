<html>
<head>
 <meta name="token" id="token" value="{{ csrf_token() }}">
 <link href="/css/l-g-estilos.css" rel="stylesheet">
 <link href="/css/w3.css" rel="stylesheet">
 <link href="/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

  <div id="contenedorBlog">
    <header class="headerPerfil w3-animate-top">
    <div class="headerTitle w3-panel w3-light-grey w3-border w3-round w3-text-blue w3-border-blue"><h1>{{ $blog['title'] }}</h1></div>
    <div class="headerTitle logoSide">
      <div class="logotipoPerfil">
        <a href="{{ url('/lobby') }}">
          <img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Volver al lobby">
        </a>
      </div>
    </div>
  </header>
  <div id="contenedorMainBlog" class="w3-row-padding">
  <div class="w3-third w3-animate-left">
    <div class="blogImgItem">
    </div>
    <div class="blogImgItem">
    </div>
    <div class="blogImgItem">
    </div>
  </div>
  <div class="w3-twothird w3-white w3-round w3-animate-right w3-card-4">
    <!--<a>{{ $blog['title'] }}</a>
    <br>
    <br>-->
    <div id="contenedorBlogSummary" class="w3-panel w3-pale-green w3-topbar w3-bottombar w3-border-green">
      <h1>{{ $blog['summary'] }}</h1>
    </div>
    <br>
    <span id="contenedorBlogAuthor" class="w3-boder-bottom">Por : <a href="/" class="w3-btn w3-panel w3-padding-4 w3-orange w3-text-white w3-round">Nombre del Author</a></span>
    <br>
    <br>
    <div id="contenedorBlogContent" class="w3-panel w3-border w3-border-green w3-pale-green">
      <p>{{ $blog['content'] }}</p>
    </div>
  </div>
</div>
  </div>
  <div id="contenedorComentariosMain" class="w3-white w3-round w3-light-grey">
    <div class="comentariosHeader w3-green">
      <i class="fa fa-commenting fa-2x itemSeccionComentario" aria-hidden="true"></i><span class="itemSeccionComentario"> Comentarios</span>
    </div>
    <div id="divButton" class="userCommentario"> 
      <br>
      <div style="width:60px; height:60px; border: 1px solid; display: inline-block;">
        <img  style='width:60px; height:60px; object-fit: contain' src="data:{{$usuario['avatar']}};base64,{{$usuario['avatar']}}"/>
      </div>
      @if(empty($usuario['avatar']))
        <textarea id="comentarioNuevo" disabled rows="4" cols="50" placeholder="Escribe un comentario"></textarea>
      @else
        <textarea id="comentarioNuevo" rows="4" cols="50" placeholder="Escribe un comentario"></textarea>
      @endif
      <br>
      <button v-on:click="insertarCommentario(blog)" class="w3-btn w3-deep-orange"> Publicar </button>

    </div>
    <ul files="{{ $blog['comments'] }}" id="example-1" class="w3-ul w3-card-4">
      <li v-for="item in items" class="w3-padding-16 w3-white">
        <div class="w3-left w3-margin-right" style="width:60px; height:60px; border:1px solid;">
          <img  style='width:60px; height:60px; object-fit: contain' src="data:@{{item['avatar']}};base64,@{{item['avatar']}}"/>
        </div>
        <a href="" class="w3-xlarge"> @{{ item['nombreUsuario']}} </a>
        <span href=""> @{{ item['created_at']}} </span>
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
            this.$http.post('/crearComentario', {comentario: currentComment, idBlog: infoBlog, idUser: '@{{Auth::User()->id}}'}, function(data) {
              console.log(data);
            }).then((response) => {

    // get status
    response.status;

    // get status text
    response.statusText;

    // get 'Expires' header
    response.headers.get('Expires');

    currency.push(response.body);
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
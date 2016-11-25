@extends('layouts.app')

@section('content')
<div id="mainLobby">
    <nav id="menuPrincipal" class="w3-animate-left w3-card-2">
        <a href="" class="">
            <div id="contenedorPerfilPreview" class="w3-container w3-section w3-border-top w3-border-bottom w3-hover-light-grey w3-hover-text-blue">
                <div id="contenedorAvatarImg">
                    <!-- Imagen del perfil del usuario -->
                    <i class="fa fa-user-circle-o fa-5x" aria-hidden="true"></i>
                </div>
                <div id="contenedorLinkPerfil">
                    <span>Mi Perfíl</span>
                </div>
            </div>
        </a>
        <div class="menuOpciones">
            <!--<a href="{{ url('/perfil') }}" class="menuOpc">Perfíl</a>-->
            <a href="#" class="menuOpc w3-btn-block w3-orange w3-text-white">Cerrar sesión</a>
        </div>
        <div id="contenedorLogMini">
            <img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipoNav" alt="Cooking Talks">
        </div>
    </nav>
    <div id="contenedorLobby" class="w3-animate-top">
        <div class="principalBar w3-green w3-card-4">
            <div class="contenedorBtnNuevoBlog campoHeader">
                <!--<input type="button" value="Nuevo blog" class="btnNuevoBlog"/>-->
                <a href="crearBlogVista" class="btnNuevoBlog w3-btn w3-round w3-white w3-text-green w3-border w3-hover-blue w3-hover-text-white w3-hover-border-white">
                    <i class="fa fa-shopping-basket fa-2x btnNuevoBlogItem" aria-hidden="true"></i><span class="btnNuevoBlogItem btnNuevoBlogTitulo"> Nuevo blog</span>
                </a>
            </div>
            <div class="contenedorBusqueda campoHeader">
                <input type="text" id="campoBusqueda" class="w3-leftbar w3-pale-gray w3-text-grey"/>
                <button id="btnBuscarData" class="w3-btn w3-round w3-white w3-text-green w3-border w3-hover-blue w3-hover-text-white w3-hover-border-white"><i class="fa fa-search fa-2x btnBuscarBlogItem"></i><span class="btnBuscarBlogItem btnBuscarBlogTitulo">Buscar</span></button>
            </div>
        </div>
        <div id="lobbyBlogs">

        </div>
    </div>
</div>
@endsection

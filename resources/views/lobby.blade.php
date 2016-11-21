@extends('layouts.app')

@section('content')
<div id="mainLobby">
    <nav id="menuPrincipal">
        <div id="contenedorLogMini">
                    <img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Cooking Talks">
                </div>
        <div class="menuOpciones">
            <a href="{{ url('/perfil') }}" class="menuOpc">Perfíl</a>
            <a href="#" class="menuOpc">Cerrar sesión</a>
        </div>
    </nav>
    <div id="contenedorLobby">
        <div class="principalBar">
            <div class="contenedorBtnNuevoBlog campoHeader">
                <!--<input type="button" value="Nuevo blog" class="btnNuevoBlog"/>-->
                <a href="" class="btnNuevoBlog">
                    <span>Nuevo blog</span>
                </a>
            </div>
            <div class="contenedorBusqueda campoHeader">
                <input type="text" id="campoBusqueda"/>
                <input type="button" value="Buscar" id="btnBuscar"/>
            </div>
        </div>
        <div id="lobbyBlogs">

        </div>
    </div>
</div>
@endsection

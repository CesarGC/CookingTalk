@extends('layouts.app')

@section('content')
<div id="contenedorPrincipal">
    <div class="row w3-animate-left">
        <div id="contenedorRegistro">
            <div id="contenedorBanner">
                <div id="contenedorLogotipoMini" class="header-container">
                    <img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Cooking Talks">
                </div>
                <div class="header-container backButton">
                    <a href="http://laravel.dev:8000/login" class="btn-link w3-btn w3-green">
                        <i class="fa fa-arrow-left"></i><span> Regresar</span>
                    </a>
                </div>
            </div>
            <div class="panel-heading w3-container w3-section w3-border-top w3-border-bottom w3-border-blue"><span class="panel-title">Registro de cuenta</span></div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <p>
                            <label for="name" class="auxCampoUsuario w3-text-deep-orange">Nombre(s)</label> <br>
                            <input id="name" type="text" class="campoUsuario" name="name" value="{{ old('name') }}" required >

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                        <p>
                            <label for="name" class="auxCampoUsuario w3-text-deep-orange">Apellidos</label> <br>
                            <input id="last-name" type="text" class="campoUsuario" name="name" value="{{ old('name') }}" required >

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                        <p>
                            <label for="name" class="auxCampoUsuario w3-text-deep-orange">Nickname</label> <br>
                            <input id="nickname" type="text" class="campoUsuario" name="name" value="{{ old('name') }}" required >

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <p>
                            <label for="email" class="auxCampoUsuario w3-text-deep-orange">Correo electrónico</label> <br>
                            <input id="email" type="email" class="campoUsuario" name="email" value="{{ old('email') }}" >

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <p>
                            <label for="password" class="auxCampoUsuario w3-text-deep-orange">Contraseña</label> <br>
                            <input id="password" type="password" class="campoUsuario" name="password" >

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">


                        <p>
                            <label for="password-confirm" class="auxCampoUsuario w3-text-deep-orange">Confirmar contraseña</label> <br>
                            <input id="password-confirm" type="password" class="campoUsuario" name="password_confirmation" >

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="form-group">
                        <p>
                            <input type="submit" id="btnRegistro" class="w3-btn w3-green" value="Registrarse"/>

                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

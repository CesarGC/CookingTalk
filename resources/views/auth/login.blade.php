    @extends('layouts.app')

    @section('content')
    <div id="contenedorPrincipal">
        <div class="row w3-animate-zoom">
            <div id="contenedorLogin">
             <div id="contenedorLogotipo">
                <img src="../imagenes/CookingTalksMedium.png" id="logotipoCookingTalks" class="imgLogotipo" alt="Cooking Talks">
            </div>
            <div id="contenedorIngreso">
                <div id="contenedorCamposUsuario">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <p>
                                <label for="cuentaUsuario" class="auxCampoUsuario w3-text-deep-orange">Correo electrónico:</label> <br>
                                <input type="email" name="email" value="{{ old('email') }}" id="cuentaUsuario" class="campoUsuario" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </p>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <p>
                                <label for="contraseniaUsuario" class="auxCampoUsuario w3-text-deep-orange">Contraseña:</label> <br>
                                <input type="password"  name="password" id="contraseniaUsuario" class="campoUsuario" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </p>
                        </div>

                        <div class="form-group">
                                    <!--<button type="submit" class="btn btn-primary">
                                        Login
                                    </button>-->

                                    <p>
                                        <button type="submit" id="btnIngreso" class="w3-btn w3-green">Ingresar</button>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div id="contenedorOpcionesAdicionales">
                            <p>
                                <span class="auxOcpionAdicional">¿Olvidaste tu contraseña?</span> <br>
                                <span>Vuelve a generarla accediendo </span><a class="w3-btn btn-link w3-round-large w3-deep-orange" href="{{ url('/password/reset') }}">aquí.</a>
                            </p>
                            <p>
                                <span class="auxOcpionAdicional">¿Aún no tienes una cuenta?</span> <br>
                                <span>Puedes crearla fácilmente ingresando tus datos </span><a class="w3-btn btn-link w3-round-large w3-deep-orange" href="{{ url('/register') }}">aquí.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

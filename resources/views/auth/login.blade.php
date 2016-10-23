    @extends('layouts.app')

    @section('content')
    <div id="contenedorPrincipal">
        <div class="row">
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
                                    <label for="cuentaUsuario" class="auxCampoUsuario">Correo electrónico:</label> <br>
                                    <input type="email" value="{{ old('email') }}" id="cuentaUsuario" class="campoUsuario" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </p>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <p>
                                    <label for="contraseniaUsuario" class="auxCampoUsuario">Contraseña:</label> <br>
                                    <input type="password"  id="contraseniaUsuario" class="campoUsuario" name="password" required>

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

                                    <div id="contenedorBtnIngreso">
                                        <input type="submit" value="Ingresar" id="btnIngreso">
                                    </div>

                                    <div id="contenedorOpcionesAdicionales">
                                        <p>
                                            <span class="auxOcpionAdicional">¿Olvidaste tu contraseña?</span> <br>
                                            <span>Vuelve a generarla accediendo </span><a class="btn btn-link" href="{{ url('/password/reset') }}">aquí.</a>
                                        </p>
                                        <p>
                                            <span class="auxOcpionAdicional">¿Aún no tienes una cuenta?</span> <br>
                                            <span>Puedes crearla fácilmente ingresando tus datos </span><a href="{{ url('/register') }}">aquí.</a>
                                        </p>
                                    </div>
                            </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection

@extends('../layouts.auth')

@section('content')
    <div id="login-page">
        <div class="container">

            <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <h2 class="form-login-heading">iniciar sesión</h2>
                <div class="login-wrap">
                    @include('../errors.list')
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus>
                    <br>

                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">

                    <label class="checkbox">
                        <span class="pull-right">
                            <input type="checkbox" name="remember"> Recordarme
                        </span>
                    </label>

                    <label class="checkbox">
                        <span class="pull-left">
                            <a data-toggle="modal" href="{{ url('/password/reset') }}"> ¿Olvidó su contraseña?</a>
                        </span>
                        <br><br>
                    </label>

                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> INICIAR SESIÓN</button>
                    <hr>

                    <div class="registration">
                        ¿Todavía no tiene una cuenta?<br/>
                        <a class="" href="register">
                            Crear Cuenta
                        </a>
                    </div>

                </div>

            </form>

        </div>
    </div>
@stop





@extends('../layouts.auth')

@section('content')
    <div id="login-page">
        <div class="container">

            <form class="form-login" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                <h2 class="form-login-heading">registrar nuevo usuario</h2>
                <div class="login-wrap">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre" autofocus>
                    <br>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                    <br>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    <br>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
                    <label class="checkbox"></label>
                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> CREAR USUARIO</button>
                </div>
                <hr>
                <div class="registration"></div>
            </form>

        </div>
    </div>
@stop

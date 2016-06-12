@extends('../layouts.app')


@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-sm-9">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Bienvenido {{ $user->name }}!
                        </h4>
                        <br>
                        <div class="row">
                            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id], 'files'=>true, 'class' => 'form-horizontal style-form']) !!}
                            <div class="col-sm-4 text-center">
                                @if(!$user->image)
                                    <img src="/img/user-avatar.png" alt="User Avatar" class="img-circle" width="75%">
                                @else
                                    <img src="/img/users/{{ $user->image }}" alt="{{ $user->name }}" class="img-circle" width="75%">
                                @endif
                                <br><br>
                                <button class="btn btn-primary profile-update-btn">Actualizar Foto</button>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        {!! Form::file('image', ['class' => 'form-control image-input', 'style' => 'display:none']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                @include('errors/list')
                                <div class="form-group">
                                    {!! Form::label('name', $user->name, ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', "Email", ['class' => 'col-sm-4 control-label']) !!}
                                    <div class="col-sm-8">
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        {!! Form::submit('Actualizar Perfil', ['class' => 'btn btn-success form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 ds">
                    <!-- USERS ONLINE SECTION -->
                    <h3>MIEMBROS DEL EQUIPO</h3>
                    <!-- First Member -->
                    @foreach($users as $member)
                        <div class="desc">
                            <div class="thumb">
                                @if($member->image)
                                    <img class="img-circle" src="/img/users/{{ $member->image }}" width="35px" height="35px" align="">
                                @else
                                    <img class="img-circle" src="/img/user-avatar.png" width="35px" height="35px" align="">
                                @endif
                            </div>
                            <div class="details">
                                <p><a href="#">{{ $member->name }}</a><br/>
                                    <muted>Activo</muted>
                                </p>
                            </div>
                        </div>
                    @endforeach

                    <!-- CALENDAR-->
                    <div id="calendar" class="mb">
                        <div class="panel green-panel no-margin">
                            <div class="panel-body">
                                <div id="date-popover" class="popover top"
                                     style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title" style="disadding: none;"></h3>

                                    <div id="date-popover-content" class="popover-content"></div>
                                </div>
                                <div id="my-calendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- / calendar -->

                </div>
            </div>

        </section>
    </section>
@stop

@section('scripts')
    <script>
        $(function() {
            $(".profile-update-btn").click(function (e) {
                e.preventDefault();
                $(".image-input").slideDown();
            });
        });
    </script>
@stop
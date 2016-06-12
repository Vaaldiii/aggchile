@extends('../layouts.app')


@section('content')
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Panel de Control</h3>
            @include('errors/list')
            <div class="row mt">
                <div class="col-lg-7">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Usuarios
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <table class="table table-striped table-advance table-hover text-center">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-barcode"></i> ID</th>
                                    <th><i class="fa fa-user"></i> Nombre</th>
                                    <th><i class="fa fa-envelope-o"></i> Email</th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="text-left">{{ $user->id }}</td>
                                            <td class="text-left">{{ $user->name }}</td>
                                            <td class="text-left">{{ $user->email }}</td>
                                            <td>
                                                {!! Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'delete', 'class' => 'delete-form', 'style' => 'display: inline-block;']) !!}
                                                <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o'></i></button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Equipo de Trabajo
                            <a href="{{ url('/home/partners/create') }}" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i> Agregar</a>
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <table class="table table-striped table-advance table-hover text-center">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-user"></i> Nombre</th>
                                    <th class="text-center"><i class="fa fa-github-square"></i></th>
                                    <th class="text-center"><i class="fa fa-file-text-o"></i></th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($partners as $partner)
                                    <tr>
                                        <td class="text-left"><a href="{{ url('/equipo') }}">{{ $partner->name }}</a></td>
                                        <td>
                                            @if($partner->image != "")
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($partner->cv != "")
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('home/partners/'.$partner->id.'/edit')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            {!! Form::open(['action' => ['PartnersController@destroy', $partner->id], 'method' => 'delete', 'class' => 'delete-form', 'style' => 'display: inline-block;']) !!}
                                                <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o'></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="content-panel">
                        <h4>
                            <i class="fa fa-angle-right"></i> Servicios
                            <a href="{{ url('/home/services/create') }}" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i> Agregar</a>
                            <button class="btn btn-default pull-right col-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
                        </h4>
                        <div class="panel-body collapse">
                            <table class="table table-striped table-advance table-hover text-center">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-user"></i> Nombre</th>
                                    <th class="text-center"><i class="fa fa-paste"></i></th>
                                    <th class="text-center"><i class="fa fa-github-square"></i></th>
                                    <th class="text-center"><i class="fa fa-files-o"></i></th>
                                    <th class="text-center">Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td class="text-left"><a href="{{ url('/home/service/'.$service->id) }}">{{ $service->name }}</a></td>
                                        <td>
                                            @if($service->description != "")
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($service->image != "")
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($service->brochure != "")
                                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            @else
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i></button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('home/services/'.$service->id.'/edit')}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            {!! Form::open(['action' => ['ServicesController@destroy', $service->id], 'method' => 'delete', 'class' => "delete-form", 'style' => 'display: inline-block;']) !!}
                                            <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o'></i></button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>
@stop

@section('scripts')
    <script>
        $( document ).ready(function() {
            $('.collapse').collapse();
            $('.col-btn').click(function(){
                var colBtn = $(this);
                var colPanel = $(this).parent().parent().find('.panel-body');
                colPanel.collapse('toggle').on('shown.bs.collapse', function() {
                    colBtn.html("<span class='glyphicon glyphicon-chevron-up'></span>");
                }).on('hidden.bs.collapse', function() {
                    colBtn.html("<span class='glyphicon glyphicon-chevron-down'></span>");
                });
            });
        });

    </script>
    <script>
        $(function () {
           $(".btn-danger").click(function () {
               $(this).addClass('disabled');
           });
        });
    </script>
@stop
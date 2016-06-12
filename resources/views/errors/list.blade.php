@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <h3>Oh Snap! Ha ocurrido un error</h3>
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
@endif

@if(Session::has('notify-success'))
    @section('scripts')
        <script>
            alertify.success("{{ session('notify-success') }}", 5);
        </script>
    @stop
@endif
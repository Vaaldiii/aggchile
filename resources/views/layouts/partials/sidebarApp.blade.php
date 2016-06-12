<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="/home/user/profile">
                @if($user->image)
                    <img src="/img/users/{{ $user->image }}" class="img-circle" width="60"></a>
                @else
                    <img src="/img/user-avatar.png" alt="User Avatar" class="img-circle" width="60">
                @endif
            </p>

            <h5 class="centered"></h5>

            <li class="mt">
                <a class="" href="{{ url('/home/user/profile') }}">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>

            <li class="">
                <a class="" href="{{ url('/home/edition') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Panel de Control</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-photo"></i>
                    <span>Panel de Edición</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ url('/home/theme') }}"><i class="fa fa-desktop"></i>General</a></li>
                    <li><a href="{{ url('/home/settings') }}"><i class="fa fa-cogs"></i>Ajustes</a></li>
                </ul>
            </li>



        <!--
            <li class="">
                <a class="" href="{{ url('/home/data-panel') }}">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Panel de Datos</span>
                </a>
            </li>




            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Components</span>
                </a>
                <ul class="sub">
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="sub">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="lock_screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Form Components</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a href="basic_table.html">Basic Table</a></li>
                    <li><a href="responsive_table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>
            -->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
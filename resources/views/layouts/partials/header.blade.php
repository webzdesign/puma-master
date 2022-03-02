<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light p-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link ml-3 p-0" data-widget="pushmenu" href="#" role="button">
                <i class="text-white text-dark fas fa-bars fa-2x p-1"></i></a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
{{--
        <div class="pull-right" style="margin:10px">
            <li class="nav-item">
                <a class="nav-link pr-0 pl-0" href="{{ route('profile') }}" role="button">
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
            </li>
        </div> --}}

        <div class="pull-right" style="margin:10px">
            <li class="nav-item">
                <a class="nav-link pr-0 pl-0" href="{{ route('logout') }}" role="button" id="logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt fa-2x"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </div>


    </ul>
</nav>
<!-- /.navbar -->

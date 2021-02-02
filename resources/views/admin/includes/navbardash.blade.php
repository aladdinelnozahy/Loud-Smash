<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent   ">


    <div class="container-fluid">
        <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
            <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        </div>

        <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto ">
            <a href="{{ route('site.home') }}"> Loud Smash</a>
            <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

                <b class="caret d-none d-lg-block d-xl-block"></b>
                <p class="d-lg-none">
                </p>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
                <div class="dropdown-divider"></div>
                <li class="nav-link">
                <a href="{{ route('user.logout') }}" class="nav-item dropdown-item">Log out</a>
                </li>
            </ul>


            </li>
            <li class="separator d-lg-none"></li>
        </ul>
        </div>
    </div>
</nav>

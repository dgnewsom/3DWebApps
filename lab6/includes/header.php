<!-- Top Navigation Bar -->
<nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola main-colour">
    <div class="container">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="javascript:swap('home')">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: white"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:swap('home')">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="About" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Created for the H7006: Web 3D Applications Module 2022">About</a>
                    <!--					<a class="nav-link" href="#">About</a>-->
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:swap('coke')">Coca Cola</a>
                        <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
                        <a class="dropdown-item" href="javascript:swap('pepper')">Dr Pepper</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
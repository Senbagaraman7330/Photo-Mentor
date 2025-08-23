<!-- ✅ Navbar Header Start -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <!--  Brand Logo -->
            <a class="navbar-brand text-success ms-3" href="__-index.php">
                <h1 class="h3 m-0">Photo Mentor</h1>
            </a>

            <!--  Toggle Button for Small Screens -->
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <ul class="navbar-nav me-4 mb-2 mb-lg-0">

                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link text-success" href="__-index.php">Home</a>
                    </li>

                    <!-- Sign In -->
                    <li class="nav-item">
                        <a class="nav-link text-success" href="__-sign-in.php">Sign In</a>
                    </li>

                    <!-- Sign Up -->
                    <li class="nav-item">
                        <a class="nav-link text-success" href="__-sign-up.php">Sign Up</a>
                    </li>

                    <!--  About -->
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">About</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <button class="btn btn-success dropdown-toggle ms-lg-3 mt-2 mt-lg-0" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hit Me
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Help</a></li>
                            <li><a class="dropdown-item" href="#">Contact</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-success" href="/Photo-Mentor/__-redirect.php">
                            <?PHP print($_SESSION['user']) ?>
                        </a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
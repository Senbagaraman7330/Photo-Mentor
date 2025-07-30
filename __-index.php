<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <header>
        <div>
            <div class="">

                <nav class="navbar navbar-dark bg-dark navbar-expand-lg">

                    <!-- Brand name of the page  -->
                    <a href="__-index.php" class="navbar-brand ms-4 text-success ">
                        <h1 class="h1">Photo Mentor</h1>
                    </a>

                    <!-- Small devise toggle button  -->
                    <button class="navbar-toggler me-4 text-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarcollapse">
                        <span class="navbar-toggler-icon"></span></button>

                    <!-- This is the navigation link of the page  -->
                    <div class=" navbar-collapse collapse nav d-flex-inline  justify-content-md-end"
                        id="navbarcollapse">

                        <ul
                            class="d-flex flex-row flex-lg-row flex-sm-column  justify-content-evenly justify-content-sm-start  me-4">

                            <!-- It's redirect to home page  -->
                            <li class="nav-item">
                                <a href="__-index.php" class="nav-link text-success">Home</a>
                            </li>


                            <!-- Sign In page nav link  -->
                            <li class="nav-item">
                                <a href="__-sign-in.php" class="nav-link text-success">Sign In</a>
                            </li>

                            <!-- Sign Out page nav Link  -->
                            <li class="nav-item">
                                <a href="__-sign-up.php" class="nav-link text-success">Sign Up</a>
                            </li>

                            <!-- About nav link  -->
                            <li class="nav-item">
                                <a href="#" class="nav-link text-success">About</a>
                            </li>

                            <!-- DropDown Menu of the page  -->
                            <li class="nav-item">

                                <div class="dropdown-center ">

                                    <!-- DropDown toggle button  -->
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Hit Me</button>

                                    <!-- DropDown toggle menu it's have content of the DropDown  -->
                                    <div class="dropdown-menu ">

                                        <span class="dropdown-item">Help</span>
                                        <span class="dropdown-item">Contact</span>

                                    </div>

                            </li>




                        </ul>
                    </div>


                </nav>

            </div>

        </div>
    </header>

    <main>
        <!-- row 1  -->

        <div class="container-fluid my-4">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-12 col-md-4 mb-4">


                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->

                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4 mb-4">

                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->

                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>
                    </div>

                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4 mb-4">

                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->
                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- row 2  -->
        <div class="container-fluid my-4">
            <div class="row">

                <!-- Card 1 -->
                <div class="col-12 col-md-4 mb-4">

                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->
                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->

                <div class="col-12 col-md-4 mb-4">

                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->
                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4 mb-4">

                    <div class="card">

                        <!-- card top image  -->
                        <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                        <div class="card-body">

                            <!-- Card title  -->
                            <h5 class="card-title">Posted Image</h5>

                            <!-- Para of the card image  -->
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum reprehenderit
                                iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                            </p>
                        </div>

                        <!-- Button of the like and unlike used btn-group  -->
                        <div class="container-fluid d-flex ">
                            <div class="btn-group m-3 me-auto">
                                <button class="btn btn-outline-success">Like</button>
                                <button class="btn btn-outline-success">Dislike</button>
                            </div>

                            <p class="m-3 text-center">10 min ago</p>
                        </div>
                    </div>
                </div>

                <!-- row 3  -->
                <div class="container-fluid my-4">

                    <div class="row">

                        <!-- Card 1 -->
                        <div class="col-12 col-md-4 mb-4">

                            <div class="card">

                                <!-- card top image  -->
                                <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                                <div class="card-body">

                                    <!-- Card title  -->
                                    <h5 class="card-title">Posted Image</h5>

                                    <!-- Para of the card image  -->
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                        placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum
                                        reprehenderit
                                        iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                                    </p>
                                </div>

                                <!-- Button of the like and unlike used btn-group  -->
                                <div class="container-fluid d-flex ">
                                    <div class="btn-group m-3 me-auto">
                                        <button class="btn btn-outline-success">Like</button>
                                        <button class="btn btn-outline-success">Dislike</button>
                                    </div>

                                    <p class="m-3 text-center">10 min ago</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-12 col-md-4 mb-4">

                            <div class="card">

                                <!-- card top image  -->
                                <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                                <div class="card-body">

                                    <!-- Card title  -->
                                    <h5 class="card-title">Posted Image</h5>

                                    <!-- Para of the card image  -->
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                        placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum
                                        reprehenderit
                                        iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                                    </p>
                                </div>

                                <!-- Button of the like and unlike used btn-group  -->
                                <div class="container-fluid d-flex ">
                                    <div class="btn-group m-3 me-auto">
                                        <button class="btn btn-outline-success">Like</button>
                                        <button class="btn btn-outline-success">Dislike</button>
                                    </div>

                                    <p class="m-3 text-center">10 min ago</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-12 col-md-4 mb-4">

                            <div class="card">

                                <!-- card top image  -->
                                <img src="https://picsum.photos/300/200" alt="Sample Image" class="card-img-top">

                                <div class="card-body">

                                    <!-- Card title  -->
                                    <h5 class="card-title">Posted Image</h5>

                                    <!-- Para of the card image  -->
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error
                                        placeat quia, alias dolore ex quae. Debitis omnis et perferendis laborum
                                        reprehenderit
                                        iusto nam quisquam aliquid, mollitia tempore corrupti dolor corporis?
                                    </p>
                                </div>

                                <!-- Button of the like and unlike used btn-group  -->
                                <div class="container-fluid d-flex ">
                                    <div class="btn-group m-3 me-auto">
                                        <button class="btn btn-outline-success">Like</button>
                                        <button class="btn btn-outline-success">Dislike</button>
                                    </div>

                                    <p class="m-3 text-center">10 min ago</p>
                                </div>
                            </div>
                        </div>


    </main>


    <footer class="text-body-secondary py-5 bg-dark">
        <div class="container  text-success">
            <p class="float-end mb-1 "> <a href="#" class="text-success">Back to top</a> </p>
            <p class="mb-1 h3">Thank you for visited the Wed site</p>
            <p>By <strong>Senbaga Raman</strong></p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
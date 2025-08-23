<?PHP 

Include_once __DIR__.'/../__-database/__-get_value.php';
?>




<main>
    <div class="container mt-4 mb-4">

        <div class="card w-75 mx-auto border-3">
            <div class="card-body">
                <form action="" method="post">
                    <h1 class="text-center fw-bold text-success my-4 text-uppercase">
                        <?PHP
                        
                        // It's provide the login Information 
                        print_r($_SESSION['user']);
                             ?>
                        bio
                    </h1>

                    <!--Date of birth field of the form  -->
                    <div class="my-4">
                        <label for="DOBinput" class="form-label ms-1 text-success fw-bold">DATE OF BIRTH</label>
                        <div class="input-group w-50">
                            <input type="number" class="form-control me-2" placeholder="Date" min="1" max="31"
                                name="bio-date">
                            <input type="number" class="form-control me-2" placeholder="Month" min="1" max="12"
                                name="bio-month">
                            <input type="number" class="form-control" placeholder="Year" min="1900" max="2023"
                                name="bio-year">
                        </div>


                    </div>

                    <!-- Last name field of the form  -->
                    <div class="my-4">
                        <label for="Descriptioninput" class="form-label ms-1 text-success fw-bold">DESCRIPTION</label>
                        <textarea class="form-control" id="Descriptioninput" rows="5" name="bio-description"
                            placeholder="(optional)"></textarea>


                    </div>

                    <!-- Email field of the form  -->
                    <div class="my-4">
                        <label for="Phoneinput" class="form-label ms-1 text-success fw-bold">PHONE NUMBER</label>
                        <input type="text" class="form-control " id="Phoneinput" name="bio-phone"
                            placeholder="9055678020">


                    </div>

                    <!-- Password field of the form  -->
                    <div class="  my-4">
                        <label for="Locationinput" class="form-label ms-1 text-success fw-bold">LOCATION</label>
                        <input type="text" class="form-control " id="Locationinput" name="bio-location"
                            placeholder="(optional)">

                    </div>


                    <!-- Submit button of the form  -->
                    <div class="d-flex justify-content-center  my-4">
                        <button class="btn btn-outline-success mt-3 px-5 " type="submit">Upgrade Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
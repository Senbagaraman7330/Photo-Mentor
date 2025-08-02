    <main>
        <div class="container mt-4 ">

            <div class="card w-75 mx-auto border-3">
                <div class="card-body">
                    <form action="" method="post">

                        <!-- Title of the form  -->
                        <h1 class="text-center fw-bold text-success my-4">Sign In</h1>

                        <!-- Email field of the form  -->
                        <div class="form-floating my-4">
                            <input type="email" class="form-control " id="emailinput" placeholder="Email"
                                name="sign-in-email">
                            <label for="emailinput" class="form-label ">Email</label>

                        </div>

                        <!-- Password field of the form  -->
                        <div class="form-floating  my-4">
                            <input type="password" class="form-control " id="passwordinput" placeholder="Password"
                                name="sign-in-password">
                            <label for="passwordinput" class="form-label ">Password</label>
                        </div>

                        <!-- It's a information message wether you have account or not  -->
                        <div class="form-text text-center  mt-4">Create account <a href="__-sign-up.php"
                                style="text-decoration: none;">Sign Up</a> ?</div>

                        <!-- Submit Button of the form  -->
                        <div class="d-flex justify-content-center  my-4">
                            <button class="btn btn-outline-success mt-3 px-5 " type="submit">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
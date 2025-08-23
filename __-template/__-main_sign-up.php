<main>
    <div class="container mt-4 ">

        <div class="card w-75 mx-auto border-3">
            <div class="card-body">
                <form action="" method="post">
                    <h1 class="text-center fw-bold text-success my-4">Sign Up</h1>

                    <!-- First name field of the form  -->
                    <div class="form-floating my-4">
                        <input type="text" class="form-control " id="firstnameinput" placeholder="First Name"
                            name="sign-up-first_name">
                        <label for="firstnameinput" class="form-label ">First Name</label>

                    </div>

                    <!-- Last name field of the form  -->
                    <div class="form-floating my-4">
                        <input type="text" class="form-control " id="lastnameinput" placeholder="Last Name (optional)"
                            name="sign-up-last_name">
                        <label for="lastnameinput" class="form-label ">Last Name (optional)</label>

                    </div>

                    <!-- Email field of the form  -->
                    <div class="form-floating my-4">
                        <input type="email" class="form-control " id="emailinput" placeholder="Email"
                            name="sign-up-email">
                        <label for="emailinput" class="form-label ">Email</label>

                    </div>

                    <!-- Password field of the form  -->
                    <div class="form-floating  my-4">
                        <input type="password" class="form-control " id="passwordinput" placeholder="Password"
                            name="sign-up-password">
                        <label for="passwordinput" class="form-label ">Password</label>
                    </div>

                    <!-- It's a information message wether you have account or not  -->
                    <div class="form-text text-center  mt-4">Already have account <a href="__-sign-in.php"
                            style="text-decoration: none;">Sign In</a> ?</div>

                    <!-- Submit button of the form  -->
                    <div class="d-flex justify-content-center  my-4">
                        <button class="btn btn-outline-success mt-3 px-5 " type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
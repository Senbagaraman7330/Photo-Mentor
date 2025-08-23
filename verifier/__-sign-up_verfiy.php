<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">


<?php

include __DIR__.'/../__-database/__-insert_value.php';

// Check wether it's post or get 

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_SERVER['SCRIPT_NAME'] == '/Photo-Mentor/__-sign-up.php') {

    if (empty( $_POST['sign-up-first_name']) || empty($_POST['sign-up-email']) || empty($_POST['sign-up-password']) ) {
        ?>

<!-- Bootstrap Modal -->
<div class="modal fade" id="warningModal1" tabindex="-1" data-bs-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="warningModalLabel1">Warning Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p>Kindly fill all the fields in the form. <span class="text-success fw-bold">Thank you!</span></p>
            </div>

        </div>
    </div>
</div>

<!-- Trigger modal on page load -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('warningModal1'));
    myModal.show();
});
</script>

<?php


    }

    else{

    $first_name = $_POST['sign-up-first_name'] ?? '' ;
    $last_name = $_POST['sign-up-last_name'] ?? '';
    $email = $_POST['sign-up-email'] ?? '';
    $password = $_POST['sign-up-password'] ?? '';
        
        insert_value::insert_value_dd($first_name,$last_name,$email,$password);
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
</script>
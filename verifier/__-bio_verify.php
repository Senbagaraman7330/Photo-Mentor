<?PHP

include_once __DIR__.'/../__-database/__-insert_bio-value.php';
   error_reporting(E_ALL);
      ini_set('display_errors',1);


if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['SCRIPT_NAME'] == '/Photo-Mentor/__-user-bio.php'){

  if(empty($_POST['bio-date']) || empty($_POST['bio-month']) || empty($_POST['bio-year']) || empty($_POST['bio-phone'])){
  ?>

<!-- Bootstrap Modal -->
<div class="modal fade" id="warningModal3" tabindex="-1" data-bs-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="warningModalLabel">Warning Message</h5>
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
    var myModal = new bootstrap.Modal(document.getElementById('warningModal3'));
    myModal.show();
});
</script>


<?PHP
  }

else{

   $dob = 
    ($_POST['bio-year'] ?? '') . "-" .
    ($_POST['bio-month'] ?? '') . "-" .
    ($_POST['bio-date'] ?? '');
    $description = $_POST['bio-description'] ?? '';
    $phone_number = $_POST['bio-phone'] ?? '';
    $location = $_POST['bio-location'] ?? '';

    bio_value::bio_insert($dob,$description,$phone_number,$location);

}


  
}
  

?>
<?PHP

include_once __DIR__.'/__-main_load.php';

if ($_SESSION['id-user'] == $_SESSION['id-bio']){
     header("Location: /Photo-Mentor/");
}
else{
    header("Location: /Photo-Mentor/__-user-bio.php");
}




?>
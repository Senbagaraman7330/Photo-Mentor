<?PHP

include_once __DIR__.'/__-main_load.php';


$pass = "Raman";

$hasting = md5(strrev($pass."encoded-string"));

echo $hasting;

?>
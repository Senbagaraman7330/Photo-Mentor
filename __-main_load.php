<?php

// This file give the data for database connection 

include_once __DIR__.'/../__-database_values.php';

session_start();



// verification the data 

include_once __DIR__.'/verifier/__-sign-in_verify.php';

include_once __DIR__.'/verifier/__-sign-up_verfiy.php' ;

//  This function use to call the mension file  accordingly

function load_template($file_name)
{
    // This command is use to inculde the file in page where mension
    include $_SERVER['DOCUMENT_ROOT']."/Photo-Mentor/__-template/{$file_name}.php";
}

  
?>
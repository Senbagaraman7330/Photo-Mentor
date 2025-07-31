<?php

include_once __DIR__.'/../__-database_values.php';

//  This function use to call the mension file  accordingly

function load_template($file_name)
{
    // This command is use to inculde the file in page where mension
    include $_SERVER['DOCUMENT_ROOT']."/Photo-Mentor/__-template/{$file_name}.php";
}


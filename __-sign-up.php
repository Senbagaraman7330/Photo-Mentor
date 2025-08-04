<?php
//    error_reporting(E_ALL);
//       ini_set('display_errors',1);

//  It is load the main load file
include_once __DIR__.'/__-main_load.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<style>
html,
body {
    height: 100%;
}

body {
    display: flex;
    flex-direction: column;
}

main {
    flex: 1;
}
</style>

<body>

    <!-- It's load the header content from  /__-template/__-header.php  -->
    <?php

load_template('__-header');

?>

    <!-- It's load the main content from  /__-template/__-main_sign-up.php  -->
    <?php

load_template('__-main_sign-up');

?>

    <!-- It's load the footer content from  /__-template/__-footer.php  -->
    <?php

load_template('__-footer');

?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
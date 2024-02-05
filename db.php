<?php 


    // host name, user name, password, db name
    $db = mysqli_connect("localhost","root","","forms_ssb");

    if ($db) {
        //echo "Server connection successful";
    } 
    else {
        die("Not succesfull: " .mysqli_error($db));
    }



?>
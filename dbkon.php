<?php
    $dbhost = "db";
    $dbuser = "admin";
    $dbpass = "test"; 
    $dbname = "database";
    
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {
    
        die("failed to connect!");
    }
?>
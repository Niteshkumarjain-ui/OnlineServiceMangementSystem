<?php
   
   $dbHost = "localhost";
   $dbUser = "root";
   $dbPassword ="";
   $dbName = "osms_db";
   $dbPort = "3306";

    $conn = new mysqli($dbHost,$dbUser,$dbPassword,$dbName,$dbPort);


    if($conn->connect_error){
        die("Connection Failed");
    }
    // else{
    //      echo "Connected";
    // }






?>
<?php

$db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "kpi";
    $con ="";


    try{
    $mysqli = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    
    catch(mysqli_sql_exception){
        echo"Error: could not connect to the database";
    }
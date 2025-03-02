<?php

include("sqlconnect.php");

    $sql = "SELECT * FROM incomeemp1";
    
    $res = $mysqli->query($sql);
    
    $data =[];

    while($row = $res ->fetch_assoc()){
        
        array_push($data, $row);

    }


    echo json_encode($data);


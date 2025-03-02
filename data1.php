<?php

include("sqlconnect.php");

$sql = "SELECT SUM(income) AS total_amount FROM incomeemp1;";
$result = $mysqli->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
} else {
    echo "Error: Database does not have income";
}
    
?>
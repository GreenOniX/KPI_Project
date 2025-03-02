<?php

 function check_login($mysqli) 
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $querry = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($mysqli, $querry);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

//login redirect

header("location: login.php");
die;
}
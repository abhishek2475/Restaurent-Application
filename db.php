<?php
    $server = "localhost";
    $user = "root";
    $password = "manish";
    $db = "yajman";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con)
    {
    }
    else
    {
        echo mysqli_error($con);
    }
    
?>
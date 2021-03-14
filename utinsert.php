<?php
    require 'connection.php';
    
        $query= "INSERT INTO practice
        (
           `username`,
           `password`,
           `dob`,
           `gender`
       ) VALUES
       (
           '".$_POST["username"]."',
           '".$_POST["password"]."',
           '".$_POST["dob"]."',
           '".$_POST["gender"]."'
       )";
    
    mysqli_query($connection,$query);

    header("Location: displayAllEvents.php");
?>
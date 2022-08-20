<?php
    include('../config.php');

    $sql1 = "insert into message (email,subject,message,name) values ('1','1','1','1')";
    $result = mysqli_query($con,$sql1);
    if ($result)
    {
        echo "Successfully sent!";
    }
    else
    {
        echo "Error";
    }
   
?>
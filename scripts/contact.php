<?php 
    include("../config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];

    if (isset($_POST['submit'])){
        echo "okey";
        /*
        $sql1 = "INSERT INTO message ('email','subject','message','name') VALUES ($email,$subject,$message,$name)";
        $result = mysqli_query($con,$sql1);
        $mssg = "Your_message successfully sent";
        */
    }
    else {
        echo "smth went wrong..:(";
    }
    
?>
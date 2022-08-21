<?php 

    include("../config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['comments'];

    if (isset($_POST['submit'])){
        
        $sql1 = "insert into message (email,subject,message,name) values ('$email','$subject','$message','$name')";
        $result = mysqli_query($con,$sql1);
        header('Location: ../#contact');
        
    }
    else {
        echo "smth went wrong..:(";
    }
    
?>
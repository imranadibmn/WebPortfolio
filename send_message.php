<?php
if(isset($_POST['submit'])) {

    require 'connect_db.php';

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $message = $_POST['message'];

    $sql = "INSERT INTO user (firstname, lastname, email, state, zip, message) VALUES ('$firstname','$lastname','$email','$state','$zip','$message');";

    mysqli_query($conn, $sql);
    
    header("Location: index.html?message=send");

    $mailTo = "imranadibnasri@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$firstname.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

   
}

?>
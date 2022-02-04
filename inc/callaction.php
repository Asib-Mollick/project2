<?php
session_start();

if (isset($_POST['submit'])) {
    require "admin/db.php";
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $subject = trim(htmlentities($_POST['subject']));
    $message = trim(htmlentities($_POST['message']));
   
    $query= "INSERT INTO message(name, email, subject, message) VALUES ('$name','$email',' $subject','$message')";
    
    $result = mysqli_query($conntion, $query);
    
    
    if ($result) {
        $_SESSION['call'] =  " message Send successfully ";
        header('Location: ../index.php');  
        
       }
}
    
    
        
                

?>
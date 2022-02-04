<?php

session_start();


if (isset($_POST['login'])) {
    $email = trim(htmlentities($_POST['email']));
    $pass = $_POST['password'];
    $encPass = md5($pass);
    
    require_once  "db.php";
    
    
        $check = "SELECT id, name, uname, email, phone, photo FROM userdata WHERE email = '$email' AND password = '$encPass' AND status = '1'  ";
        $result = mysqli_query($conntion, $check);
          
        $check2 = "SELECT id, name, uname, email, phone, photo FROM userdata WHERE email = '$email' AND password = '$encPass'  ";
        $result2 = mysqli_query($conntion, $check2);
                
$_SESSION = [];
         if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            setcookie('login', 'yes', time()+1800, '/');

         

            $_SESSION['id'] = $data['id'];
            $_SESSION['name'] = $data['name'];
            $_SESSION['uname'] = $data['uname'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['phone'] = $data['phone'];
            $_SESSION['photo'] = $data['photo'];
            $_SESSION['status'] = $data['status'];
            
            $_SESSION['success'] = "Login Success!";
           
            header('Location: dashbroad.php');

            
         }
     
        
         elseif ((mysqli_num_rows($result2)) > 0) {
          $_SESSION['deactive'] = "Deactive user ";
          header('Location: index.php');
         }
      
          else {
             
            $_SESSION['not'] = "Email/password Not Match";
            header('Location: index.php');
          }
          
      
        }
 
?>

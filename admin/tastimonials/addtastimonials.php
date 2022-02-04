

<?php
session_start();


$error = [];

if (isset($_POST['submit'])) {
   $name = trim(htmlentities($_POST['name']));
   $designation = trim(htmlentities($_POST['designation']));
   $message = $_POST['message'];


   $photo = $_FILES['photo'];


   if (empty($name)) {
    $error ['nameerror'] =  "please enter your name ";
  }   

 
  if (empty($designation)) {
    $error  ['emailerror'] =  "please enter a valid email ";
  }   
    
  if (empty($message)) {
    $error  ['passerror'] =  "please enter your Password ";
  }   



		if (empty($error)) {

          require_once  "../db.php";

           
      $img_ext = explode('.',$photo['name']);
      $photo_name =$name. '-'.time() . '.' . end($img_ext);
      $photoname = trim($photo_name);
        if (end($img_ext) != 'jpg') {
          $errorformet = "please selecte jpg/png/jpge only";
        }
        else {
          $upload = move_uploaded_file($photo['tmp_name'],"../upload/tastimonials/".$photoname);
          if ($upload) {
            $query = " INSERT INTO tastimonials( name, designation, message, photo ) VALUES ('$name',' $designation','$message','$photoname') "; 

            $send = mysqli_query($conntion,  $query);
  
           if ($send) {
            $_SESSION['donet'] =  " Add tastimonial successfully "; 
            header('Location: tastimonials.php');  
            
           }
           
          }
        }              
    }
}

include "../inc/header.php";
?>


<div class="signup-form" style="margin: 0px 180px ;">

        <?php
          if (isset( $done)) {
         ?>
          <div class="alert alert-success">
            <p> <?php echo  $done ?>  </p>
          </div>
         <?php   
          }
        ?>
    <form action="" method="POST" enctype="multipart/form-data">
		<h2 style="padding-top: 20px;" > Add  New Tastimonial </h2>
		
          <div class="form-group">
          <span class="details">Name</span>
          <input type="text" class="form-control" name="name" placeholder="Enter Name" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
        <div class="form-group">
        <span class="details">Designation</span>
            <input type="text" class="form-control" name="designation" placeholder="Enter designation" >
				<?php 
                     if (isset($error['passerror'])) {
                      echo "<p style='color:red';>" . $error['passerror'] . "</p>";
                    }                              
                ?>
        </div>   
  
        <div class="form-group">
        <span class="details">Message</span>
        	<textarea name="message"  class="form-control"></textarea>   
				<?php 
                     if (isset($error['emailerror'])) {
                      echo "<p style='color:red';>" . $error['emailerror'] . "</p>";
                    }                              
                ?>
        </div>
	

        
        <div class="form-group " >
         
              <input type="file"  class="form-control" style="padding: 3px;" name="photo" >
              <?php 
                     if (isset($errorformet)) {
                      echo "<p style='color:red';>" . $errorformet . "</p>";
					 }
           ?>
        </div>
        
		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Upload">
    </form>
	
</div>




<?php

require_once "../inc/footer.php"
?>
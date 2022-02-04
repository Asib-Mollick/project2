

<?php

session_start();

$error = [];
$_SESSION = [];

if (isset($_POST['submit'])) {
   $title = trim(htmlentities($_POST['title']));
   $header = trim(htmlentities($_POST['header']));
   $description = trim(htmlentities($_POST['description']));
   $button_text = $_POST['button_text'];
   $button_url = $_POST['button_url'];

   $photo = $_FILES['photo'];


   if (empty($title)) {
    $error ['nameerror'] =  "please enter your name ";
  }   
  if (empty($header)) {
    $error ['nameerror'] =  "please enter your name ";
  }  
 
  if (empty($description)) {
    $error  ['emailerror'] =  "please enter a valid email ";
  }   
    
  if (empty($button_text)) {
    $error  ['passerror'] =  "please enter your Password ";
  }   

  if (empty($button_url)) {
    $error  ['cpasserror'] =  "please enter your Confirm Password  ";

  		}

		if (empty($error)) {

          require_once  "../db.php";

           
      $img_ext = explode('.',$photo['name']);
      $photo_name =$title. '-'.time() . '.' . end($img_ext);
      $photoname = trim($photo_name);
        if (end($img_ext) != 'jpg') {
          $errorformet = "please selecte jpg/png/jpge only";
        }
        else {
          $upload = move_uploaded_file($photo['tmp_name'],"../upload/profile/".$photoname);
          if ($upload) {
            $query = " INSERT INTO banner(  header, title,description, button_text, button_url, bannerimg ) VALUES ('$header','$title', ' $description','$button_text','$button_url','$photoname') "; 

            $send = mysqli_query($conntion,  $query);
  
           if ($send) {
            $_SESSION['done'] =  " Banner upload successful ";
            header('Location: banner.php');     
            
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
		<h2 style="padding-top: 20px;" > Add Banner </h2>
		
          <div class="form-group">
          <span class="details">Banner Header</span>
          <input type="text" class="form-control" name="header" placeholder="Enter Banner title" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
        <div class="form-group">
          <span class="details">Banner Title</span>
          <input type="text" class="form-control" name="title" placeholder="Enter Banner header" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
  
        <div class="form-group">
        <span class="details">Banner description</span>
        	<textarea name="description"  class="form-control"></textarea>   
				<?php 
                     if (isset($error['emailerror'])) {
                      echo "<p style='color:red';>" . $error['emailerror'] . "</p>";
                    }                              
                ?>
        </div>
		<div class="form-group">
        <span class="details">Button Text</span>
            <input type="text" class="form-control" name="button_text" placeholder="Enter Button Text" >
				<?php 
                     if (isset($error['passerror'])) {
                      echo "<p style='color:red';>" . $error['passerror'] . "</p>";
                    }                              
                ?>
        </div>
		<div class="form-group">
        <span class="details">Button URL</span>
            <input type="text" class="form-control" name="button_url" placeholder="Enter Button URL" >
				<?php 
                     if (isset($error['cpasserror'])) {
                      echo "<p style='color:red';>" . $error['cpasserror'] . "</p>";
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


<?php
session_start();
require_once "../db.php";



$id = $_GET["id"];

$query = " SELECT * FROM knowabout WHERE id= $id";

$result = mysqli_query($conntion, $query);

if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
}


$error = [];
$_SESSION = [];


if (isset($_POST['submit'])) {
   $header = trim(htmlentities($_POST['header']));
   $title = trim(htmlentities($_POST['title']));
   $description = trim(htmlentities($_POST['description']));
   $description2 = trim(htmlentities($_POST['description2']));
   $button_text = $_POST['button_text'];
   $button_url = $_POST['button_url'];

   $photo = $_FILES['photo'];



   if (empty($title)) {
    $error ['nameerror'] =  "please enter your name ";
  }   

  if (empty($header)) {
    $error ['unameerror'] =  "please enter user name ";
  }   
 
  if (empty($description)) {
    $error  ['emailerror'] =  "please enter a valid email ";
  }   
    
  if (empty($description2)) {
    $error  ['emailerror2'] =  "please enter a valid email ";
  }   
   
  if (empty($button_text)) {
    $error  ['passerror'] =  "please enter your Password ";
  }   

  if (empty($button_url)) {
    $error  ['cpasserror'] =  "please enter your Confirm Password  ";

  		}

      if ($photo['name']) {
        $img_ext = explode('.',$photo['name']);
        $photo_name =$title. '-'.time() . '.' . end($img_ext);
        $photoname = trim($photo_name);
        $upload = move_uploaded_file($photo['tmp_name'],"../upload/aboutus/".$photoname);

        $filepath = "../upload/aboutus/".$data['photo'];

        if (file_exists($filepath)) {
            unlink($filepath) ;
        }   
        else {
            echo " image not Found ";
        }
            $query = " UPDATE knowabout SET header='$header',title='$title',description='$description',description2='$description2',button_text='$button_text', button_url='$button_url', photo='$photoname' WHERE id = $id";  
            $send = mysqli_query($conntion,  $query);   
}

 else {
    $query = "UPDATE knowabout SET header='$header',title='$title',description='$description',description2='$description2',button_text='$button_text', button_url='$button_url' WHERE id = $id";

    $send = mysqli_query($conntion,  $query);            
 } 
     if ($send) {
      $_SESSION['done'] =  " Update successfully "; 
        header('Location: aboutus.php');     
     }         
}              
          


include "../inc/header.php";


?>


<div class="signup-form" style="margin: 0px 180px ;">

        
    <form action="" method="POST" enctype="multipart/form-data">
		<h2 style="padding-top: 20px;" > Edit solutions Section </h2>
		
    <div class="form-group">
        <span class="details"> Header</span>
        <input type="text" class="form-control" name="header" value="<?= $data['header'] ?>" >
        	<?php 
                     if (isset($error['unameerror'])) {
                      echo "<p style='color:red';>" . $error['unameerror'] . "</p>";
                    }                              
                ?>
        </div>
          <div class="form-group">
          <span class="details"> Title</span>
          <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
      
  
        <div class="form-group">
        <span class="details">description</span>
        	<textarea name="description"  class="form-control"> <?= $data['description'] ?></textarea>   
				<?php 
                     if (isset($error['emailerror'])) {
                      echo "<p style='color:red';>" . $error['emailerror'] . "</p>";
                    }                              
                ?>
        </div>
        <div class="form-group">
        <span class="details"> description 2</span>
        	<textarea name="description2"  class="form-control"> <?= $data['description2'] ?></textarea>   
				<?php 
                     if (isset($error['emailerror'])) {
                      echo "<p style='color:red';>" . $error['emailerror'] . "</p>";
                    }                              
                ?>
        </div>
		<div class="form-group">
        <span class="details">Button Text</span>
            <input type="text" class="form-control" name="button_text" value="<?= $data['button_text'] ?>" >
				<?php 
                     if (isset($error['passerror'])) {
                      echo "<p style='color:red';>" . $error['passerror'] . "</p>";
                    }                              
                ?>
        </div>
		<div class="form-group">
        <span class="details">Button URL</span>
            <input type="text" class="form-control" name="button_url" value="<?= $data['button_url'] ?>" >
				<?php 
                     if (isset($error['cpasserror'])) {
                      echo "<p style='color:red';>" . $error['cpasserror'] . "</p>";
					 }
					   
					
					
                ?>
        </div>  
        
        <div class="form-group " >
         
         <input type="file"  class="form-control" style="padding: 3px;" name="photo" >
         <img src="../upload/aboutus/<?=$data['photo'] ?>" width="100" alt="">
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
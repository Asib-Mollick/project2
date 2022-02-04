

<?php
session_start();
require_once "../db.php";

$id = $_GET["id"];

$query = " SELECT * FROM solutions WHERE id= $id";

$result = mysqli_query($conntion, $query);

if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
}


$error = [];

if (isset($_POST['submit'])) {
   $header = trim(htmlentities($_POST['header']));
   $title = trim(htmlentities($_POST['title']));
   $description = trim(htmlentities($_POST['description']));
   $description2 = trim(htmlentities($_POST['description2']));
   $button_text = $_POST['button_text'];
   $button_url = $_POST['button_url'];

   


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

		if (empty($error)) {

         
           
            $query = " UPDATE solutions SET header='$header',title='$title',description='$description',description2='$description2',button_text='$button_text', button_url='$button_url' WHERE id = $id"; 

            $send = mysqli_query($conntion,  $query);
  
           if ($send) {
            $_SESSION['done'] =  " Update successfully "; 
            header('Location: solution.php');   
                
            
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
		<h2 style="padding-top: 20px;" > Edit solutions Section </h2>
		
    <div class="form-group">
        <span class="details">Banner Header</span>
        <input type="text" class="form-control" name="header" value="<?= $data['header'] ?>" >
        	<?php 
                     if (isset($error['unameerror'])) {
                      echo "<p style='color:red';>" . $error['unameerror'] . "</p>";
                    }                              
                ?>
        </div>
          <div class="form-group">
          <span class="details">Banner Title</span>
          <input type="text" class="form-control" name="title" value="<?= $data['title'] ?>" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
      
  
        <div class="form-group">
        <span class="details">Banner description</span>
        	<textarea name="description"  class="form-control"> <?= $data['description'] ?></textarea>   
				<?php 
                     if (isset($error['emailerror'])) {
                      echo "<p style='color:red';>" . $error['emailerror'] . "</p>";
                    }                              
                ?>
        </div>
        <div class="form-group">
        <span class="details">Banner description 2</span>
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
        
        
   
        
		<div class="form-group">
            <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Upload">
    </form>
	
</div>




<?php

require_once "../inc/footer.php"
?>
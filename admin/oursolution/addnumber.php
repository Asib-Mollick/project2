

<?php
session_start();
require_once "../db.php";

$id = $_GET["id"];

$query = " SELECT * FROM numbers WHERE id= $id";

$result = mysqli_query($conntion, $query);

if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
}


$error = [];

if (isset($_POST['submit'])) {
   $Work_Hours = trim(htmlentities($_POST['Work_Hours']));
   $Great_Reviews = trim(htmlentities($_POST['Great_Reviews']));
   $Projects_Done = trim(htmlentities($_POST['Projects_Done']));
   $Awards_Won = trim(htmlentities($_POST['Awards_Won']));
  
   


   if (empty($Work_Hours)) {
    $error ['nameerror'] =  "please enter your name ";
  }   

  if (empty($Great_Reviews)) {
    $error ['unameerror'] =  "please enter user name ";
  }   
 
  if (empty($Projects_Done)) {
    $error  ['emailerror'] =  "please enter a valid email ";
  }   
    
  if (empty($Awards_Won)) {
    $error  ['emailerror2'] =  "please enter a valid email ";
  }   
   
 
 

		if (empty($error)) {

         
           
            $query = " UPDATE numbers SET Work_Hours='$Work_Hours',Great_Reviews='$Great_Reviews',Projects_Done='$Projects_Done',Awards_Won='$Awards_Won' WHERE id = $id"; 

            $send = mysqli_query($conntion,  $query);
  
           if ($send) {
            $_SESSION['done'] =  " Update successfully "; 
            header('Location: numbers.php');
                
            
           }
                    
    }
}

include "../inc/header.php";
?>


<div class="signup-form" style="margin: 0px 280px ;">

        <?php
          if (isset( $done)) {
         ?>
          <div class="alert alert-success" style="text-align: center">
            <p> <?php echo  $done ?>  </p>
          </div>
         <?php   
          }
        ?>
    <form action="" method="POST" enctype="multipart/form-data">
		<h2 style="padding-top: 20px;" > Edit solutions Section </h2>
		
    <div class="form-group">
        <span class="details">Work Hours</span>
        <input type="text" class="form-control" name="Work_Hours" value="<?= $data['Work_Hours'] ?>" >
        	<?php 
                     if (isset($error['unameerror'])) {
                      echo "<p style='color:red';>" . $error['unameerror'] . "</p>";
                    }                              
                ?>
        </div>
          <div class="form-group">
          <span class="details">Great Reviews</span>
          <input type="text" class="form-control" name="Great_Reviews" value="<?= $data['Great_Reviews'] ?>" >
                <?php 
                     if (isset($error['nameerror'])) {
                      echo "<p style='color:red';>" . $error['nameerror'] . "</p>";
                    }                              
                ?>
        </div>
      
  
    
		<div class="form-group">
        <span class="details">Projects Done</span>
            <input type="text" class="form-control" name="Projects_Done" value="<?= $data['Projects_Done'] ?>" >
				<?php 
                     if (isset($error['passerror'])) {
                      echo "<p style='color:red';>" . $error['passerror'] . "</p>";
                    }                              
                ?>
        </div>
		<div class="form-group">
        <span class="details">Awards Won</span>
            <input type="text" class="form-control" name="Awards_Won" value="<?= $data['Awards_Won'] ?>" >
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
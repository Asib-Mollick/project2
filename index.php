<?php
require_once "inc/header.php";
?> 

<?php
include_once "inc/banner.php";
?>

<div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.html" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

<?php
include_once "inc/service.php";
include_once "inc/funfact.php";
require_once "admin/db.php";

$querya = "SELECT * FROM aboutus where id = '1' ;";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
  }



?>
  
   

  <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span><?= $data['header'] ?></span>
                    <h2><?= $data['title'] ?> <em>our company</em></h2>
                    <p><?= $data['description'] ?><br><br><?= $data['description2'] ?></p>
                    <a href="<?= $data['button_url'] ?>" class="filled-button"><?= $data['button_text'] ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include_once "inc/tastimonials.php";
include_once "inc/call.php";

?>
  



 









<?php
require_once "inc/footer.php";
?> 
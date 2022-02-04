<?php

require_once "admin/db.php";

$querya = "SELECT * FROM tastimonials";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}
?>

<div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">

            <?php
                    foreach ($datas as $key => $data){
                   
                ?>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4><?= $data['name'] ?></h4>
                  <span><?= $data['designation'] ?></span>
                  <p><?= $data['message'] ?></p>
                </div>
                <img src="admin/upload/tastimonials/<?=$data['photo'] ?>" alt="">
              </div>
              <?php
                     }
                ?>
            
            </div>
          </div>
        </div>
      </div>
    </div>
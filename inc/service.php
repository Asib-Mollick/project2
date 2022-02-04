<?php

require_once "admin/db.php";

$querya = "SELECT id, title, description, button_text, button_url, status, serviceimg FROM services";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}




?>



<div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Financial <em>Services</em></h2>
              <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
            </div>
          </div>

          <?php
                    foreach ($datas as $key => $data){
                   
                ?>
          <div class="col-md-4">
            <div class="service-item">
              <img src="admin/upload/service/<?=$data['serviceimg'] ?>" alt="">
              <div class="down-content">
                <h4><?= $data['title'] ?></h4>
                <p><?= $data['description'] ?></p>
                <a href="<?= $data['button_url'] ?>" class="filled-button"><?= $data['button_text'] ?></a>
              </div>
            </div>
          </div>
          <?php

                }
          ?>
       
          
        </div>
      </div>
    </div>




    <!-- <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_02.jpg" alt="">
              <div class="down-content">
                <h4>Market Analysis</h4>
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_03.jpg" alt="">
              <div class="down-content">
                <h4>Historical Data</h4>
                <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                <a href="" class="filled-button">Read More</a>
              </div>
            </div>
          </div> -->
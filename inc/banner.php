<?php
require_once "admin/db.php";

$querya = "SELECT id, title, header, description, button_text, button_url, status, bannerimg FROM banner";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}

function siteurl(){
  $uri = explode('/', $_SERVER['REQUEST_URI']);
  $protocol = explode('/', $_SERVER['SERVER_PROTOCOL']);

  echo strtolower($protocol['0'] . "://" . $_SERVER['SERVER_NAME'] . "/". $uri['1']);
}

?>

<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <?php
                    foreach ($datas as $key => $data){
                   
                ?>
                 <!-- style="background-image: 'admin/upload/profile/<?=$data['bannerimg'] ?>';" -->
          <div class="item item-1">
            <div class="img-fill" style="background-image: url(<?php  siteurl();  ?>/admin/upload/profile/<?=$data['bannerimg']?>) ;">
                <div class="text-content">
                  <h6><?= $data['header'] ?></h6>
                  <h4><?= $data['title'] ?></h4>
                  <p><?= $data['description'] ?></p>
                  <a href="<?= $data['button_url'] ?>" class="filled-button"><?= $data['button_text'] ?></a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <?php

                    }
            ?>
       
        </div>
    </div>





<?php

require_once "admin/db.php";

$querya = "SELECT * FROM solutions where id = '1' ;";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_assoc($result);
  }


  $query2 = "SELECT * FROM numbers where id = '1' ;";

  $result2 = mysqli_query($conntion, $query2);
  
  
  if (mysqli_num_rows($result2)) {
      $data2 = mysqli_fetch_assoc($result2);
    }


?>




<div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span><?= $data['header'] ?></span>
              <h2><?= $data['title'] ?> <em>business growth</em></h2>
              <p><?= $data['description'] ?> 
              <br><br><?= $data['description2'] ?></p>
              <a href="<?= $data['button_url'] ?>" class="filled-button"><?= $data['button_text'] ?></a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit"><?= $data2['Work_Hours'] ?></div>
                  <div class="count-title">Work Hours</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit"><?= $data2['Great_Reviews'] ?></div>
                  <div class="count-title">Great Reviews</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit"><?= $data2['Projects_Done'] ?></div>
                  <div class="count-title">Projects Done</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit"><?= $data2['Awards_Won'] ?></div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
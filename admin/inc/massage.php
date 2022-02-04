<?php

require_once "../db.php";

$querya = "SELECT * FROM message ";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}


require_once "../inc/header.php";

?>

<div class="container" style="margin-top: 20px;">

<div class="card-header" style="text-align: center;">
    <h2>All massages</h2>
</div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">message</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach ($datas as $key => $data){
                   
                ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['subject'] ?></td>
                        <td><?= $data['message'] ?></td>
                      
                    </tr>
                <?php
                     }
                ?>
            </tr>
           
        </tbody>
        </table>
</div>












<?php

require_once "../inc/footer.php"
?>
<?php
session_start();
require_once "../inc/header.php";
require_once "../db.php";




$querya = "SELECT * FROM aboutus ";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}




?>

<div class="container" style="margin-top: 20px;">
<?php
          if (isset($_SESSION['done'])) {
         ?>
          <div class="alert alert-success" style="text-align: center">
            <p> <?php echo $_SESSION['done'] ?>  </p>
          </div>
         <?php   
          }
        ?>

<div class="card-header" style="text-align: center;">
    <h2>About us</h2>
</div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Header </th>
            <th scope="col">Title</th>
            <th scope="col">description</th>
            <th scope="col">description2</th>
            <th scope="col">photo</th>
            <th scope="col">Action</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach ($datas as $key => $data){
                   
                ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $data['header'] ?></td>
                        <td><?= $data['title'] ?></td>
                        <td><?= $data['description'] ?></td>
                        <td><?= $data['description2'] ?></td>
                        <td> <img src="../upload/aboutus/<?=$data['photo'] ?>" width="50" alt=""></td>
                        
                        <td>
                            
                            <a href="editaboutus.php?id=<?= $data['id'] ?>" class='btn btn-success btn-sm' role='button'>Edit</a>
                          
                        </td>
                    </tr>
                <?php
                     }
                ?>
            </tr>
           
        </tbody>
        </table>
</div>












<?php
session_unset();
require_once "../inc/footer.php"
?>
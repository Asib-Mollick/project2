<?php
session_start();
require_once "../db.php";

$querya = "SELECT * FROM tastimonials";

$result = mysqli_query($conntion, $querya);


if (mysqli_num_rows($result)) {
    $datas = mysqli_fetch_all($result, true);
}

require_once "../inc/header.php";

?>

<div class="container" style="margin-top: 20px;">
<?php
          if (isset($_SESSION['donet'])) {
         ?>
          <div class="alert alert-success" style="text-align: center">
            <p> <?php echo $_SESSION['donet'] ?>  </p>
          </div>
         <?php   
          }
        ?>
<div class="card-header" style="text-align: center;">
    <h2>All Tastimonials</h2>
</div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">message</th>
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
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['designation'] ?></td>
                        <td><?= $data['message'] ?></td>
                        <td> <img src="../upload/tastimonials/<?=$data['photo'] ?>" width="50" alt=""></td>
                      

                        
                        <td>
                            
                            <a href="useredit.php?id=<?= $data['id'] ?>" class='btn btn-success btn-sm' role='button'>Edit</a>
                            <a href="delete.php?id=<?= $data['id'] ?>" class='btn btn-danger btn-sm' role='button'> Delete</a>
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
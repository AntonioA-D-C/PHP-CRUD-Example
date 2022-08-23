<?php 
session_start();

require 'partials\db\BDConexion.php';
include 'partials\db\BDConexion.php';
if(isset($_SESSION['userID'])){

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a la aplicacion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php require("sidebar.php")?>
<div class="container">
    <?php if(isset($_SESSION['usuario'])):?>
<h1>Departamentos</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Crear nuevo departamento
</button>
<br><br>
<!-- Modal -->


  <table class="table-bordered table table-hover">
    <tr>
    <th>Count</th>
      <th>Nombre</th>
    </tr>
      <?php
      $getdept= "SELECT idDept, deptNom FROM departamento";
      $getdeptquery= mysqli_query($mysqli, $getdept);
      $number= 1;
      while($rows = mysqli_fetch_array($getdeptquery)){
      ?>
    <tr>
      <td><?php echo $number?></td>
      <td><?php echo $rows['deptNom']?></td>
      <td>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $rows['idDept']?>">
  Edit
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $rows['idDept']?>">
 Delete
</button>
      </td>
    </tr>
    <?php 
   include 'partials\backend\departamentoModal\delete-modal.php';
    include 'partials\backend\departamentoModal\edit-modal.php';
    $number++;
  }
     ?>
   </table>
</div>
<?php include 'partials\backend\departamentoModal\add-modal.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</html>
<?php endif; ?>
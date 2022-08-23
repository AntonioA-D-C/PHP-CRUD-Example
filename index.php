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
<?php if(isset($_SESSION['usuario'])):?>
<?php require("sidebar.php")?>

<div class="container">
   <?php else:?>
    <h1>Login o Sign Up</h1>
    <a href='entrar.php'>Login</a> o 
    <a href='registro.php'>Registrate</a> 

    <?php endif; ?>
    <?php if(isset($_SESSION['usuario'])):?>
<h1>Empleados</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Crear nuevo empleado
</button>
<br><br>
<!-- Modal -->

  <table class="table-bordered table table-hover">
    <tr>
      <th>Count</th>
      <th>Name</th>
      <th>Apellido</th>
      <th>Ocupacion</th>
      <th>Departamento</th>
    </tr>
      <?php
      $getdata= "SELECT * FROM employee";
      $getdataquery= mysqli_query($mysqli, $getdata);
      $number= 1;
      while($rows = mysqli_fetch_array($getdataquery)){
      ?>

    <tr>
      <td><?php echo $number?></td>
      <td><?php echo $rows['nombreCompleto']?></td>
      <td><?php echo $rows['apellidos']?></td>
      <?php 
       $getdataname= "SELECT NombreOcupacion FROM ocupacion WHERE idOcupacion ='{$rows['idOcupacion']}'";
       $namequery= mysqli_query($mysqli, $getdataname);
      $jobrow = mysqli_fetch_array($namequery)?>
      <td><?php echo $jobrow['NombreOcupacion']?></td>
      <?php
       $getdataname2= "SELECT idDept FROM ocupacion WHERE idOcupacion ='{$rows['idOcupacion']}'";
       $namequery2= mysqli_query($mysqli, $getdataname2);
       $jobrow2 = mysqli_fetch_array($namequery2);
       $getdeptName= "SELECT deptNom FROM departamento WHERE idDept ='{$jobrow2['idDept']}'";
       $namequery3= mysqli_query($mysqli, $getdeptName);
       $jobrow3 = mysqli_fetch_array($namequery3)?>
      <td><?php echo $jobrow3['deptNom']?></td>
      <td>
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $rows['idEmpleado']?>">
  Edit
</button>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $rows['idEmpleado']?>">
 Delete
</button>
      </td>
    </tr>
    <?php 
    include 'partials\backend\empleadoModal\delete-modal.php';
    include 'partials\backend\empleadoModal\edit-modal.php';
    $number++;
  }
     ?>
   </table>
</div>
<?php include 'partials\backend\empleadoModal\add-modal.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</html>
<?php endif; ?>
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
<figure></figure>
<div class="container">
   
    <h1><span><i class='bx bxl-c-plus-plus'></i></span>Cavesoft</h1>
<br>Welcome, <?= $_SESSION['nombre']?>
   <br>You are successfully logged in
   <br>
   <br>Feel free to access our page through the sidebar on the left
   <?php else:?>
    <h1>Login o Sign Up</h1>
    <a href='entrar.php'>Login</a> o 
    <a href='registro.php'>Registrate</a> 

    <?php endif; ?>
   </div>
   </body>
   </html>
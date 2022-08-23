<?php
/*require 'BDConexion.php';
$message="";

if (!empty($_POST['email']) && !empty($_POST['password'])){
 $sql="INSERT INTO users (email, password) VALUES (:email, :password)";
 $stmt= $conn->prepare($sql);
 $stmt->bindParam(':email', $_POST['email']);
 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 $stmt->bindParam(':password',$password);

 if ($stmt->execute()) { 
    $message = 'Successfully created new user';
 } else{
    $message = 'An error has occurred creating your password';
 }
}
*/
require_once 'partials\db\BDConexion.php';
$message="";
$nombre="";
$apellido="";
$usuario="";
$clave="";
if(isset($_POST["registrar"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $usuario=$_POST["usuario"];
    $clave=$_POST["password"];
    $confirm=$_POST['confirm_password'];
    $rol=2;
    $date = date('y-m-d H:i:s');
    $user_password_hash=password_hash($clave, PASSWORD_DEFAULT);
    if(!empty($nombre) && $usuario!="" && $clave!=""){
        if ($clave ==$confirm){
        $sqltest= "SELECT  * FROM usuarios WHERE (username ='$usuario')";
        $testresult=mysqli_query($mysqli, $sqltest);
        if(mysqli_num_rows($testresult)>0){
            echo "Ese usuario ya existe";
        }
        else{
        $sql="INSERT INTO usuarios(username, nombreCompleto, apellido, rol, fechaIngreso, password) VALUES ('{$usuario}', '{$nombre}', '{$apellido}', '{$rol}', '{$date}', '{$user_password_hash}')";
    }
        }
        else{
            echo "Contraseña no coincide";
        }
    }
    $insertar=mysqli_query($mysqli, $sql);
    if($insertar){
        echo "Registro Insertado";
        $insertar= false;
    }
    else{
        echo "No se ha insertado usuario";
        $insertar= false;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
<?php require "partials/header.php"?>

<?php if(!empty($message)): ?>
     <p><?= $message ?></p>
<?php endif; ?>

    <h1>Registrate</h1>
    <span>O <a href="entrar.php">Logueate</a></span>
    
    <form action="registro.php" method="post">
    <input class="datainput" type="text" name="nombre" placeholder="Ingrese su nombre" required></input></br>
    <input class="datainput" type="text" name="apellido" placeholder="Ingrese su apellido" required></input></br>
    <input class="datainput" type="email" name="usuario" placeholder="Ingrese su email" required></input></br>
    <input class="datainput" type="password"  name="password" placeholder="Ingrese su contraseña"></input></br>
    <input class="datainput" type="password"  name="confirm_password" placeholder="Confirmar contraseña" required></input></br>
    <button class="datainput" type="submit" class ="btn btn-primary mb-3" name="registrar" class="button">Registro</button>
</form>
</body>
</html>



<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <h1>Registrate</h1>
    <span>O <a href="entrar.php">Logueate</a></span>
    
    <form action="registro.php" method="post">
    <input type="text" name="email" placeholder="Ingrese su email"></input></br>
    <input type="password"  name="password" placeholder="Ingrese su contraseña"></input></br>
    <input type="password"  name="confirm_password" placeholder="Confirmar contraseña"></input></br>
    <input class="button" type= "submit" value="Send"></input>
</form>
</body>
</html>
-->
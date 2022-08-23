<?php 
/*
session_start();
if(isset($_SESSION['user_id'])){
    header('Location:/phpExample');
}

require 'BDConexion.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records -> bindParam(':email', $POST(['email']));
    $record ->execute();
    $results= $records->fetch(PDO::FETCH_ASSOC);
   
    $message='';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: /phpExample');
    } else{
        $message= "Sorry, those credentials do not match";
    }
   }
   */
  require_once 'partials\db\BDConexion.php';
if(isset($_POST["entrar"])){
    $usuario=$_POST["usuario"];
    $clave=$_POST["password"];
    $date = date('y-m-d H:i:s');
    if($usuario!="" && $clave!=""){
        $query= "SELECT * FROM usuarios WHERE (username = '$usuario')";
        $result= mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($clave, $row['password'])){
                echo "Contraseña aceptada";
                session_start();
                $_SESSION['userID']= $row['usuarioID'];
                $_SESSION['nombre']= $row['nombreCompleto'];
                $_SESSION['apellido']= $row['apellido'];
                $_SESSION['usuario']= $usuario;
                $lastLogin= "UPDATE usuarios SET lastLogin= '{$date}' WHERE usuarioID=$row[usuarioID]";
                $updateLogin=mysqli_query($mysqli, $lastLogin);
                header('Location:/phpExample/home.php');
                exit();
            }
            else{
                $message = "Contraseña o nombre de usuario incorrectos";
                echo $message;
            }
        }
    }else {
        echo "Usuario inexistente";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<?php require "partials/header.php"?>

    <?php if(!empty($message)):?>
        <p><?= $message ?></p>
        <?php endif;?>

  <h1>Login</h1>
    <span>O <a href="registro.php">Registrate</a></span>
    
    <form action="entrar.php" method="post">
        <label><input class="datainput" type="text" name="usuario" value="" placeholder="Ingrese su email"></input></label></br>
        <label><input class="datainput" type="password"  name="password" value="" placeholder="Ingrese su contraseña"></input></label></br>
        <button type="submit" class="btn btn-primary mb-3" name="entrar">Entrar</button>
    </form>
</body>
</html>
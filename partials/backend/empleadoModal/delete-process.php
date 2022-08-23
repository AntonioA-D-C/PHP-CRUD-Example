<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idEmpleado'];

if (isset($_POST["delete"])){
    $nombre= $_POST["nombreCompleto"];
     $apellido= $_POST["apellidos"];
     $ocupacionID= $_POST["idOcupacion"];
    
     $delete= "DELETE FROM employee WHERE idEmpleado=$id";
      $deletequery= mysqli_query($mysqli, $delete);
      if($deletequery){
        echo "Registro Borrado";
    }
    else{
        echo "Fallo total";
        echo "Test";
    }
    echo "<script>alert('DELETED');window.location.href='../../../index.php'</script>";
    }
?>

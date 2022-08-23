<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idOcupacion'];

if (isset($_POST["delete"])){
    $nombreEmpleo= $_POST["NombreOcupacion"];
    $descripcion= $_POST["Descripcion"];
    $idDept= $_POST["idDept"];
    
     $delete= "DELETE FROM ocupacion WHERE idOcupacion=$id";
      $deletequery= mysqli_query($mysqli, $delete);
      if($deletequery){
        echo "Registro Borrado";
    }
    else{
        echo "Fallo total";
    }
    echo "<script>alert('DELETED');window.location.href='../../../ocupaciones.php'</script>";
    }
?>

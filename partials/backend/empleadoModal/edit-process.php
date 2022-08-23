<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idEmpleado'];

if (isset($_POST["edit"])){
    $nombre= $_POST["nombreCompleto"];
     $apellido= $_POST["apellidos"];
     $ocupacionID= $_POST["idOcupacion"];
    
      $update= "UPDATE employee SET nombreCompleto= '{$nombre}', apellidos='{$apellido}', idOcupacion='{$ocupacionID}' WHERE idEmpleado=$id";
      $updatequery= mysqli_query($mysqli, $update);
      if($updatequery){
        echo "Registro Insertado";
    }
    else{
        echo "Fallo total";
    }
    echo "<script>alert('SUCCESS');window.location.href='../../../index.php'</script>";
    }
    
?>

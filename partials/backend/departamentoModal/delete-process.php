<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idDept'];
if (isset($_POST["delete"])){
    $nombreDept= $_POST["deptNom"];
    
     $delete= "DELETE FROM departamento WHERE idDept=$id";
      $deletequery= mysqli_query($mysqli, $delete);
      if($deletequery){
        echo "Registro Borrado";
    }
    else{
        echo "Fallo total";
    }
    echo "<script>alert('DELETED');window.location.href='../../../departamento.php'</script>";
    }
?>
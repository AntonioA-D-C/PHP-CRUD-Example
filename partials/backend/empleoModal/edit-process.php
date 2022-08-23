
<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idOcupacion'];

if (isset($_POST["edit"])){
    $nombreEmpleo= $_POST["NombreOcupacion"];
 $descripcion= $_POST["Descripcion"];
 $idDept= $_POST["idDept"];
    
      $update= "UPDATE ocupacion SET NombreOcupacion= '{$nombreEmpleo}', Descripcion='{$descripcion}',  idDept='{$idDept}' WHERE  idOcupacion=$id";
      $updatequery= mysqli_query($mysqli, $update);
      if($updatequery){
        echo "Registro Insertado";
    }
    else{
        echo "Fallo total";
    }
    echo "<script>alert('SUCCESS');window.location.href='../../../ocupaciones.php'</script>";
    }
else
{
    echo "You're a cuck";
}
?>



<?php
include('..\..\db\BDConexion.php');
echo $id=$_GET['idDept'];

if (isset($_POST["edit"])){
    $nombreDept= $_POST["deptNom"];
    
      $update= "UPDATE departamento SET deptNom= '{$nombreDept}' WHERE  idDept =$id";
      $updatequery= mysqli_query($mysqli, $update);
      if($updatequery){
        echo "Registro Insertado";
    }
    else{
        echo "Fallo total";
    }
    echo "<script>alert('SUCCESS');window.location.href='../../../departamento.php'</script>";
    }
else
{
    echo "You're a cuck";
}
?>


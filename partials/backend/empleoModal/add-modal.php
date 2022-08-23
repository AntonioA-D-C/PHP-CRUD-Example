<?php
if (isset($_POST["submit"])){
$nombreEmpleo= $_POST["NombreOcupacion"];
 $descripcion= $_POST["Descripcion"];
 $idDept= $_POST["idDept"];

  $insert= "INSERT INTO ocupacion(NombreOcupacion, Descripcion, idDept) VALUES('{$nombreEmpleo}', '{$descripcion}', '{$idDept}')";
  $insertquery= mysqli_query($mysqli, $insert);
  if($insertquery){
    echo "Registro Insertado";
}
else{
    echo "Fallo total";
}
echo "<script>alert('SUCCESS');window.location.href='ocupaciones.php'</script>";
}
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear nuevo empleo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <form action="ocupaciones.php" method="post">
                <div class="col-6">
                    <div class="form-group">
                    <label>Nombre</label>
                        <input class="datainput" type="text" class="form-control" name="NombreOcupacion">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input class="datainput" type="textarea" class="form-control" name="Descripcion">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                    <label>DepartamentoId</label>
                        <select class="datainput" type="select" class="form-control" name="idDept">
                        <?php 
                        $getdataname= "SELECT * FROM departamento";
                        $namequery= mysqli_query($mysqli, $getdataname);
                        while($jobrow = mysqli_fetch_array($namequery)){
                          echo "<option value='".$jobrow["idDept"]."'>".$jobrow["deptNom"]."</option>";
                        }
                   
                        ?>
                        </select>
                    </div>
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

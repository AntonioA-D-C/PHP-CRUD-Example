<?php
if (isset($_POST["submit"])){
$nombre= $_POST["nombreCompleto"];
 $apellido= $_POST["apellidos"];
 $ocupacionID= $_POST["idOcupacion"];

  $insert= "INSERT INTO employee(nombreCompleto, apellidos, idOcupacion) VALUES('{$nombre}', '{$apellido}', '{$ocupacionID}')";
  $insertquery= mysqli_query($mysqli, $insert);
  if($insertquery){
    echo "Registro Insertado";
}
else{
    echo "Fallo total";
}
echo "<script>alert('SUCCESS');window.location.href='index.php'</script>";
}
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear nuevo empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <form action="index.php" method="post">
                <div class="col-6">
                    <div class="form-group">
                    <label>Name</label>
                        <input class="datainput" type="text" class="form-control" name="nombreCompleto">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Apellido</label>
                        <input class="datainput" type="text" class="form-control" name="apellidos">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                    <label>OcupacionId</label>
                        <select class="datainput" type="select" class="form-control" name="idOcupacion">
                        <?php 
                        $getdataname= "SELECT * FROM ocupacion";
                        $namequery= mysqli_query($mysqli, $getdataname);
                        while($jobrow = mysqli_fetch_array($namequery)){
                          echo "<option value='".$jobrow["idOcupacion"]."'>".$jobrow["NombreOcupacion"]."</option>";
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


<div class="modal fade" id="editModal<?php echo $rows['idEmpleado']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="partials\backend\empleadoModal\edit-process.php?idEmpleado=<?php echo $rows["idEmpleado"]?>" method="post">
        <div class="row">
                <div class="col-6">
                    <div class="form-group">
                    <label>Name</label>
                        <input class="datainput" type="text" class="form-control" name="nombreCompleto" value="<?php echo $rows['nombreCompleto']?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Apellido</label>
                        <input  class="datainput" type="text" class="form-control" name="apellidos" value="<?php echo $rows['apellidos']?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                    <label>Ocupacion</label>
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
        <button class="btn btn-primary" name="edit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



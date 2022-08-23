
<div class="modal fade" id="editModal<?php echo $rows['idOcupacion']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Empleo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="partials\backend\empleoModal\edit-process.php?idOcupacion=<?php echo $rows["idOcupacion"]?>" method="post">
        <div class="row">
                <div class="col-6">
                    <div class="form-group">
                    <label>Nombre</label>
                        <input class="datainput" type="text" class="form-control" name="NombreOcupacion"  value="<?php echo $rows['NombreOcupacion']?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Descripcion</label>
                        <input class="datainput" type="textarea" class="form-control" name="Descripcion" value="<?php echo $rows['Descripcion']?>">
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
        <button class="btn btn-primary" name="edit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

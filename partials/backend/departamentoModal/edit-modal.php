
<div class="modal fade" id="editModal<?php echo $rows['idDept']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Departamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="partials\backend\departamentoModal\edit-process.php?idDept=<?php echo $rows["idDept"]?>" method="post">
        <div class="row">
                <div class="col-6">
                    <div class="form-group">
                    <label>Nombre</label>
                        <input class="datainput" type="text" class="form-control" name="deptNom"  value="<?php echo $rows['deptNom']?>">
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
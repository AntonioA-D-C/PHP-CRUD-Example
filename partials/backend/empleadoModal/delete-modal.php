
<div class="modal fade" id="deleteModal<?php echo $rows['idEmpleado']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Empleado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="partials\backend\empleadoModal\delete-process.php?idEmpleado=<?php echo $rows["idEmpleado"]?>" method="post">
       Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="delete">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



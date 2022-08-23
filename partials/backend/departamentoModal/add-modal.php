<?php
if (isset($_POST["submit"])){
$nombre= $_POST["deptNom"];


  $insert= "INSERT INTO departamento(deptNom) VALUES('{$nombre}')";
  $insertquery= mysqli_query($mysqli, $insert);
  if($insertquery){
    echo "Registro Insertado";
}
else{
    echo "Fallo total";
}
echo "<script>alert('SUCCESS');window.location.href='departamento.php'</script>";
}
?>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear nuevo departamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <form action="departamento.php" method="post">
                <div class="col-6">
                    <div class="form-group">
                    <label>Nombre</label>
                        <input class="datainput" type="text" class="form-control" name="deptNom">
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

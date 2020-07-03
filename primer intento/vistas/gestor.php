<?php 
  session_start();
  if(isset($_SESSION['usuarioUser'])){

  include "header.php";
?>

<div class="jumbotron jumbotron-fluid" style="background-image: url(../imagenes/azul.jpg);
background-size: 100%">
  <div class="container">
    <h1 class="display-4">Gestor de archivos</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarArchivos">
      <span class="fas fas-plus-cicle"></span>Agregar Archivos
    </span>
    <hr>
    <div id ="tablagestion"></div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="modalAgregarArchivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form clas="frmArchivos" enctype="multipart/form-data" method="POST">
          <input type="file" name="archivos" id="archivos" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


<?php include "pie.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablagestion').load("gestor/tablagestor.php");
    });
</script>

<?php
  }else{
    header("location: ../index.php");
  }
?>
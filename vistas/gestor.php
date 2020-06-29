<?php include "header.php"; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Gestor de archivos</h1>
    <div id ="tablagestion"></div>
  </div>
</div>

<?php include "pie.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablagestion').load("gestor/tablagestor.php");
    });
</script>
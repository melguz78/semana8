<?php
include "../modelo/DAOProductos.php";
include "../modelo/DAOCategoria.php";
$cat = new DAOCategoria();
$dao= new DAOProductos();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<script>
$(document).ready(function(){

})


</script>


</head>
<body>
<br>
<h3 class="text-primary" >Vista Productos</h3>

<input type="button" id="btnNuevo" class="btn btn-success" value="Nuevo Registro"  data-toggle="modal" data-target="#Modal1" >

<hr>
<label class= "label label-info">Contenido de la tabla</label>
    <?php
        echo $dao->getTabla();
    ?>

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="VProd.php" method="POST">
        <label class="label label-danger">Codigo</label><br>
        <input type="text" name="txtCodigo" class="form control" id="txtCodigo"><br>

        <label class="label label-danger">Nombre Producto</label><br>
        <input type="text" name="txtNombre" class="form control" id="txtNombre"><br>

        <label class="label label-danger">Precio de producto</label><br>
        <input type="text" name="txtPrecio" class="form control" id="txtPrecio"><br>

        <label class="label label-danger">Existencia</label><br>
        <input type="text" name="txtExistencia" class="form control" id="txtExistencia"><br>

        <label class="label label-danger">Categoria</label><br>
       <select name="cmbCodCat" id="CmbCodCat" class="form control">

                <?php
                    $data =$cat->getComboCategorias();

                    foreach($data as $indice => $valor){

                        echo '<option value="',$indice.'">'.$valor.'</option>';
                    }
                ?>

       </select>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" value="Guardar" name="btnGuardar" id="btnGuarda" class="btn btn-success">
        <input type="submit" value="Eliminar" name="btnEliminar" id="btnEliminar" class="btn btn-danger">
        <input type="submit" value="Modificar" name="btnModificar" id="btnModificar" class="btn btn-info">
      </div>
        
        </form>
      </div>
     
    </div>
  </div>
</div>
</body>
</html>
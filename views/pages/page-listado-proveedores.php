<?php
include 'barAdmin.php';
$inst = new ControladorFormularios;
?>

<main class="app-content">
  <div class="app-title" style="padding-top: 35px; padding-bottom:20px">
    <div>
      <h1><i class="fa fa-edit"></i> Listado de Proveedores</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item active"><a href="index.php?pagina=page-inicio"><i class="fa fa-home fa-lg"></i></a></li>
      <li class="breadcrumb-item"><a href="index.php?pagina=page-listado-proveedores">Listado de Proveedores</a></li>
    </ul>
  </div>
  <div class="tile text-center">
    <div class="tile-title mb-0">
      <div class="row justify-content-between">
        <div class="col-auto">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" class="form-control" id="search" placeholder="Buscar proveedor...">
            </div>
          </div>
        </div>
        <div class="col-auto">
          <a class="btn btn-primary" href="index.php?pagina=page-proveedor">Dar de alta proveedor</a>
        </div>
      </div>
    </div>
    <div class="tile-body">
      <table id="suppTab" class="table table-striped table-bordered" style="width: 100%;">
        <thead>
          <tr>
            <th scope="col">Nombre Comercial</th>
            <th scope="col">Correo</th>
            <th scope="col">Número Cliente</th>
            <th scope="col">Dirección</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Estado</th>
            <th scope="col">CP</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Archivos</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($inst->obtnProveedores() as $key => $value) : ?>
            <tr>
              <td><?php echo $value["nombreComercial"] ?></td>
              <td><?php echo $value["correo"] ?></td>
              <td><?php echo $value["numeroCliente"] ?></td>
              <td><?php echo $value["direccion"] ?></td>
              <td><?php echo $value["ciudad"] ?></td>
              <td><?php echo $value["estado"] ?></td>
              <td><?php echo $value["codigoPostal"] ?></td>
              <td><?php echo $value["numeroTel"] ?></td>
              <td><a class="btn btn-info btn-sm" href="index.php?pagina=page-downloadFiles&id=<?php echo $value["idSupplier"] ?>">
                  <i class="fa fa-download" aria-hidden="true"></i></a>
              </td>
              <td>
                <button type="button" class="btn btn-danger btn-sm mr-1" data-toggle="modal" data-target="#modalEliminar<?php echo $value["idSupplier"] ?>">
                  <i class="fa fa-trash fa-lg"></i>
                </button>
              </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="modalEliminar<?php echo $value["idSupplier"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center noBordes">
                    <h5 class="modal-title w-100" id="exampleModalLongTitle">¿Desea eliminar este proveedor?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-footer justify-content-center noBordes">
                    <button type="button" class="btn btn-danger w-25 mr-3" data-dismiss="modal">Volver</button>
                    <a class="btn btn-success w-25" href="index.php?pagina=delete&id=<?php echo $value["idSupplier"] ?>">Sí
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<script>
  // Write on keyup event of keyword input element
  $(document).ready(function() {
    $("#search").keyup(function() {
      _this = this;
      // Show only matching TR, hide rest of them
      $.each($("#suppTab tbody tr"), function() {
        if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
          $(this).hide();
        else
          $(this).show();
      });
    });
  });
</script>
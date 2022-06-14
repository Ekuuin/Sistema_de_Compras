<?php 
if(!isset($_SESSION["validarIngreso"])){
  echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null, null, window.location.href);
        }
        window.location = "index.php?pagina=page-login";
        </script>';
}
//Código para verificar el rol. Evita que el comprador acceda a páginas de administrador mediante URL.
if ($_SESSION['rol'] == "Comprador") {
  echo '<script>
        if(window.history.replaceState){
          window.history.replaceState(null, null, window.location.href);
        }
        window.location = "index.php?pagina=page-inicio-compra";
        </script>';
}
?>

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
    <div>
      <p class="app-sidebar__user-name"><?php echo $_SESSION['name'], ' ', $_SESSION['lastName']; ?></p>
      <p class="app-sidebar__user-designation"><?php echo $_SESSION['puesto'] ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item" href="index.php?pagina=page-inicio"><i class="app-menu__icon fa fa-home fa-lg"></i><span class="app-menu__label">Inicio</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Compras</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="index.php?pagina=page-PO"><i class="icon fa fa-circle-o"></i> Nueva PO</a></li>
        <li><a class="treeview-item" href="index.php?pagina=page-historial-compras"><i class="icon fa fa-circle-o"></i> Historial de compras</a></li>
      </ul>
    </li>
    <li><a class="app-menu__item" href="index.php?pagina=page-user"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Alta Usuario</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-store-alt"></i><span class="app-menu__label">Proveedores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
      <ul class="treeview-menu">
        <li><a class="treeview-item" href="index.php?pagina=page-proveedor"><i class="icon fa fa-circle-o"></i> Alta proveedor</a></li>
        <li><a class="treeview-item" href="index.php?pagina=page-listado-proveedores"><i class="icon fa fa-circle-o"></i> Listado de proveedores</a></li>
      </ul>
    </li>
    <li><a class="app-menu__item" href="index.php?pagina=page-logout"><i class="app-menu__icon fa fa-sign-out fa-lg"></i><span class="app-menu__label">Cerrar sesión</span></a></li>
    </div>
</aside>
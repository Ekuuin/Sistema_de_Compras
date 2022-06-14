<?php
session_start();
require_once "../../models/formularios.modelo.php";
require_once "../../controllers/formularios.controlador.php";
$inst = new ControladorFormularios;

if(!is_dir("../../assets/upload") && !file_exists("../../assets/upload"))
    mkdir("../../assets/upload");

$dbFiles = implode(";", $_FILES["file"]["name"]);
$_SESSION["idProveedor"] =  $inst -> ctrRegistroProveedor($dbFiles);
$dir = "../../assets/upload/". "Proveedor-ID" . $_SESSION["idProveedor"];
if(!file_exists($dir) && !is_dir($dir)) {
    mkdir($dir);
}
if (!empty($_FILES)) {
    foreach ($_FILES["file"]["tmp_name"] as $key => $value) {
        $file = $dir. "/" . basename($_FILES["file"]["name"][$key]);
        $tmp = $_FILES["file"]["tmp_name"][$key];
        move_uploaded_file($tmp, $file);
    }
}

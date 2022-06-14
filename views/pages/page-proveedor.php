<?php
include 'barAdmin.php';
?>

<main class="app-content">
    <div class="app-title" style="padding-top: 35px; padding-bottom:20px">
        <div>
            <h1><i class="fa fa-edit"></i> Alta de Proveedor</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="index.php?pagina=page-proveedor">Alta Proveedor</a></li>
        </ul>
    </div>
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">INFORMACIÓN REQUERIDA PARA ALTA DE NUEVOS PROVEEDORES</h3>
                <div class="tile-body">
                    <form class="form-horizontal" id="form" method="POST">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nombre Fiscal</label>
                            <input class="form-control col-md-8" id="nombreFiscal" name="nombreFiscal" type="text" placeholder="Ingresa Nombre Fiscal">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Nombre Comercial</label>
                            <input class="form-control col-md-8" id="nombreComercial" name="nombreComercial" type="text" placeholder="Ingresa Nombre Comercial">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Negocio</label>
                            <input class="form-control col-md-8" id="negocio" name="negocio" type="text" placeholder="Ingresa Negocio del Proveedor">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Número del cliente para PASSMEX</label>
                            <input class="form-control col-md-8" id="numeroCliente" name="numeroCliente" type="text" placeholder="Ingresa No de cliente">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">RFC</label>
                            <input class="form-control col-md-8" id="rfc" name="rfc" type="text" placeholder="Ingresa RFC">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Correo</label>
                            <input class="form-control col-md-8" id="correo" name="correo" type="email" placeholder="Ingresa Correo">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Dirección</label>
                            <textarea class="form-control col-md-8" id="direccion" name="direccion" rows="4" placeholder="Ingresa la dirección completa"></textarea>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Ciudad</label>
                            <input class="form-control col-md-8" id="ciudad" name="ciudad" type="text" placeholder="Ingresa Ciudad">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Estado</label>
                            <input class="form-control col-md-8" id="estado" name="estado" type="text" placeholder="Ingresa Estado">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Código Postal</label>
                            <input class="form-control col-md-8" id="codigoPostal" name="codigoPostal" type="text" placeholder="Ingresa CP">
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Número telefónico</label>
                            <input class="form-control col-md-8" id="numeroTel" name="numeroTel" type="text" placeholder="Ingresa número telefónico">
                        </div>


                        <div class="form-group row">
                            <label class="control-label col-md-3">Tipo de Compañía</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="tipoCompania" id="Sociedad" value="sociedad">Sociedad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="tipoCompania" id="personapart" value="particular">Persona Particular
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="tipoCompania" id="otro" value="otro">Otro
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3">Término de pago acordado</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="terminoPago" id="1" value="1">Contado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="terminoPago" id="30" value="30">30 días
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="terminoPago" id="14" value="14">14 días con 3% desc
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="control-label col-md-3">Tipo Transferencia</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="tipoTransferencia" id="nac" value="Nacional">Nacional
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="tipoTransferencia" id="inter" value="Internacional">Internacional
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row" style="align-items: center;">
                            <label for="checkbox" class="control-label col-3">Proveedor Fijo</label>
                            <div class="toggle-flip col ml-auto">
                                <label>
                                    <input class="form-control" type="checkbox" name="checkbox" id="checkbox" onclick="fijo()"><span class="flip-indecator" data-toggle-on="SI" data-toggle-off="NO"></span>
                                </label>
                            </div>
                        </div>

                        <h5 class="title">Documentos</h5>
                        <div class="row justify-content-center">
                            <div class="col-md-auto">
                                <div class="dropzone" id="myDropzone">
                                    <div class="dz-message">Seleccione o arrastre aquí los documentos del Proveedor<br><small class="text-info">(RFC, Acta constitutiva, Opinion Positiva, Estado
                                            de cuenta, Comprobante de Domicilio y Documento de Alta de
                                            Proveedor.)</small></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <button type="button" id="submit-all" class="btn btn-success">Guardar</button>
                        </div>

                        <!-- Invisible inputs -->
                        <input type="text" class="form-control" name="provFijo" id="provFijo" hidden>
                    </form>
                </div>

            </div>




        </div>





</main>

<script>
    window.onload = fijo();
    function fijo() {
        if (document.getElementById("checkbox").checked)
            document.getElementById("provFijo").value = "SI";
        else
            document.getElementById("provFijo").value = "NO";
    }

    Dropzone.options.myDropzone = {
        url: "views/pages/upload.php",
        paramName: "file",
        autoProcessQueue: false,
        uploadMultiple: true, // uplaod files in a single request
        parallelUploads: 100, // use it with uploadMultiple
        maxFilesize: 15, // MB
        maxFiles: 10,
        addRemoveLinks: true,
        // Language Strings
        dictFileTooBig: "El archivo es muy grande ({{filesize}}Mb). El máximo permitido es {{maxFilesize}}MB",
        dictInvalidFileType: "Tipo de archivo inválido",
        dictCancelUpload: "Cancelar",
        dictRemoveFile: "Eliminar",
        dictMaxFilesExceeded: "Sólo {{maxFiles}} archivos permitidos",
        init: function() {
            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

            // for Dropzone to process the queue (instead of default form behavior):
            document.getElementById("submit-all").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                if (myDropzone.files != "") {
                    dzClosure.processQueue();
                } else {
                    $("#myDropzone").submit();
                }
            });

            this.on("addedfile", function(file) {
                // console.log(file);
            });
            // on error
            this.on("error", function(file, response) {
                // console.log(response);
            });
            // on start
            this.on("sendingmultiple", function(file) {
                // console.log(file);
            });
            // on success
            this.on("successmultiple", function(file) {
                // submit form
                $("#form").submit();
            });


        },
    }
</script>

<?php
if (!empty($_POST)) {
    $registro =  new controladorFormularios;
    $registro->ctrUpdateProveedor($_SESSION["idProveedor"]);
}
?>
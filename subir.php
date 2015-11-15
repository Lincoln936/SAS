<?php

require './clases/AutoCarga.php';
$subir = new FileUploadMultiple("archivo");
$subir->setDestino("../../img/");
$subir->setPolitica(FileUpload::RENOMBRAR);
if ($subir->upload()) {
    echo "Archivo subido con éxito";
} else {
    echo "Archivo no subido";
}   
header("Location:sas_list.php");
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
echo "Eliminaci&oacute;n en proceso ....  </br>";
//incluir la libreria de Detalle_facturaDatos
include_once("ActivoDatos.php");
//creo una instancia de DemoCollector
$ActivoDatosObj = new ActivoDatos();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$ActivoDatosObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;ActivoFormulario.php'>";
?>

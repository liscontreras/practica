<?php 
include_once('Edwin.php');
include_once('Collector.php');

class EdwinDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM edwin");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Detalle_factura($c{'codigo'},$c{'descrip'},$c{'precio'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM detalle_factura WHERE secuencia= ?", array("{$id}"));
	} 
	 
}

?> 
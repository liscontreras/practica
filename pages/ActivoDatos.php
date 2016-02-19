<?php 
include_once('Activo.php');
include_once('Collector.php');

class ActivoDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM activo");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Activo($c{'codigo_activo'},$c{'tipo'},$c{'numero_tarjeta'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	  
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM activo WHERE codigo_activo= ?", array("{$id}"));
	} 
	
}

?>
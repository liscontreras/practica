 <?php 
include_once('Menu.php');
include_once('Collector.php');

class MenuDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM menu");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Detalle_factura($c{'id'},$c{'descripcion'},$c{'precio_unitario'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	} 
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM menu WHERE id= ?", array("{$id}"));
	} 
	
}
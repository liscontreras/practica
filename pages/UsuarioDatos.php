<?php 
include_once('Persona.php');
include_once('Usuario.php')
include_once('Vista.php')
include_once('Collector.php');

class Detalle_facturaDatos extends Collector 
{
	function consultaUsuario(){
		$rows = self::$db->getRows("SELECT * FROM usclaudia WHERE codigo_usuario= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Usuario($c{'usuario'},$c{'password'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	function consultaGeneral(){		
		$rows = self::$db->getRows("SELECT * FROM vistausuario ORDER BY nombre");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Vista($c{'codigo_persona'},$c{'cedula_identidad'},$c{'nombre'},$c{'apellido'},$c{'usuario'},$c{'contrasena'},$c{'estado_civil'},$c{'genero'},$c{'direccion_domicilio'},$c{'telefono'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaPersonas()
	{
		$rows = self::$db->getRows("SELECT * FROM persona");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Persona($c{'codigo_persona'},$c{'cedula_identidad'},$c{'nombre'},$c{'apellido'},$c{'estado_civil'}, $c{'genero'},$c{'direccion_domicilio'},$c{'telefono'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaUsuarios(){
		$rows = self::$db->getRows("SELECT * FROM usclaudia");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Usuario($c{'usuario'},$c{'password'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaPersona($id)
	{
		$rows = self::$db->getRows("SELECT * FROM persona WHERE codigo_persona= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Persona($c{'codigo_persona'},$c{'cedula_identidad'},$c{'nombre'},$c{'apellido'},$c{'genero'},$c{'estado_civil'},$c{'direccion_domicilio'},$c{'telefono'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function insertarPersona($cedula_identidad, $nombre, $apellido, $estado_civil, $genero, $direccion_domicilio ,$telefono) 
	{    
		$insertrow = self::$db->insertRow("INSERT INTO persona (cedula_identidad, nombre, apellido, usuario, estado_civil, genero, direccion_domicilio, telefono) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", 
		array("{$cedula_identidad}",  "{$nombre}", "{$apellido}", "{$usuario}", "{$estado_civil}", "{$genero}", "{$direccion_domicilio}" , "{$telefono}"));
	}
	
	function insertarUsuario($usuario, $contrasena) 
	{   
		$insertrow = self::$db->insertRow("INSERT INTO usclaudia (usuario, password) VALUES (?, ?)", array("{$usuario}", "{$contrasena}");
	}
	
	
	function actualizar($descripcion,$registro,$codigo) {    
		$insertrow = self::$db->updateRow("INSERT INTO persona (cedula_identidad, nombre, apellido, usuario, estado_civil, genero, direccion_domicilio, telefono) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", ("UPDATE peerfil SET  descripcion = ?, registro = ? WHERE codigo_perfil = ? ", 
		array("{$cedula_identidad}",  "{$nombre}", "{$apellido}", "{$usuario}", "{$estado_civil}", "{$genero}", "{$direccion_domicilio}" , "{$telefono}"));
	}  
	
	function delete($id) 
	{    
		$deleterow = self::$db->deleteRow("DELETE FROM persona WHERE codigo_persona= ?", array("{$id}"));
		$deleterow = self::$db->deleteRow("DELETE FROM usclaudia WHERE codigo_usuario= ?", array("{$id}"));
	}
	/*
	function createDemo($nombre) {    
		$insertrow = self::$db->insertRow("INSERT INTO clasedb.demo (iddemo, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
	}  

    function readDemos() {
		$rows = self::$db->getRows("SELECT * FROM demo ");        
		$arrayDemo= array();        
		foreach ($rows as $c){
		  $aux = new Demo($c{'iddemo'},$c{'nombre'});
		  array_push($arrayDemo, $aux);
		}
		return $arrayDemo;        
	}
  
	function updateDemo($id,$nombre) {    
		$insertrow = self::$db->updateRow("UPDATE clasedb.demo SET demo.nombre = ?  WHERE demo.iddemo = ? ", array( "{$nombre}",$id));
	}  
	*/

}

?>

<?php 
class Sucursal
{
	private $codigo_sucursal;
	private $nombre;
	
	private $direccion;
	private $ciudad;
	private $capacidad_maxima;
	private $codigo_producto;
	
	function __construct($codigo_sucursal,$nombre,$direccion,$ciudad,$capacidad_maxima,$codigo_producto){
		$this->codigo_sucursal = $codigo_sucursal;
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->ciudad = $ciudad;
		$this->capacidad_maxima = $capacidad_maxima;
		$this->codigo_producto = $codigo_producto;
	}
	
	function setCodigo_sucursal($codigo_sucursal){
       $this->codigo_sucursal = $codigo_sucursal;
     } 
     function getCodigo_sucursal(){
       return $this->codigo_sucursal;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
	 function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     } 
     function setCiudad($ciudad){
       $this->ciudad = $ciudad;
     } 
     function getCiudad(){
       return $this->ciudad;
     }
	 function setCapacidad_maxima($capacidad_maxima){
       $this->capacidad_maxima = $capacidad_maxima;
     } 
     function getCapacidad_maxima(){
       return $this->capacidad_maxima;
     } 
     function setCodigo_producto($codigo_producto){
       $this->codigo_producto = $codigo_producto;
     } 
     function getCodigo_producto(){
       return $this->codigo_producto;
     } 
	

}
?>

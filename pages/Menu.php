<?php

class Menu
{
    private $id;
    private $descripcion;
	private $precio_unitario;
    
     function __construct($id, $descripcion,$precio_unitario) {
        $this->id = $id;
        $this->descripcion = $descripcion;
	    $this->precio_unitario = $precio_unitario;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
	 function setPrecio_unitario($precio_unitario){
       $this->precio_unitario = $precio_unitario;
     } 
     function getPrecio_unitario(){
       return $this->precio_unitario;
	 } 
	 
}
?>

<?php

class Detalle_factura
{
    private $codigo;
    private $descrip;
	private $precio;
	
	
     function __construct($codigo, $descrip,$precio) {
        $this->codigo = $codigo;
        $this->descrip = $descrip;
	    $this->precio = $precio;
		
     }
	
     function setCodigo($codigo){
       $this->codigo = $codigo;
     } 
     function getCodigo(){
       return $this->codigo;
     } 
     function setDescrip($descrip){
       $this->descrip = $descrip;
     } 
     function getDescrip(){
       return $this->descrip;
     } 
	 function setPrecio($precio){
       $this->precio = $precio;
     } 
     function getprecio(){
       return $this->precio;
	 } 
	 
}

?>

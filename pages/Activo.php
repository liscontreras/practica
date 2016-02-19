<?php

class Activo
{
    private $codigo_activo;
    private $tipo;
	private $numero_tarjeta;
    
     function __construct($codigo_activo, $tipo,$numero_tarjeta) {
        $this->codigo_activo = $codigo_activo;
        $this->tipo = $tipo;
	    $this->numero_tarjeta = $numero_tarjeta;	
     }
    
     function setCodigo_activo($codigo_activo){
       $this->codigo_activo = $codigo_activo;
     } 
     function getCodigo_activo(){
       return $this->codigo_activo;
     } 
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
	 function setNumero_tarjeta($numero_tarjeta){
       $this->numero_tarjeta = $numero_tarjeta;
     } 
     function getNumero_tarjeta(){
       return $this->numero_tarjeta;
	 } 
	 
}
?>

<?php

class Restaurante
{

    private $codigo_restaurante;
    private $max_personas;
	private $inicio_atencion;
	private $fin_atencion;
    private $razon_social;
	private $telefono;
    private $correo_electronico;
	private $autorizacion_sri;
    private $autorizacion_fecha;
	private $telefax;
    private $telefono_movil;
	private $nombre_imagen;
	
	
     function __construct($codigo_restaurante, $max_personas, $inicio_atencion,$fin_atencion, $razon_social, $telefono, $correo_electronico, $autorizacion_sri, $autorizacion_fecha,$telefax,$telefono_movil,$nombre_imagen) {
       $this->idRestaurante = $codigo_restaurante;
	   $this->maxPersonas = $max_personas;
	   $this->inicioAtencion = $inicio_atencion;
	    $this->finAtencion = $fin_atencion;
	   $this->razonSocial = $razon_social;
	   $this->telefono = $telefono;
	   $this->correoElectronico = $correo_electronico;
	   $this->autorizacionSri = $autorizacion_sri;
	   $this->autorizacionFecha = $autorizacion_fecha;
	   $this->telefax = $telefax;
       $this->telefonoMovil = $telefono_movil;
	   $this->nombreImagen = $nombre_imagen;
     }
	 
	
	 
   public function getCodigo_restaurante(){
		return $this->codigo_restaurante;
	}

	public function setCodigo_restaurante($codigo_restaurante){
		$this->codigo_restaurante = $codigo_restaurante;
	}

	public function getmax_personas(){
		return $this->max_personas;
	}

	public function setmax_personas($max_personas){
		$this->max_personas = $max_personas;
	}

	public function getinicio_atencion(){
		return $this->inicio_atencion;
	}

	public function setinicio_atencion($inicio_atencion){
		$this->inicio_atencion = $inicio_atencion;
	}

	public function getfin_atencion(){
		return $this->fin_atencion;
	}

	public function setfin_atencion($fin_atencion){
		$this->fin_atencion = $fin_atencion;
	}
	
	public function getRazon_social(){
		return $this->razon_social;
	}

	public function setRazon_social($razon_social){
		$this->razon_social = $razon_social;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getCorreo_electronico(){
		return $this->correo_electronico;
	}

	public function setCorreo_electronico($correo_electronico){
		$this->correo_electronico = $correo_electronico;
	}

	public function getAutorizacion_sri(){
		return $this->autorizacion_sri;
	}

	public function setAutorizacion_sri($autorizacion_sri){
		$this->autorizacion_sri = $autorizacion_sri;
	}

	public function getAutorizacion_fecha(){
		return $this->autorizacion_fecha;
	}

	public function setAutorizacion_fecha($autorizacion_fecha){
		$this->autorizacion_fecha = $autorizacion_fecha;
	}

	public function getTelefax(){
		return $this->telefax;
	}

	public function setTelefax($telefax){
		$this->telefax = $telefax;
	}

	public function getTelefono_movil(){
		return $this->telefono_movil;
	}

	public function setTelefono_movil($telefono_movil){
		$this->telefono_movil = $telefono_movil;
	}

	public function getNombre_imagen(){
		return $this->nombre_imagen;
	}

	public function setNombre_imagen($nombre_imagen){
		$this->nombre_imagen = $nombre_imagen;
	}
}

?>

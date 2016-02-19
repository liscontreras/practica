<?php

class Restaurante
{

    private $codigo_usuario;
    private $contrasena;
    private $email;
    
	
    
     function __construct($codigo_restaurante, $contraseña, $email) 
     {
	   $this->codigo = $codigo_restaurante;
	   $this->contrasena = $contrasena;
	   $this->email = $email;
     }
	 
	 
	 
   	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	public function getContrasena()
	{
		return $this->contrasena;
	}

	public function setContrasena($contrasena)
	{
		$this->contrasena = $contrasena;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($Email){
		$this->email = $email;
	}
}

?>

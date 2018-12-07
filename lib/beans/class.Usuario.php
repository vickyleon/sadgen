<?php 

/**
 * 
 */
class Usuario
{
	
	var $id;
	var $nombre;
	var $apellido_paterno;
	var $apellido_materno;
	var $correo;
	var $fecha_nacimiento;
	var $telefono;
	var $id_direccion;
	var $id_login;


	function Usuario(){

	}
	function getId(){
		return $this->nombre;
	}
	function getNombre(){
		return $this->nombre;
	}
	function getApellidoPaterno(){
		return $this->apellido_paterno;
	}
	function getApellidoMaterno(){
		return $this->apellido_materno;
	}
	function getCorreo(){
		return $this->correo;
	}
	function getFechaNacimiento(){
		return $this->fecha_nacimiento;
	}
	function getTelefono(){
		return $this->telefono;
	}
	function getIdDireccion(){
		return $this->id_direccion;
	}
	function getIdLogin(){
		return $this->id_login;
	}

	function setId($id){
		$this->id = $id;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	function setApellidoPaterno($apellido_paterno){
		$this->apellido_paterno = $apellido_paterno;
	}
	function setApellidoMaterno($apellido_materno){
		$this->apellido_materno = $apellido_materno;
	}
	function setCorreo($correo){
		$this->correo = $correo;
	}
	function setFechaNacimiento($fecha_nacimiento){
		$this->fecha_nacimiento = $fecha_nacimiento;
	}
	function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	function setIdDireccion($id_direccion){
		$this->id_direccion = $id_direccion;
	}
	function setIdLogin($id_login){
		$this->id_login = $id_login;
	}

}


 ?>
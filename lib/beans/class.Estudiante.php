<?php 

/**
 * 
 */
class Estudiante {
	
	 var $boleta;
	 var $id_usuario;
	 var $id_especialista;

	function Estudiante(){

	}
	function getboleta(){
		return $this->boleta;
	}
	function getIdUsuario(){
		return $this->id_usuario;
	}
	function getIdEspecialista(){
		return $this->id_especialista;;
	}
	
	function setboleta($boleta){
		$this->boleta = $boleta;
	}
	function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}
	function setIdEspecialista($id_especialista){
		$this->id_especialista = $id_especialista;
	}


	
}
 ?>
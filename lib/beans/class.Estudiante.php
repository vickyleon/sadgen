<?php 

/**
 * 
 */
class Estudiante {
	
	 var $Boleta;
	 var $nom_Est;
	 var $ap_Pat;
	 var $ap_Mat;
	 var $edad;
	 var $telefono;
	 var $fecha_Nac;
	 var $email;
	 var $Especialista_idEspecialista;
	 var $Login_idLogin;
	 var $Comprobanteins_idComprobante;

	function Estudiante(){

	}
	function getBoleta(){
		return $this->Boleta;
	}
	function getNomEst(){
		return $this->nom_Est;
	}
	function getApPat(){
		return $this->ap_Pat;
	}
	function getApMat(){
		return $this->ap_Mat;
	}
	function getEdad(){
		return $this->edad;
	}
	function getTelefono(){
		return $this->telefono;
	}
	function getFechaNac(){
		return $this->fecha_Nac;
	}
	function getEmail(){
		return $this->email;
	}
	function getEspecialistaIdEspecialista(){
		return $this->Especialista_idEspecialista;
	}
	function getLoginIdLogin(){
		return $this->Login_idLogin;
	}
	function getComprobanteIdComprobantes(){
		return $this->Comprobanteins_idComprobante;
	}

	
}
 ?>
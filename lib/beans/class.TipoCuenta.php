<?

/**
 * 
 */
class TipoCuenta {

	var $idTipocuenta;
	var $Tipo;

	//constructor
	function TipoCuenta()
	{
		
	}

	//setters y getters
	function getIdTipoCuenta(){
		return $this->idTipocuenta;
	}
	function getTipo(){
		return $this->Tipo;
	}

	function setIdTipoCuenta($idTipocuenta){
		$this->idTipocuenta = $idTipocuenta;
	}
	function setTipo($Tipo){
		$this->Tipo = $Tipo;9
	}
	
	
}

?>
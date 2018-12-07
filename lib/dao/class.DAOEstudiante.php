<?php 
/**
 * 
 	  var $boleta;
	 var $id_usuario;
	 var $id_especialista;

 */
class DAOEstudiante{
	/*
	
	La clase de funciones que ofrece la capa de datos se le conoce como 
	CRUD (Create, Read, Update y Delete).
	Create
		toDatabase
	Read
		getList
		getObject
		getIdUsuario
	Update
		toUpate
	Delete
		Delete
	*/

	/** toDatabase()
	*	Guarda los atributos de la clase en la base de datos y crea el objeto crrespondiente
	*	@param - atributos de la clase
	*	@return - Objeto correspondiente a la clase
	*******************************************************************************************/
	function toDatabase($boleta,$id_usuario,$id_especialista){

		$db = new DataBase();
		$q = "INSERT INTO estudiante(boleta, id_usuario, id_especialista)";
		$q .="VALUES ('".$boleta."','".$id_usuario."','".$id_especialista."')";

		$id = $db->insertar($q);
		
		$estudiante = NULL;
		
		if($id > NULL){
					
			$estudiante = new Estudiante();
			$estudiante->setboleta($boleta);
			$estudiante->setIdUsuario($id_usuario);
			$estudiante->setIdEspecialista($id_especialista);
				
			
		}	
		return $estudiante;

	}
	function getList(){
		$db = new DataBase();
		$q = "SELECT boleta, id_usuario, id_especialista FROM estudiante";
		$rows = $db->ejecutar($q);
		
		$estudiantes = array();
		
		for($i = 0; $i < count($rows); $i++){
			$estudiante = new Estudiante();

			$estudiante->setboleta($row[$i]['boleta']);
			$estudiante->setIdUsuario($row[$i]['id_usuario']);
			$estudiante->setIdEspecialista($row[$i]['id_especialista']);

			$estudiantes[$i] = $estudiante;
		}
		return $estudiantes;
	}
	function getObject($boleta){
		
		$db = new DataBase();
		$q = "SELECT boleta, id_usuario, id_especialista FROM estudiante";
		
		$q.= " WHERE boleta = '".$boleta."'";
		
		$rows = $db->ejecutar($q);
		
		$user = NULL;
		
		if(count($rows) > 0){
			$i = 0;
			
			$estudiante = new Estudiante();

			$estudiante->setboleta($row[$i]['boleta']);
			$estudiante->setIdUsuario($row[$i]['id_usuario']);
			$estudiante->setIdEspecialista($row[$i]['id_especialista']);
			
		}
		return $estudiante;
	}
	
	function toUpdate($boleta,$id_usuario,$id_especialista){
		
		$db = new DataBase();
		$q = "UPDATE estudiante SET boleta='".$boleta."',id_usuario='".$id_usuario."',id_especialista='".$id_especialista."' WHERE boleta='".$boleta."'";
		
		$r = $db->actualizar($q);
		$estudiante = NULL;
		
		if($r){
			
			$estudiante = new Estudiante();
			$estudiante->setboleta($boleta);
			$estudiante->setIdUsuario($id_usuario);
			$estudiante->setIdEspecialista($id_especialista);
			
			
			
		}
		return $estudiante;
	}
	/** delete()
	*	Borra un registro en la base de datos de acuerdo con las claves primarias, 
	*	@param - atributos que representa la clave primaria
	*	@return - devuelve true si se completo la operación en caso contrario devuelve false
	*******************************************************************************************/
	function Delete($boleta){
		
		$db = new DataBase();
		$q = "DELETE FROM estudiante ";
		$q.= " WHERE boleta ='".$boleta."'";
		
		$r = $db->actualizar($q);
		
		return $r;
	}
	
}

 ?>
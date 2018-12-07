<?php
/*****
	var $id;
	var $nombre;
	var $apellido_paterno;
	var $apellido_materno;
	var $correo;
	var $fecha_nacimiento;
	var $telefono;
	var $id_direccion;
	var $id_login;

***/
class DAOUsuarios{

function toDatabase($nombre, $apellido_paterno, $apellido_materno, $correo, $fecha_nacimiento, $telefono, $id_direccion, $id_login){
		
		$db = new DataBase();
		$q = "INSERT INTO usuario(nombre, apellido_paterno, apellido_materno, correo, fecha_nacimiento, telefono, id_direccion, id_login) ";
		$q.= "VALUES ('".$nombre."', '".$apellido_paterno."', '".$apellido_materno."', '".$correo."','".$fecha_nacimiento."', '".$telefono."', ".$id_direccion.", '".$id_login.")";
		
		$id = $db->insertar($q);
		
		$user = NULL;
		
		if($id > NULL){
			
			$user = new Usuarios();
			
			$user->setId($id);
			$user->setNombre($nombre);
			$user->setApellidoPaterno($apellido_paterno);
			$user->setApellidoMaterno($apellido_materno));
			$user->setCorreo($correo);
			$user->setFechaNacimiento($fecha_nacimiento);
			$user->setTelefono($telefono);
			$user->setIdDireccion($id_direccion);
			$user->setIdLogin($id_login);
			
				
		}	
		return $user;
	}
	

	function getList(){
	
		$db = new DataBase();
		$q = "SELECT id, nombre, apellido_paterno, apellido_materno, correo, fecha_nacimiento, telefono, id_direccion, id_login FROM usuario ";
		
		
		$rows = $db->ejecutar($q);
		
		$users = array();
		
		for($i = 0; $i < count($rows); $i++){
			$user = new Usuarios();

			$user->setId($row[$i]['id']);
			$user->setNombre($row[$i]['nombre']);
			$user->setApellidoPaterno($row[$i]['apellido_paterno']);
			$user->setApellidoMaterno($row[$i]['apellido_materno']);
			$user->setCorreo($row[$i]['correo']);
			$user->setFechaNacimiento($row[$i]['fecha_nacimiento']);
			$user->setTelefono($row[$i]['telefono']);
			$user->setIdDireccion($row[$i]['id_direccion']);
			$user->setIdLogin($row[$i]['id_login']);
			$users[$i] = $user;
		}
		return $users;
	}
	function Delete($id_usuario){
		
		$db = new DataBase();
		$q = "DELETE FROM usuarios";
		$q.= " WHERE id ='".$id_usuario."'";
		
		$r = $db->actualizar($q);
		
	
		
		return $r;
	}
}


?>
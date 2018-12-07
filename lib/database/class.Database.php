<?php
  class DataBase{
    var $username;
	var $password;
	var $dbname;
	var $hostname;
	var $conexion;
	var $mysqli;
	
	function DataBase(){

		/*
	  $this->hostname = "192.168.0.104";
	  $this->username = "remoto";
	  $this->password = "remoto";
	  $this->dbname = "inventariobd";
	  */
	  $this->hostname = "localhost";
	  $this->username = "root";
	  $this->password = "root";
	  $this->dbname = "sagden";
	  
	 //mysql_set_charset('utf8');
	  $this->conexion = mysqli_connect($this->hostname, $this->username, $this->password);
	  $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);


	}
	
	function insertar($query){

		 $this->mysqli->query($query) or die(mysql_error()."<br />".$query);
		 $result = $this->mysqli->insert_id;

		 return $result;
	 
	}
	
	function ejecutar($query){
	  $result = $this->mysqli->query($query) or die(mysql_error()."<br />".$query);
	  $datos = array();	  
	  $i=0;
	  while($row = $result->fetch_assoc()){
	  	
	    	$datos[$i] = $row;
			$i++;
	  }
		return $datos;
	}
	
	function actualizar($query){
	  $result = $this->mysqli->query($query) or die(mysql_error()."<br />".$query);
	  return $result;
	  }
	
	function cerrar(){
	  if($this->conexion)
	  mysql_close($this->conexion);
	  }
  
  //Igual que la función ejecutar, pero sin el Mysql_fetch_array.
  function ejecutar_combobox($query){
	 $result = $this->mysqli->query($query) or die(mysql_error()."<br />".$query);
	  return $result;
	}
  
  function ejecutar_suma($query){
	  $result = $this->mysqli->query($query)or die(mysql_error()."<br />".$query);
	  
	  while($row = $result->fetch_assoc()){
         $total = $row['total'];
      }
	  return $total;
	}
  
  function ejecutar_conteo($query){
	   $result = $this->mysqli->query($query) or die(mysql_error()."<br />".$query);
	  
	  while($row = $result->fetch_assoc()){
         $conteo = $row['conteo'];
      }
	  return $conteo;
	}
  }
?>
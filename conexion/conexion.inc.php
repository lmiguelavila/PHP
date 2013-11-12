<?php

require_once ('config.inc.php');

class db{

	private $conn;

	public function conexion(){

		$this->conn = mysqli_connect(dbhost, dbuser, dbpass, dbname);
		if (mysqli_connect_errno()) {
			die('Error de conexi&oacute;n MySQLi');
		}

	}

	public function consulta($query){
		
		$resultado = mysqli_query($this->conn,$query);
		if (!$resultado) {
			die('Error al realizar la consulta '.mysqli_error($this->conn));
		}

		return $resultado;
	}

	public function id(){
		return mysqli_insert_id($this->conn);
	}

	public function escape($value){
		return mysqli_real_escape_string($this->conn,$value);
	}

	public function liberar(){
		mysqli_free_result($this->conn);
	}

	public function cerrar(){
		mysqli_close($this->conn);
	}

}

?>
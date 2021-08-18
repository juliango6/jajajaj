<?php

	class Conexion {

		function conectar() {
			$conn = $mbd = new PDO("mysql:host=localhost;dbname=citas",
			    'root','');
			    return $conn;
			} 
	}

<?php
	Class Conexion {
		public function conectar(){
			$conexion = new PDO("mysql:host=localhost;dbname=dbAnunciosyPaginas","root","");
			return $conexion;
		}
	}


?>
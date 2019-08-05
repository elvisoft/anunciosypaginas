<?php
	class conexion{
		var $link;
		function conexion(){} //constructor necesario

		function conectardb(){
			include(config/configurar.php);
			$this->link=mysql_connect($usudb,$passdb,$servidor,$basedataname);
			if(!$this->link)
				echo "Error en la conexion";
		}

	}


  ?>
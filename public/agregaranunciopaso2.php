<?php
include "../app/config/configurar.php";
if (mysqli_connect ($servidor, $usudb, $passdb,$basedataname) ){
	echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";	
	
	$titulo = $_POST['titulo'];
	$email = $_POST['email'];
	$tipo = $_POST['tipoanuncio'];
	$password1 = $_POST['pwd'];					

	$sql = "INSERT INTO tblAnunciosPaginas (tipo, titulo, email) " +
	  "VALUES ('$tipo', '$titulo', '$email')";
	$result = mysqli_query($sql);
	echo "¡Gracias! Hemos recibido sus datos.\n";

	
	}else{
	echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
	}


  ?>
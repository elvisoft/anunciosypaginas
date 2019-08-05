<?php  

	//require_once '..app/controladores/error.php';
	echo '<h1>Hola entre app</h1>';
	Class App{

		function __construct(){

			$url=$_GET['url'];
			$url=rtrim($url,"/");
			$url=explode('/', $url);
			//var_dump('$url');
			$archivoController='..app/controladores/'.$url[0].'.php';

			if (file_exists($archivoController)){
				require_once $archivoController;
				$controlador= new $url[0];
				if(isset($url[1]))
					$controlador->{$url[0]}();

			}
			else
				//require_once 'app/controladores/error.php';
				$controlador = new Error();
		}
	}



?>

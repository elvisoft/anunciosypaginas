<?php  
	/**
	 * 
	 */
	class Paginas extends Controlador
	{
		
		function __construct()
		{
			//echo 'Pagina controlador';
		}
		public function index(){
			$this->vista('informacion');
		}

		public function articulo(){
			$this->vista('articulo');
		}
	}

?>
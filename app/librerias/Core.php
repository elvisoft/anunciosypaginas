<?php  
	//mapear url
	/**
	 * 
	 */
	class Core 
	{
		protected $controladoractual='paginas';
		protected $metodoactual='index';
		protected $parametros=[];

		function __construct()
		{
			$url=$this->getUrl();
			if (file_exists('../app/controladores/'.ucwords($url[0]).'.php'))
			{
				$this->controladoractual=ucwords($url[0]);
				unset($url[0]);
			}
			//requerir el controlador actual
			require_once '../app/controladores/'.$this->controladoractual.'.php';
			$this->controladoractual= new $this->controladoractual;

		}

		public function getUrl(){
			//echo $_GET['url'];
			$url=rtrim($_GET['url'],'/');
			$url=filter_var($url,FILTER_SANITIZE_URL);
			$url=explode('/', $url);

			return $url;

		}
	}


?>
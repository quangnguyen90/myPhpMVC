<?php 
/**
* 
*/
class App
{
	// Default controller
	protected $controller = 'home';
	protected $method = 'index';
	// Variables container
	protected $params = [];
	

	function __construct()
	{
		$url = $this->parseUrl();
		// Check controller exits
		if(file_exists('../app/controllers/'.$url[0].'.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/'.$this->controller.'.php';
		$this->controller = new $this->controller; // create new controller object

		//check funtions in controller exit or not
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// Check parameters of funtion, it not, assign it to empty array
		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params );
	}

	// Parse URL
	public function parseUrl()
	{
		if(isset($_GET['url'])){
			return explode('/', filter_var($url = rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}
?>
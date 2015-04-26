<?php 
	/**
	* 
	*/
	class Controller
	{
		
		function __construct()
		{
			# code...
		}

		public function load_model($md){
			require_once '../app/models/'.$md.'.php';
			return new $md;
		}

		public function load_view($view, $data=null){
			require_once '../app/views/'.$view.'.php';
		}
	}
	?>
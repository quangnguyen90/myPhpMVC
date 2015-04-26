<?php 
/**
* 
*/
class Home extends Controller
{
	
	function __construct()
	{
		
	}

	public function index(){
		$this->load_view('home/welcome');
	}
}
?>
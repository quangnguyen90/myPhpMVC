<?php 
/**
* 
*/
class Example extends Controller
{
	
	function __construct()
	{
		
	}
	public function index(){
		$data["yourName"] = "World";
		$this->load_view('home/example', $data);
	}

	public function loadModel(){
		$x = $this->load_model('demo');
		echo $x->test();
	}

}

?>
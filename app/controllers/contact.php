<?php 
class Contact extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index(){
		$this->load_view('home/contact');
	}
}
?>
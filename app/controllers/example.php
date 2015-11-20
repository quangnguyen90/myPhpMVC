<?php 
class Example extends Controller
{
	
	function __construct()
	{
		
	}
	// Test url: http://localhost/myphpmvc/public/example
	public function index(){
		$data = array();
		$data["yourName"] = "World";
		$this->load_view('example/example', $data);
	}
	//=====================================================================================================================================================
	/**
	*
	* Test: Load model
	* @param none
	* @return string 
	*
	*/
	public function loadModel(){
		$x = $this->load_model('demo');
		echo $x->test();
	}

	//=====================================================================================================================================================
	/**
	*
	* Test select all
	* @param none
	* @return array 
	*
	*/
	public function testSelect(){
		$x = $this->load_model('demo');
		$data = array();
		$data['info'] = $x->select();
		$data["yourName"] = "World";
		$this->load_view('example/example', $data);
		//echo json_encode($data);
	}

	//=====================================================================================================================================================
	/**
	*
	* Test select 1 row
	* @param int
	* @return array 
	*
	*/
	public function testSelectOneRow($id){
		$x = $this->load_model('demo');
		$data = array();
		if($id != null && $id != "")
			$data['info'] = $x->selectOneRow($id);
		else
			$data['info'] = null;

		$this->load_view('example/example_read', $data);
	}

	//=====================================================================================================================================================
	/**
	*
	* Test Insert new row
	* @param array
	* @return array 
	*
	*/
	public function testInsert(){
		$x = $this->load_model('demo');
		$data = array();
		$data['title'] = $_POST['title'];
		$data['message'] = $_POST['message'];
		$data['type'] = $_POST['type'];

		$result = array();
		if($x->insert($data)){
			$result['code'] = 1;
			$result['info'] = "Create successfully";
		}
		else {
			$result['code'] = 0;
			$result['info'] = "Create unsuccessfully";
		}
		echo json_encode($result);
	}

	//=====================================================================================================================================================
	/**
	*
	* Test update row
	* @param array
	* @return array 
	*
	*/
	public function testUpdate(){
		$x = $this->load_model('demo');
		$data = array();
		$data['id'] = $_POST['id'];
		$data['title'] = $_POST['title'];
		$data['message'] = $_POST['message'];
		$data['type'] = $_POST['type'];

		$result = array();
		if($x->update($data)){
			$result['code'] = 1;
			$result['info'] = "Update successfully";
		}
		else {
			$result['code'] = 0;
			$result['info'] = "Update unsuccessfully";
		}
		echo json_encode($result);
	}

	//=====================================================================================================================================================
	/**
	*
	* Test Delete  row
	* @param int
	* @return array 
	*
	*/
	public function testDelete(){
		$x = $this->load_model('demo');
		$data = array();
		$data['id'] = $_POST['id'];

		$result = array();
		if($x->delete($data)){
			$result['code'] = 1;
			$result['info'] = "Delete successfully";
		}
		else {
			$result['code'] = 0;
			$result['info'] = "Delete unsuccessfully";
		}
		echo json_encode($result);
	}
}

?>
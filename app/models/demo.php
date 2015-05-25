<?php 
class Demo
{
	
	function __construct()
	{
		# code...
	}

	public function test(){
		echo 'Test model';
	}

	//=====================================================================================================================================================
	/**
	*
	* Select all row
	* @param none
	* @return array 
	*
	*/

	public function select(){
		require_once('../app/common/DBconnect.php');
		$req = $DB->query("SELECT * FROM things");
		return $req->fetchAll(PDO::FETCH_OBJ); // return all row

		/** 
		* PDO While variable:
		*
		* @var PDO::FETCH_ASSOC #returns an array indexed by column name as returned in your result set
		* @var PDO::FETCH_BOTH #(default): returns an array indexed by both column name and 0-indexed column number as returned in your result set
		* @var PDO::FETCH_BOUND #returns TRUE and assigns the values of the columns in your result set to the PHP variables to which they were bound with the bindColumn() method
		* @var PDO::FETCH_LAZY #combines PDO::FETCH_BOTH and PDO::FETCH_OBJ, creating the object variable names as they are accessed
		* @var PDO::FETCH_NUM #returns an array indexed by column number as returned in your result set, starting at column 0
		* @var PDO::FETCH_OBJ #returns an anonymous object with property names that correspond to the column names returned in your result set
		*/
		// while($data = $req->fetch(PDO::FETCH_OBJ)) {
		//   echo $data->title;
		//   echo $data->message;
		// }
	}


	//=====================================================================================================================================================
	/**
	*
	* Select 1 row
	* @param int
	* @return obj 
	*
	*/

	public function selectOneRow($id){
		require_once('../app/common/DBconnect.php');
		try
		{
			$req = $DB->query("SELECT * FROM things WHERE id=".$id);
			return $req->fetch(PDO::FETCH_OBJ); // return 1 row
		}
		catch(PDOException $exception){ //to handle error
	        //echo "Error: " . $exception->getMessage();
	    	return null;
	    }
	}

	//=====================================================================================================================================================
	/**
	*
	* Insert new row
	* @param array
	* @return boolean 
	*
	*/

	public function insert($data){
		require_once('../app/common/DBconnect.php');
		$var = array(
		  'title' => $data['title'],
		  'message' => $data['message'],
		  'type' => $data['type']
		);
		try
		{
			$req = $DB->prepare("INSERT INTO things (title, message, type) VALUE (:title, :message, :type)");
			if($req->execute($var)) {
				return true;
			}
			else {
				return false;
			}
		}
		catch(PDOException $exception){ //to handle error
	        //echo "Error: " . $exception->getMessage();
	        return false;
	    }
	}
	
	//=====================================================================================================================================================
	/**
	*
	* Update 1 row
	* @param array
	* @return boolean 
	*
	*/
	public function update($data){
		require_once('../app/common/DBconnect.php');
		$var = array(
		  'id' => $data['id'],
		  'title' => $data['title'],
		  'message' => $data['message'],
		  'type' => $data['type']
		);
		try
		{
			$req = $DB->prepare("UPDATE things SET title=:title, message=:message, type=:type WHERE id=:id");
			if($req->execute($var)) {
				return true;
			}
			else {
				return false;
			}
		}
		catch(PDOException $exception){ //to handle error
	        //echo "Error: " . $exception->getMessage();
	        return false;
	    }
	}


	//=====================================================================================================================================================
	/**
	*
	* Delete 1 row
	* @param array
	* @return boolean 
	*
	*/
	public function delete($data){
		require_once('../app/common/DBconnect.php');
		$var = array(
		  'id' => $data['id'],
		);
		try
		{
			$req = $DB->prepare("DELETE FROM things WHERE id=:id");
			if($req->execute($var)) {

				return true;
			}
			else {
				return false;
			}
		}
		catch(PDOException $exception){ //to handle error
	        //echo "Error: " . $exception->getMessage();
	        return false;
	    }
	}
}
?>
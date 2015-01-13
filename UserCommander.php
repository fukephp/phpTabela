<?php require "vendor/autoload.php";
 
 class UserCommander {

 	protected $data;


 	function __construct() {
 		$this->getUsersObjects();
 	}

 	public function getJSONInfo() {
 		$this->data = file_get_contents('http://www.intersoft.ba/testTask/employees');
 	}

 	public function getUsersObjects() {
 		$this->getJSONInfo();
        return $this->data = json_decode($this->data);
 	}
 }
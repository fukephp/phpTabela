<?php require "vendor/autoload.php";
 
class UserCommander {

    protected $data;

    protected $order;

    function __construct() {
        $this->order = new OrderByCommander();
        $this->getUsersObjects();
    }

    private function getJsonInfo() {
        $this->data = file_get_contents('http://www.intersoft.ba/testTask/employees');
    }

    public function getUsersObjects() {
        $this->getJsonInfo();
        return $this->data = json_decode($this->data);
    }

    public function sort() {
        usort($this->data, function($a, $b){

        });
    }

}
<?php require "vendor/autoload.php";

class OrderByCommander {

    protected $defaultOrderBy = "ASC";

    protected $order = null;

    function __construct() {
        $this->getType();
        $this->order = $_GET['orderBy'];
    }

    public function startOrder() {
        if($this->defaultOrderBy == "ASC") {
            return $this->defaultOrderBy = "DESC";
        }
        return $this->getType();
    }

    public function getType() {
        return $this->defaultOrderBy;
    }

}
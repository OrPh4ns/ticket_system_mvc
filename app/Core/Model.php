<?php
namespace app\Core;

use config\Database;

class Model {

	protected $db;

	public function __construct() {

		$database = new Database();
		$this->db = $database->getConnection();
	}

    public function get(int $id)
    {
        $result = $this->db->prepare('');
        $result->execute();
        return $result->fetch();
    }
}  

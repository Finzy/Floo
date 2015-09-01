<?php
class Project extends Model {
    
	private $_id; 
	
	public function __construct($id = 1)
	{
		parent::__construct();
		$this->id = $id;
	}

	public function getProjects() {

		$allProjects = array();

		$result = $this->db->query("SELECT * FROM projects ORDER BY id");

		while ($project = $result->fetch_assoc()) {

			$allProjects[] = $project;

		}

		return $allProjects;

	}
}
?>
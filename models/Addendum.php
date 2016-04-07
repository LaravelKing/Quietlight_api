<?php
namespace Model;

class Addendum extends \Model {
	public static $_table_use_short_name = true;

	public function summary(){
		return $this->belongs_to('Model\Summary');
	}

	public function createdBy(){
		return $this->belongs_to('Model\User','created_by');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}
	
}

?>
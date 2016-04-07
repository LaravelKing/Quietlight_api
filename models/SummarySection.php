<?php
namespace Model;

class SummarySection extends \Model {
	public static $_table_use_short_name = true;


	public function createdBy(){
		return $this->belongs_to('Model\User','created_by');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}

	function __set($name, $value){	

		switch($name){
			case "table":
				$value = str_replace(" ","",ucwords(str_replace("_"," ", $value)));
				break;

		}

		return parent::__set($name, $value);

	}
	
}

?>
<?php
namespace Model;

class Title extends \Model {
	public static $_table_use_short_name = true;

	public function summary(){
		return $this->belongs_to('Model\Summary');
	}

	public function advisor(){
		return $this->belongs_to('Model\User', 'advisor_id');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}
	
	public function footnotes(){
		return $this->has_many('Model\Footnote');
	}

	function __set($name, $value){

		switch($name){
			case "asking_price":
				$value = (is_numeric($value)) ? intval($value)*100 : $value;
				break;
		}

		return parent::__set($name, $value);

	}

	function __get($name){
		$value = parent::__get($name);

		switch($name){
			case "asking_price":
				$value = (is_numeric($value)) ? $value/100 : $value;
				break;
		}

		return $value;
	}


	//Have to override when we have custom getters and setters
	function as_array(){
		
		$array = parent::as_array();

		foreach($array as $key=>$value){
			$array[$key] = $this->$key;
		}

		return $array;

	}

}

?>
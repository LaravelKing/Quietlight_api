<?php
namespace Model;

class ExecutiveSummary extends \Model {
	public static $_table_use_short_name = true;

	public function summary(){
		return $this->belongs_to('Model\Summary');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}

	public function footnotes(){
		return $this->has_many('Model\Footnote');
	}

	function __set($name, $value){	

		switch($name){
			case "benefits":
				//benefits must be an array
				//if(!is_array($value)) return;
				//$value = json_encode($value);
				break;
			case "total_revenue": 
			case "discretionary_earnings":
			case "gross_profit":           
			case "asking_price":
			case "inventory":
				//make simple moneys a flat integer
				if(is_numeric(str_replace(["$",","],"",$value))){
					$value = str_replace(["$",","], "", $value)*100;
				}
				break;
			case "inventory_included":
			case "show_multiple":
				//tiny ints
				if($value) $value = 1;
				else $value = 0;
				break;

		}

		return parent::__set($name, $value);

	}

	function __get($name){
		$value = parent::__get($name);

		switch($name){
			case "benefits":
				//$value = json_decode($value, true);
				break;
			case "total_revenue": 
			case "discretionary_earnings":
			case "gross_profit":           
			case "asking_price":
			case "inventory":
				//turn our numeric string back to dollars (see __get)
				if(is_numeric($value)) $value = $value/100;
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
<?php
namespace Model;

use Symfony\Component\Validator\Constraints as Assert;


class User extends \Model {
	public static $_table_use_short_name = true;

	public function sessions(){
		return $this->has_many('Model\Session');	
	}



	//Have to override when we have custom getters and setters
	function as_array(){
		
		$array = parent::as_array();

		foreach($array as $key=>$value){
			switch($key){
				case "password":
					break;
				default:
					$array[$key] = $this->$key;
					break;
			}
		}

		return $array;

	}
}

?>
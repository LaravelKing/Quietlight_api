<?php
namespace Model;

class Session extends \Model {
	public static $_table_use_short_name = true;

	public function user(){
		return $this->belongs_to('Model\User');
	}

}

?>
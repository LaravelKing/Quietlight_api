<?php
namespace Model;

class FinancialV2 extends \Model {
	public static $_table_use_short_name = true;

	public function summary(){
		return $this->belongs_to('Model\Summary');
	}
	
	public function footnotes(){
		return $this->has_many('Model\Footnote');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}
	

}

?>
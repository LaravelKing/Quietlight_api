<?php
namespace Model;

class Summary extends \Model {
	public static $_table_use_short_name = true;

	public function title(){
		return $this->has_one('Model\Title');
	}

	public function disclosure(){
		return $this->has_one('Model\Disclosure');
	}
	
	public function footnotes(){
		return $this->has_many('Model\Footnote');
	}

	public function addendums(){
		return $this->has_many('Model\Addendum');
	}

	public function flexes(){
		return $this->has_many('Model\Flex');
	}

	public function questions(){
		return $this->has_many('Model\Question');
	}

	public function createdBy(){
		return $this->belongs_to('Model\User','created_by');
	}

	public function updatedBy(){
		return $this->belongs_to('Model\User','updated_by');
	}

	public function generatedBy(){
		return $this->belongs_to('Model\User','generated_by');
	}
}

?>
<?php
use Luracast\Restler\RestException;

class SummarySection {

	/**
	* Get the full list of summarysections
	*
	* @url GET /
	* @param int $summary_id
	* @param int $limit
	* @param int $offset
	*/
	protected function index($summary_id=null, $limit = 5, $offset = 0) {
		if(is_null($summary_id)){
			$summarysections = Model\SummarySection::limit(intval($limit))
						->offset(intval($offset))
						->order_by_asc('weight')
						->find_many();
		} else {
			$summarysections = Model\SummarySection::where('summary_id', $summary_id)
									->limit(intval($limit))
									->offset(intval($offset))
									->order_by_asc('weight')
									->find_many();
		}


		foreach($summarysections as &$f){
			$created_by = $f->createdBy()->find_one()->as_array();
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['created_by'] = $created_by;
			$f['updated_by'] = $updated_by;

			if($f['table'] && !is_null($f['associated_id'])){
				$a = call_user_func("Model\\" . $f['table'] . "::find_one", $f['associated_id']);
				if($a) $f['association'] = $a;
				else $f['association'] = false;

				if(method_exists($f['association'],"updatedBy")){
					$updated_by = $f['association']->updatedBy()->find_one(); 
					$updated_by = ($updated_by) ? $updated_by->as_array() : null;

					$f['association'] = $f['association']->as_array();
					$f['association']['updated_by'] = $updated_by;
				}

				if(method_exists($f['association'],"createdBy")){
					$created_by = $f['association']->createdBy()->find_one()->as_array();

					$f['association'] = $f['association']->as_array();
					$f['association']['created_by'] = $created_by;
				}
			}
		} 


		//Get Headers		
		$headers = Model\Question::distinct()->select('header')->find_many();
		$distinct_headers = [];
		foreach($headers as &$h){
			if($h->header) $distinct_headers[] = $h->header;
		}

		return ['sections'=>$summarysections, 'question_headers'=>$distinct_headers];
	}

	/**
	* Gets a summarysection
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$summarysection = Model\SummarySection::find_one($id);

		if(!$summarysection){
            throw new RestException(404, 'summarysection not found');			
		}

		$s = $summarysection;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		if($s['table'] && !is_null($s['associated_id'])){
			$a = call_user_func("Model\\" . $s['table'] . "::find_one", $s['associated_id']);
			if($a) $s['association'] = $a;
			else $s['association'] = false;

			if(method_exists($s['association'],"updatedBy")){
				$updated_by = $s['association']->updatedBy()->find_one(); 
				$updated_by = ($updated_by) ? $updated_by->as_array() : null;

				$s['association'] = $s['association']->as_array();
				$s['association']['updated_by'] = $updated_by;
			}

			if(method_exists($s['association'],"createdBy")){
				$created_by = $s['association']->createdBy()->find_one()->as_array();

				$s['association'] = $s['association']->as_array();
				$s['association']['created_by'] = $created_by;
			}
		}

		return $s;
	}

	/**
	* Delete a summarysection
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$summarysection = Model\SummarySection::find_one($id);

		if($summarysection) $summarysection->delete();
		
		return;
	}

	/**
	* Update a summarysection
	*
	* @url PUT /{id} {@from path}
	* @param int $id
	* @param string $table {@from body} The table the summarysection is associated to
	* @param string $name {@from body} The name (Description) of the summarysection
	* @param int $weight {@from body} The weight the summarysection
	* @param int $associated_id {@from body} The id of the associated table
	*/
	protected function update($id, $table=NULL, $name=NULL, $associated_id= NULL, $weight=NULL) {

		$user = Auth::user();

		$summarysection = Model\SummarySection::find_one($id);
		if(!$summarysection) throw new RestException(404, 'summarysection not found');	

		if(!is_null($table)) $summarysection->table = $table;
		if(!is_null($name)) $summarysection->name = $name;
		if(!is_null($weight)) $summarysection->weight = $weight;

		if($summarysection->table && !is_null($associated_id)){
			$association = call_user_func("Model\\" . $summarysection->table . "::find_one", $associated_id);
			if($association) $summarysection->associated_id = $association->id;
		}


		$summarysection->updated_at = time();
		$summarysection->updated_by = $user->id;
		$summarysection->save();

		$s = $summarysection;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a summarysection
	*
	* @url POST /
	* @param int $summary_id {@from body} The summary for this summary section
	* @param string $table {@from body} The table the summarysection is associated to
	* @param string $name {@from body} The name (description) of the summarysection
	* @param int $weight {@from body} The weight of the summarysection
	* @param int $associated_id {@from body} The id of the associated table
	*/
	protected function create($summary_id, $table=NULL, $name=NULL, $associated_id= NULL, $weight=NULL) {

		$user = Auth::user();

		//Find the max weight + 1
		if(is_null($weight)){
			$sec = Model\SummarySection::where('summary_id', $summary_id)
							->order_by_desc('weight')
							->find_one();
			$weight = ($sec) ? $sec->weight + 1 : 1;
		}


		$summarysection = Model\SummarySection::create();


		if(!is_null($table)) $summarysection->table = $table;
		if(!is_null($name)) $summarysection->name = $name;
		if(!is_null($weight)) $summarysection->weight = $weight;

		if(!is_null($table) && !is_null($associated_id)){
			$association = call_user_func("Model\\" . $table . "::find_one", $associated_id);
			if($association) $summarysection->associated_id = $association->id;
		}

		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');
		$summarysection->summary_id = $summary->id;


		$summarysection->created_at = time();
		$summarysection->created_by = $user->id;
		$summarysection->save();

		$s = $summarysection;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
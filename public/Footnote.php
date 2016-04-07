<?php
use Luracast\Restler\RestException;

class Footnote {

	/**
	* Get the full list of footnotes
	*
	* @url GET /
	*/
	protected function index($summary_id=null, $limit = 5, $offset = 0) {
		if(is_null($summary_id)){
			$footnotes = Model\Footnote::limit(intval($limit))
						->offset(intval($offset))
						->find_many();
		} else {
			$footnotes = Model\Footnote::where('summary_id', $summary_id)
									->limit(intval($limit))
									->offset(intval($offset))
									->find_many();
		}

		foreach($footnotes as &$f){
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

		return $footnotes;
	}

	/**
	* Gets a footnote
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$footnote = Model\Footnote::find_one($id);

		if(!$footnote){
            throw new RestException(404, 'footnote not found');			
		}

		$s = $footnote;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a footnote
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$footnote = Model\Footnote::find_one($id);

		if($footnote) $footnote->delete();

		return;
	}

	/**
	* Update a footnote
	*
	* @url PUT /{id} {@from path}
	* @param int $id
	* @param int $summary_id {@from body}
	* @param string $table {@from body} The table the footnote is associated to
	* @param string $field {@from body} The field the footnote is associated to
	* @param string $body {@from body} The table the footnote is associated to
	* @param int $associated_id {@from body} The id of the associated table
	*/
	protected function update($id, $summary_id, $table=NULL, $field=NULL, $body = NULL, $associated_id= NULL) {

		$user = Auth::user();

		$footnote = Model\Footnote::find_one($id);
		if(!$footnote) throw new RestException(404, 'footnote not found');	

		if(!is_null($table)) $footnote->table = $table;
		if(!is_null($field)) $footnote->field = $field;
		if(!is_null($body)) $footnote->body = $body;

		if($footnote->table && !is_null($associated_id)){
			$association = call_user_func("Model\\" . $footnote->table . "::find_one", $associated_id);
			if($association) $footnote->associated_id = $association->id;
		}


		$footnote->updated_at = time();
		$footnote->updated_by = $user->id;
		$footnote->save();

		$s = $footnote;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a footnote
	*
	* @url POST /
	* @param string $table {@from body} The table the footnote is associated to
	* @param string $field {@from body} The field the footnote is associated to
	* @param string $body {@from body} The table the footnote is associated to
	* @param int $associated_id {@from body} The id of the associated table
	*/
	protected function create($table=NULL, $field=NULL, $body = NULL, $associated_id=NULL) {

		$user = Auth::user();

		$footnote = Model\Footnote::create();

		if(!is_null($table)) $footnote->table = $table;
		if(!is_null($field)) $footnote->field = $field;
		if(!is_null($body)) $footnote->body = $body;

		if(!is_null($table) && !is_null($associated_id)){
			$association = call_user_func("Model\\" . $table . "::find_one", $associated_id);
			if($association) $footnote->associated_id = $association->id;
		}

		$footnote->created_at = time();
		$footnote->created_by = $user->id;
		$footnote->save();

		$s = $footnote;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
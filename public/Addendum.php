<?php
use Luracast\Restler\RestException;

class Addendum {

   /**
	* Get the full list of addendums
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$addendums = Model\Addendum::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($addendums as &$f){
			$created_by = $f->createdBy()->find_one()->as_array();
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['created_by'] = $created_by;
			$f['updated_by'] = $updated_by;
		}

		return $addendums;
	}

	/**
	* Gets a addendum
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$addendum = Model\Addendum::find_one($id);

		if(!$addendum){
            throw new RestException(404, 'addendum not found');			
		}

		$s = $addendum;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a addendum
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$addendum = Model\Addendum::find_one($id);

		if($addendum) $addendum->delete();
		
		return;	
	}

	/**
	* Update a addendum
	*
	* @url PUT /{id} {@from path}
	* @param string $description {@from body} The description of the addendum
	* @param string $file {@from body} The file of the addendum
	*/
	protected function update($id, $description = null, $file = null) {

		$user = Auth::user();

		$addendum = Model\Addendum::find_one($id);
		if(!$addendum) throw new RestException(404, 'addendum not found');	

		if(!is_null($description)) $addendum->description = $description;
		if(!is_null($file)) $addendum->file = $file;

		$addendum->updated_at = time();
		$addendum->updated_by = $user->id;
		$addendum->save();

		$summary = $addendum->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $addendum;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a addendum
	*
	* @url POST /
	* @param integer $summary_id {@from body} The attached summary
	* @param string $description {@from body} The description of the addendum
	* @param string $file {@from body} The file of the addendum
	*/
	protected function create($summary_id, $description = null, $file = null) {

		$user = Auth::user();

		$addendum = Model\Addendum::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$addendum->summary_id = $summary->id;
		if(!is_null($description)) $addendum->description = $description;
		if(!is_null($file)) $addendum->file = $file;

		$addendum->created_at = time();
		$addendum->created_by = $user->id;
		$addendum->save();

		$s = $addendum;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
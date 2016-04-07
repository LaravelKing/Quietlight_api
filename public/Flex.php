<?php
use Luracast\Restler\RestException;

class Flex {

	/**
	* Get the full list of flexes
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$flexes = Model\Flex::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($flexes as &$f) {
			$created_by = $f->createdBy()->find_one()->as_array();
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['created_by'] = $created_by;
			$f['updated_by'] = $updated_by;
		}

		return $flexes;
	}

	/**
	* Gets a flex
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$flex = Model\Flex::find_one($id);

		if(!$flex){
            throw new RestException(404, 'flex not found');			
		}

		$s = $flex;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a flex
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$flex = Model\Flex::find_one($id);

		if($flex) $flex->delete();

		return;
	}

	/**
	* Update a flex
	*
	* @url PUT /{id} {@from path}
	* @param int $id
	* @param string $body {@from body} The table the flex is associated to
	* @param string $orientation {@from body} The orientation the flex is associated to
	* @param int $summary_id {@from body} The summary_id of the associated table
	*/
	protected function update($id, $body = NULL, $orientation=NULL,$summary_id= NULL) {

		$user = Auth::user();

		$flex = Model\Flex::find_one($id);
		if(!$flex) throw new RestException(404, 'flex not found');

		if(!is_null($body)) $flex->body = $body;
		if(!is_null($orientation)) $flex->orientation = $orientation;


		if(!is_null($summary_id)){
			$summary = Model\Summary::find_one($summary_id);
			if($summary) $flex->summary_id = $summary->id;
		}


		$flex->updated_at = time();
		$flex->updated_by = $user->id;
		$flex->save();

		$s = $flex;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a flex
	*
	* @url POST /
	* @param int $summary_id {@from body} The attached summary
	* @param string $body {@from body} The body of the flex
	* @param string $orientation {@from body} The orientation the flex is associated to
	*/
	protected function create($summary_id, $body = NULL,$orientation=NULL) {

		$user = Auth::user();

		$flex = Model\Flex::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$flex->summary_id = $summary->id;
		if(!is_null($body)) $flex->body = $body;
		if(!is_null($orientation)) $flex->orientation = $orientation;

		$flex->created_at = time();
		$flex->created_by = $user->id;
		$flex->save();

		$s = $flex;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
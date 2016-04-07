<?php
use Luracast\Restler\RestException;

class QuestionBox {

	/**
	* Get the full list of questionboxes
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$questionboxes = Model\QuestionBox::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($questionboxes as &$f) {
			$created_by = $f->createdBy()->find_one()->as_array();
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['created_by'] = $created_by;
			$f['updated_by'] = $updated_by;
		}

		return $questionboxes;
	}

	/**
	* Gets a questionbox
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$questionbox = Model\QuestionBox::find_one($id);

		if(!$questionbox){
            throw new RestException(404, 'questionbox not found');			
		}

		$s = $questionbox;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a questionbox
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$questionbox = Model\QuestionBox::find_one($id);

		if($questionbox) $questionbox->delete();

		return;
	}

	/**
	* Update a questionbox
	*
	* @url PUT /{id} {@from path}
	* @param int $id
	* @param string $body {@from body} The table the questionbox is associated to
	* @param int $summary_id {@from body} The summary_id of the associated table
	*/
	protected function update($id, $body = NULL, $summary_id= NULL) {

		$user = Auth::user();

		$questionbox = Model\QuestionBox::find_one($id);
		if(!$questionbox) throw new RestException(404, 'questionbox not found');

		if(!is_null($body)) $questionbox->body = $body;


		if(!is_null($summary_id)){
			$summary = Model\Summary::find_one($summary_id);
			if($summary) $questionbox->summary_id = $summary->id;
		}


		$questionbox->updated_at = time();
		$questionbox->updated_by = $user->id;
		$questionbox->save();

		$s = $questionbox;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a questionbox
	*
	* @url POST /
	* @param int $summary_id {@from body} The attached summary
	* @param string $body {@from body} The body of the questionbox
	*/
	protected function create($summary_id, $body = NULL) {

		$user = Auth::user();

		$questionbox = Model\QuestionBox::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$questionbox->summary_id = $summary->id;
		if(!is_null($body)) $questionbox->body = $body;

		$questionbox->created_at = time();
		$questionbox->created_by = $user->id;
		$questionbox->save();

		$s = $questionbox;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
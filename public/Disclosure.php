<?php
use Luracast\Restler\RestException;

class Disclosure {

   /**
	* Get the full list of disclosures
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$disclosures = Model\Disclosure::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($disclosures as &$f){
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['updated_by'] = $updated_by;
		}

		return $disclosures;
	}

	/**
	 * Gets a disclosure
	 *
	 * @url GET /{id}
	*/
	protected function get($id) {

		$disclosure = Model\Disclosure::find_one($id);

		if(!$disclosure){
            throw new RestException(404, 'disclosure not found');			
		}

		$s = $disclosure;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Delete a disclosure
	 *
	 * @url DELETE /{id}
	*/
	protected function delete($id) {
		//Unimplemented, cascade of FK deletes disclosures
		throw new RestException(404, 'unimplemented');	
	}

	/**
	 * Update a disclosure
	 *
	 * @url PUT /{id} {@from path}
	 * @param string $body {@from body} The body of the disclosure
	*/
	protected function update($id, $body) {

		$user = Auth::user();

		$disclosure = Model\Disclosure::find_one($id);
		if(!$disclosure) throw new RestException(404, 'disclosure not found');	

		if(!is_null($body)) $disclosure->body = $body;

		$disclosure->updated_at = time();
		$disclosure->updated_by = $user->id;
		$disclosure->save();

		$summary = $disclosure->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $disclosure;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Create a disclosure
	 *
	 * @url POST /
	 * @param integer $summary_id {@from body} The attached summary
	 * @param string $body {@from body} The body of the disclosure
	*/
	protected function create($summary_id, $body = NULL) {

		$user = Auth::user();

		$disclosure = Model\Disclosure::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$disclosure->summary_id = $summary->id;
		if(!is_null($body)) $disclosure->body = $body;

		$disclosure->created_at = time();
		$disclosure->save();

		$s = $disclosure;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
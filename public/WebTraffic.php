<?php
use Luracast\Restler\RestException;

class WebTraffic {

   /**
	* Get the full list of webtraffics
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$webtraffics = Model\WebTraffic::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($webtraffics as &$f){
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['updated_by'] = $updated_by;
		}

		return $webtraffics;
	}

	/**
	 * Gets a webtraffic
	 *
	 * @url GET /{id}
	*/
	protected function get($id) {

		$webtraffic = Model\WebTraffic::find_one($id);

		if(!$webtraffic){
            throw new RestException(404, 'webtraffic not found');			
		}

		$s = $webtraffic;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Delete a webtraffic
	 *
	 * @url DELETE /{id}
	*/
	protected function delete($id) {
		//Unimplemented, cascade of FK deletes webtraffics
		throw new RestException(404, 'unimplemented');	
	}

	/**
	 * Update a webtraffic
	 *
	 * @url PUT /{id} {@from path}
	 * @param string $body {@from body} The body of the webtraffic
	*/
	protected function update($id, $body='') {

		$user = Auth::user();

		$webtraffic = Model\WebTraffic::find_one($id);
		if(!$webtraffic) throw new RestException(404, 'webtraffic not found');	

		if(!is_null($body)) $webtraffic->body = $body;

		$webtraffic->updated_at = time();
		$webtraffic->updated_by = $user->id;
		$webtraffic->save();

		$summary = $webtraffic->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $webtraffic;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Create a webtraffic
	 *
	 * @url POST /
	 * @param integer $summary_id {@from body} The attached summary
	 * @param string $body {@from body} The body of the webtraffic
	*/
	protected function create($summary_id, $body = NULL) {

		$user = Auth::user();

		$webtraffic = Model\WebTraffic::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$webtraffic->summary_id = $summary->id;
		if(!is_null($body)) $webtraffic->body = $body;

		$webtraffic->created_at = time();
		$webtraffic->save();

		$s = $webtraffic;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
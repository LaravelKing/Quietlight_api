<?php
use Luracast\Restler\RestException;

class Financial {

   /**
	* Get the full list of financials
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$financials = Model\Financial::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($financials as &$f){
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['updated_by'] = $updated_by;
		}

		return $financials;
	}

	/**
	 * Gets a financial
	 *
	 * @url GET /{id}
	*/
	protected function get($id) {

		$financial = Model\Financial::find_one($id);

		if(!$financial){
            throw new RestException(404, 'financial not found');			
		}

		$s = $financial;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Delete a financial
	 *
	 * @url DELETE /{id}
	*/
	protected function delete($id) {
		//Unimplemented, cascade of FK deletes financials
		throw new RestException(404, 'unimplemented');	
	}

	/**
	 * Update a financial
	 *
	 * @url PUT /{id} {@from path}
	 * @param integer $id {@from path} The ID of the financial
	 * @param string $body {@from body} The body of the financial
	 * @param string $pl_link {@from body} The link to download the Profit Loss statements
	*/
	protected function update($id, $body=null, $pl_link=null) {

		$user = Auth::user();

		$financial = Model\Financial::find_one($id);
		if(!$financial) throw new RestException(404, 'financial not found');	

		if(!is_null($body)) $financial->body = $body;
		if(!is_null($pl_link)) $financial->pl_link = $pl_link;

		$financial->updated_at = time();
		$financial->updated_by = $user->id;
		$financial->save();

		$summary = $financial->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $financial;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	 * Create a financial
	 *
	 * @url POST /
	 * @param integer $summary_id {@from body} The attached summary
	 * @param string $body {@from body} The body of the financial
	 * @param string $pl_link {@from body} The link to download the P/L statements
	*/
	protected function create($summary_id, $body = NULL, $pl_link = NULL) {

		$user = Auth::user();

		$financial = Model\Financial::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$financial->summary_id = $summary->id;
		if(!is_null($body)) $financial->body = $body;
		if(!is_null($pl_link)) $financial->pl_link = $pl_link;

		$financial->created_at = time();
		$financial->save();

		$s = $financial;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
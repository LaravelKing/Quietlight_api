<?php
use Luracast\Restler\RestException;

class Summary {

	/**
	 * Get the full list of summaries
	 *
	 * @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$summaries = Model\Summary::raw_query("SELECT * FROM summary 
													    ORDER BY if(updated_at, updated_at, created_at) DESC
													    LIMIT :limit
													    OFFSET :offset",
											  ['limit' => intval($limit), 'offset' => intval($offset)])
								  ->find_many();

		$more_summaries = Model\Summary::raw_query("SELECT * FROM summary
													    ORDER BY if(updated_at, updated_at, created_at) DESC 
													    LIMIT 1
													    OFFSET :offset",
											  ['offset' => intval($limit+$offset)])
								       ->find_one();


		foreach($summaries as &$s){
			$created_by = $s->createdBy()->find_one()->as_array();
			$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
			$generated_by = $s->generatedBy()->find_one(); $generated_by = ($generated_by) ? $generated_by->as_array() : null;

			$s = $s->as_array();
			$s['created_by'] = $created_by;
			$s['updated_by'] = $updated_by;
			$s['generated_by'] = $generated_by;
		}
		return ['summaries'=>$summaries, 'next'=>($more_summaries)?1:0,'prev'=>($offset != 0) ? 1 : 0];
	}

	/**
	 * Gets a summary
	 *
	 * @url GET /{id}
	*/
	protected function get($id) {

		$s = Model\Summary::find_one($id);

		if(!$s){
            throw new RestException(404, 'summary not found');			
		}

		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$generated_by = $s->generatedBy()->find_one(); $generated_by = ($generated_by) ? $generated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;
		$s['generated_by'] = $generated_by;

		return $s;
	}

	/**
	 * Delete a summary
	 *
	 * @url DELETE /{id}
	*/
	protected function delete($id) {

		$summary = Model\Summary::find_one($id);

		if($summary) $summary->delete();

		return;
	}

	/**
	 * Update a summary
	 *
	 * @url PUT /{id} {@from path}
	 * @param string $name {@from body} The name of the summary
	*/
	protected function update($id, $name = NULL) {

		$user = Auth::user();

		$summary = Model\Summary::find_one($id);
		if(!$summary) throw new RestException(404, 'summary not found');	

		if(!is_null($name)) $summary->name = $name;
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $summary;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$generated_by = $s->generatedBy()->find_one(); $generated_by = ($generated_by) ? $generated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;
		$s['generated_by'] = $generated_by;

		return $s;
	}

	/**
	 * Generated a summary
	 *
	 * @url POST /{id}/generated {@from path}
	 * @param int $id {@from body} The int of the summary
	 * @param string $file {@from body} The filename of the summary
	 * @param string $thumb {@from body} The thumb of the summary
	 * @param int $generator {@from body} The generator of the summary
	*/
	protected function generated($id, $file = NULL, $thumb = NULL, $generator = NULL) {

		$user = Auth::user();

		$summary = Model\Summary::find_one($id);
		if(!$summary) throw new RestException(404, 'summary not found');	

		if(!is_null($file)) $summary->file = $file;
		if(!is_null($thumb)) $summary->thumb = $thumb;
		$summary->generated_at = time();
		$summary->generated_by = $generator;
		$summary->save();

		$s = $summary;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$generated_by = $s->generatedBy()->find_one(); $generated_by = ($generated_by) ? $generated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;
		$s['generated_by'] = $generated_by;

		return $s;
	}

	/**
	 * Create a summary
	 *
	 * @url POST /
	 * @param string $name {@from body} The name of the summary
	*/
	protected function create($name) {

		$user = Auth::user();

		$summary = Model\Summary::create();
		$summary->name = $name;
		$summary->created_by = $user->id;
		$summary->created_at = time();
		$summary->save();

		$s = $summary;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$generated_by = $s->generatedBy()->find_one(); $generated_by = ($generated_by) ? $generated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;
		$s['generated_by'] = $generated_by;

		return $s;
	}
}
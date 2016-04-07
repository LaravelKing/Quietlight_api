<?php
use Luracast\Restler\RestException;

class Title {

	/**
	* Get the full list of title
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$titles = Model\Title::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($titles as &$s){
			$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
			$advisor = $s->advisor()->find_one(); $advisor = ($advisor) ? $advisor->as_array() : null;

			$s = $s->as_array();
			$s['updated_by'] = $updated_by;
			$s['advisor'] = $advisor;
		}

		return $titles;
	}

	/**
	* Gets a title
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$title = Model\Title::find_one($id);

		if(!$title){
            throw new RestException(404, 'title not found');			
		}

		$s = $title;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$advisor = $s->advisor()->find_one(); $advisor = ($advisor) ? $advisor->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;
		$s['advisor'] = $advisor;

		return $s;
	}

	/**
	* Delete a title
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {
		//Unimplemented, cascade of FK deletes titles
		throw new RestException(404, 'unimplemented');	
	}

	/**
	* Update a title
	*
	* @url PUT /{id} {@from path}
	* @param int $id {@from body} the title id
	* @param string $name {@from body} The name of the summary
	* @param string $tagline {@from body} The tagline of the summary
	* @param string|float $asking_price {@from body} The asking_price of the summary
	* @param int $advisor_id {@from body} The advisor_id of the summary
	*/
	protected function update($id, $name = NULL, $tagline = NULL, $asking_price = NULL, $advisor_id = NULL ) {

		$user = Auth::user();

		$title = Model\Title::find_one($id);
		if(!$title) throw new RestException(404, 'title not found');	

		if(!is_null($name)) $title->name = $name;
		if(!is_null($tagline)) $title->tagline = $tagline;
		if(!is_null($asking_price)) $title->asking_price = $asking_price;

		$advisor = Model\User::find_one($advisor_id);
		if($advisor) $title->advisor_id = $advisor->id;

		$title->updated_at = time();
		$title->updated_by = $user->id;
		$title->save();

		$summary = $title->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $title;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$advisor = $s->advisor()->find_one(); $advisor = ($advisor) ? $advisor->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;
		$s['advisor'] = $advisor;

		return $s;
	}

	/**
	* Create a title
	*
	* @url POST /
	* @param integer $summary_id {@from body} The attached summary
	* @param string $name {@from body} The name
	* @param string $tagline {@from body} The tagline
	* @param string|float $asking_price {@from body} Asking price 
	* @param integer $advisor_id {@from body} The attached summary
	*/
	protected function create($summary_id, $name = NULL, $tagline = NULL, $asking_price = NULL, $advisor_id = NULL) {

		$user = Auth::user();

		$title = Model\Title::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$title->summary_id = $summary->id;
		if(!is_null($name)) $title->name = $name;
		if(!is_null($tagline)) $title->tagline = $tagline;
		if(!is_null($asking_price)) $title->asking_price = $asking_price;


		$advisor = Model\User::find_one($advisor_id);
		if($advisor) $title->advisor_id = $advisor->id;

		$title->created_at = time();
		$title->save();

		$s = $title;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;
		$advisor = $s->advisor()->find_one(); $advisor = ($advisor) ? $advisor->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;
		$s['advisor'] = $advisor;

		return $s;
	}
}
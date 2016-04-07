<?php
use Luracast\Restler\RestException;

class Question {

	/**
	* Get the full list of questions
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$questions = Model\Question::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($questions as &$s){
			$created_by = $s->createdBy()->find_one()->as_array();
			$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$s = $s->as_array();
			$s['created_by'] = $created_by;
			$s['updated_by'] = $updated_by;
		}

		return $questions;
	}

	/**
	* Gets a question
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$question = Model\Question::find_one($id);

		if(!$question){
            throw new RestException(404, 'question not found');			
		}

		$s = $question;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a question
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$question = Model\Question::find_one($id);

		if($question) $question->delete();
		

		return;
	}

	/**
	* Create a question
	*
	* @url POST /
	* @param integer $summary_id {@from body} The attached summary
	* @param string $header {@from body} The header 
	* @param string $question {@from body} The question 
	* @param string $answer {@from body} The answer 
	*/
	protected function create($summary_id, $header = NULL, $question = NULL, $answer = NULL) {

		$user = Auth::user();

		$questionObj = Model\Question::create();

		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$questionObj->summary_id = $summary->id;
		if(!is_null($header)) $questionObj->header = $header;
		if(!is_null($question)) $questionObj->question = $question;
		if(!is_null($answer)) $questionObj->answer = $answer;


		$questionObj->created_by = $user->id;
		$questionObj->created_at = time();
		$questionObj->save();

		$s = $questionObj;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Update a question
	*
	* @url PUT /{id} {@from path}
	* @param integer $summary_id {@from body} The attached summary
	* @param string $header {@from body} The question's header 
	* @param string $question {@from body} The question 
	* @param string $answer {@from body} The answer 
	*/
	protected function update($id, $header = NULL, $question = NULL, $answer = NULL) {

		$user = Auth::user();

		$questionObj = Model\Question::find_one($id);
		if(!$questionObj) throw new RestException(404, 'question not found');	

		if(!is_null($header)) $questionObj->header = $header;
		if(!is_null($question)) $questionObj->question = $question;
		if(!is_null($answer)) $questionObj->answer = $answer;

		$questionObj->updated_at = time();
		$questionObj->updated_by = $user->id;
		$questionObj->save();

		$s = $questionObj;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

}
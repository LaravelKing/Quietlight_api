<?php
use Luracast\Restler\RestException;

class Config {

	/**
	* Get the full list of configs
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0, $summary_id = null) {
		if(is_null($summary_id)){
			$configs = Model\Config::where_null('summary_id')
						->limit(intval($limit))
						->offset(intval($offset))
						->find_many();
		} else {
			$configs = Model\Config::where('summary_id', $summary_id)
									->limit(intval($limit))
									->offset(intval($offset))
									->find_many();
		}

		foreach($configs as &$f){
			$created_by = $f->createdBy()->find_one()->as_array();
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['created_by'] = $created_by;
			$f['updated_by'] = $updated_by;

		}

		return $configs;
	}

	/**
	* Gets a config
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$config = Model\Config::find_one($id);

		if(!$config){
            throw new RestException(404, 'config not found');			
		}

		$s = $config;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}


   /**
	* Finds a config
	*
	* @url GET /find
	* @param string $key 
	* @param string $summary_id
	*/
	protected function find($key, $summary_id = null) {

		$config = Model\Config::where('name',$key);
		if(is_null($summary_id)){
			$config->where_null("summary_id");
		} else {
			$config->where("summary_id", $summary_id);
		}
		$config = $config->find_one();

		if(!$config){
            throw new RestException(404, 'config not found');			
		}

		$s = $config;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a config
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {

		$config = Model\Config::find_one($id);

		if($config) $config->delete();

		return;
	}

	/**
	* Update a config
	*
	* @url PUT /{id} {@from path}
	* @param int $id
	* @param string $name {@from body} The table the config is associated to
	* @param string $value {@from body} The table the config is associated to
	*/
	protected function update($id, $name = NULL, $value = NULL) {

		$user = Auth::user();

		$config = Model\Config::find_one($id);
		if(!$config) throw new RestException(404, 'config not found');

		if(!is_null($name)) $config->name = $name;
		if(!is_null($value)) $config->value = $value;

		$config->updated_at = time();
		$config->updated_by = $user->id;
		$config->save();

		$s = $config;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a config
	*
	* @url POST /
	* @param int $summary_id {@from body} The attached summary
	* @param string $name {@from body} The name of the config
	* @param string $value {@from body} The value of the config
	*/
	protected function create($summary_id = NULL, $name = NULL, $value = NULL) {

		$user = Auth::user();

		$config = Model\Config::create();
		
		if(!is_null($summary_id)){
			$summary = Model\Summary::find_one($summary_id);
			if(!$summary) throw new RestException(400, 'referenced summary not found');
			$config->summary_id = $summary->id;
		}

		if(!is_null($name)) $config->name = $name;
		if(!is_null($value)) $config->value = $value;

		$config->created_at = time();
		$config->created_by = $user->id;
		$config->save();

		$s = $config;
		$created_by = $s->createdBy()->find_one()->as_array();
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['created_by'] = $created_by;
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
<?php
use Luracast\Restler\RestException;

class FinancialV2 {

   /**
	* Get the full list of financials
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$financials = Model\FinancialV2::limit(intval($limit))
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

		$financial = Model\FinancialV2::find_one($id);

		if(!$financial){
            throw new RestException(404, 'financialv2 not found');			
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
	 * @param string $csvbody {@from body} The csvbody of the financial
	 * @param string|integer $output_template {@from body} The output_template of the financial
	 * @param string $graph1 {@from body} 
	 * @param string $graph2 {@from body}
	 * @param string $graph1_data {@from body} 
	 * @param string $graph2_data {@from body}  
	 * @param string $table1 {@from body} 
	 * @param string $table2 {@from body}
	*/
	protected function update($id, $csvbody=null, $output_template=null, $graph1=null, $graph2=null, $graph1_data=null, $graph2_data=null, $table1=null, $table2=null) {

		$user = Auth::user();

		$financial = Model\FinancialV2::find_one($id);
		if(!$financial) throw new RestException(404, 'financialv2 not found');	

		if(!is_null($csvbody)) $financial->csvbody = $csvbody;
		if(!is_null($output_template)) $financial->output_template = $output_template;
		if(!is_null($graph1)) $financial->graph1 = $graph1;
		if(!is_null($graph2)) $financial->graph2 = $graph2;
		if(!is_null($graph1_data)) $financial->graph1_data = $graph1_data;
		if(!is_null($graph2_data)) $financial->graph2_data = $graph2_data;
		if(!is_null($table1)) $financial->table1 = $table1;
		if(!is_null($table2)) $financial->table2 = $table2;

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
	 * @param string $csvbody {@from body} The csvbody of the financial
	 * @param string|integer $output_template {@from body} The output_template of the financial
	 * @param string $graph1 {@from body} 
	 * @param string $graph2 {@from body} 
	 * @param string $graph1_data {@from body} 
	 * @param string $graph2_data {@from body} 
	 * @param string $table1 {@from body} 
	 * @param string $table2 {@from body} 
	*/
	protected function create($summary_id, $csvbody=NULL, $output_template=null, $graph1=null, $graph2=null, $graph1_data=null, $graph2_data=null,$table1=null, $table2=null) {

		$user = Auth::user();

		$financial = Model\FinancialV2::create();
		
		$summary = Model\Summary::find_one($summary_id);
		if(!$summary) throw new RestException(400, 'referenced summary not found');

		$financial->summary_id = $summary->id;
		if(!is_null($csvbody)) $financial->csvbody = $csvbody;
		if(!is_null($output_template)) $financial->output_template = $output_template;
		if(!is_null($graph1)) $financial->graph1 = $graph1;
		if(!is_null($graph2)) $financial->graph2 = $graph2;
		if(!is_null($graph1_data)) $financial->graph1_data = $graph1_data;
		if(!is_null($graph2_data)) $financial->graph2_data = $graph2_data;
		if(!is_null($table1)) $financial->table1 = $table1;
		if(!is_null($table2)) $financial->table2 = $table2;

		$financial->created_at = time();
		$financial->save();

		$s = $financial;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
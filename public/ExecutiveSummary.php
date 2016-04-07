<?php
use Luracast\Restler\RestException;

class ExecutiveSummary {

	/**
	* Get the full list of executive summary
	*
	* @url GET /
	*/
	protected function index($limit = 5, $offset = 0) {
		$es = Model\ExecutiveSummary::limit(intval($limit))
						->offset(intval($offset))
						->find_many();

		foreach($es as &$f){
			$updated_by = $f->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

			$f = $f->as_array();
			$f['updated_by'] = $updated_by;
		}

		return $es;
	}

	/**
	* Gets a Executive Summary
	*
	* @url GET /{id}
	*/
	protected function get($id) {

		$executivesummary = Model\ExecutiveSummary::find_one($id);

		if(!$executivesummary){
            throw new RestException(404, 'executive summary not found');			
		}

		$s = $executivesummary;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Delete a Executive Summary
	*
	* @url DELETE /{id}
	*/
	protected function delete($id) {
		//Unimplemented, cascade of FK deletes executive summarys
		throw new RestException(404, 'unimplemented');	
	}

	/**
	* Update a Executive Summary
	*
	* @url PUT /{id} {@from path}
	* @param int $id {@from url} The id of the executive summary
	* @param string $summary {@from body2} The summuary of the executive summary
	* @param string $benefits Benefits
	* @param float $total_revenue
	* @param float $discretionary_earnings
	* @param float $gross_profit
	* @param string|float $asking_price
	* @param string|float $inventory
	* @param string $inventory_footnote
	* @param float $inventory_included
	* @param float $show_multiple
	*/
	protected function update($id, $summary=null, $benefits=null, $total_revenue=null, 
							  $discretionary_earnings=null, $gross_profit=null, 
							  $asking_price=null, $inventory=null, $inventory_footnote=null, $inventory_included=null,
							  $show_multiple=null) {

		$user = Auth::user();

		$executivesummary = Model\ExecutiveSummary::find_one($id);
		if(!$executivesummary) throw new RestException(404, 'executive summary not found');	

		if(!is_null($summary)) $executivesummary->summary = $summary;
		if(!is_null($benefits)) $executivesummary->benefits = $benefits;
		if(!is_null($total_revenue)) $executivesummary->total_revenue = $total_revenue;
		if(!is_null($discretionary_earnings)) $executivesummary->discretionary_earnings = $discretionary_earnings;
		if(!is_null($gross_profit)) $executivesummary->gross_profit = $gross_profit;
		if(!is_null($asking_price)) $executivesummary->asking_price = $asking_price;
		if(!is_null($inventory)) $executivesummary->inventory = $inventory;
		if(!is_null($inventory_footnote)) $executivesummary->inventory_footnote = $inventory_footnote;
		if(!is_null($inventory_included)) $executivesummary->inventory_included = $inventory_included;
		if(!is_null($show_multiple)) $executivesummary->show_multiple = $show_multiple;

		$executivesummary->updated_at = time();
		$executivesummary->updated_by = $user->id;
		$executivesummary->save();

		$summary = $executivesummary->summary()->find_one();
		$summary->updated_at = time();
		$summary->updated_by = $user->id;
		$summary->save();

		$s = $executivesummary;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}

	/**
	* Create a Executive Summary
	*
	* @url POST /
	* @param integer $summary_id {@from body} The attached summary
	* @param string $summary {@from body} The summary of the executive summary
	* @param array $benefits {@from body} An array of benefits
	*/
	protected function create($summary_id, $summary = NULL, $benefits = null, $total_revenue=null, 
							  $discretionary_earnings=null, $gross_profit=null, 
							  $asking_price=null, $inventory=null, $inventory_footnote=null, $inventory_included=null,
							  $show_multiple=null) {

		$user = Auth::user();

		$executivesummary = Model\ExecutiveSummary::create();
		
		$summaryObj = Model\Summary::find_one($summary_id);
		if(!$summaryObj) throw new RestException(400, 'referenced summary not found');

		$executivesummary->summary_id = $summaryObj->id;
		if(!is_null($summary)) $executivesummary->summary = $summary;
		if(!is_null($benefits)) $executivesummary->benefits = $benefits;
		if(!is_null($total_revenue)) $executivesummary->total_revenue = $total_revenue;
		if(!is_null($discretionary_earnings)) $executivesummary->discretionary_earnings = $discretionary_earnings;
		if(!is_null($gross_profit)) $executivesummary->gross_profit = $gross_profit;
		if(!is_null($asking_price)) $executivesummary->asking_price = $asking_price;
		if(!is_null($inventory)) $executivesummary->inventory = $inventory;
		if(!is_null($inventory_footnote)) $executivesummary->inventory_footnote = $inventory_footnote;
		if(!is_null($inventory_included)) $executivesummary->inventory_included = $inventory_included;
		if(!is_null($show_multiple)) $executivesummary->show_multiple = $show_multiple;

		$executivesummary->created_at = time();
		$executivesummary->save();

		$s = $executivesummary;
		$updated_by = $s->updatedBy()->find_one(); $updated_by = ($updated_by) ? $updated_by->as_array() : null;

		$s = $s->as_array();
		$s['updated_by'] = $updated_by;

		return $s;
	}
}
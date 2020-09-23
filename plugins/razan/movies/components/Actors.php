<?php namespace Razan\Movies\Components;
use Cms\Classes\ComponentBase;
use Razan\Movies\Models\Actor;

class Actors extends ComponentBase{

public function componentDetails(){

return [
'name' => 'Actor List',
'description' => 'list of actors'

];

}


public function defineProperties(){

	return[
		'results' =>[
			'title' => 'Number Of Actors',
			'description' => 'How many actors do u want to display?',
			'default' => 0,
			'validationPattern' => '^[0-9]+$',
			'validationMessage' => 'Only numbers allowed'

		],


		'sortOrder' =>[

				'title' => 'Sort Actors',
				'description' => 'sort those actors',
				'type' => 'dropdown' ,
				'default' => 'name asc'

		]


	];
}


public function getSortOrderOptions(){

	return[
		'name asc' =>'Name (ascending)',
		'name desc' =>'Name (descending)'
		


	];
}

protected function loadActors(){
		$query = Actor::all();
		if($this->property('results')>0){

			$query=$query->take($this->property('results'));
		}

if($this->property('sortOrder') == 'name aec'){

			$query=$query->sortBy('name');
		}

		if($this->property('sortOrder') == 'name desc'){

			$query=$query->sortByDesc('name');
		}

	return $query;
}

public function onRun(){


	$this->actors =$this->loadActors();
}

public $actors;

}
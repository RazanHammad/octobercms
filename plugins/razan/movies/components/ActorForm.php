<?php namespace Razan\Movies\Components;

use Cms\Classes\ComponentBase;
use Input;

use Validator;
use Redirect;
use System\Models\File;
use Razan\Movies\Models\Actor;

class ActorForm extends ComponentBase{


	public function componentDetails(){

			return[

				'name' => 'Actor Form',
				'description' => 'Enter Actors'
	];
	
	}


	public function onSubmit(){
			
		$actor = new Actor();
		$actor->name = Input::get('name');
	
		$actor->lastname= Input::get('lastname');
		$actor->actor_image=Input::file('actor_image');
		//dd(Input::file('actorimage'));
		$actor->save();

		}

	
	}

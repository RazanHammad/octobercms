<?php namespace Razan\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use razan\Movies\Models\Actor;


class ActorBox extends FormWidgetBase{

public function widgetdetails(){

	return [
			'name' => 'Actorbox',
			'description' => 'field for adding actors'



	];
}


public function prepareVars(){

	$this->vars['id'] = $this->model->id;// for what ? / without it , it displays the actors really . - it seems that it is for the model id.
	$this->vars['actors'] = Actor::all()->lists('full_name','id');
	$this->vars['name']=$this->formField->getName().'[]';
	if(!empty($this->getLoadValue())){
		$this->vars['selectedValues'] = $this->getLoadValue();
	}
	else 
	{
		$this->vars['selectedValues'] = [];
	}
	
}

public function getSaveValue($actors){
	
$newArray =[];
foreach ($actors as $actorID ) {
	if (!is_numeric($actorID)) {
		$newActor = new Actor;
		$nameLastname = explode(' ' , $actorID);
		$newActor->name = $nameLastname[0];
		$newActor->lastname=$nameLastname[1];
		$newActor->save();

	$newArray[] = $newActor->id;
}

else
{
	$newArray[]= $actorID;
}
}


return $actors;

}


public function render(){
		$this->prepareVars();
			//dump($this->vars['id']);
		//dump($this->vars['actors']);
   return $this->makePartial('widget');

}

public function loadAssets(){

	$this->addCss('css/select2.css');
	$this->addJs('js/select2.js');
}

}
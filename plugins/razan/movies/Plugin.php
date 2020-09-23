<?php namespace Razan\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
                'Razan\Movies\Components\Actors' => 'actors',
                'Razan\Movies\Components\ActorForm' => 'actorform',


        ];
    }

    public function registerSettings()
    {
    }


    public function registerFormWidgets(){

    	return [

            'Razan\Movies\FormWidgets\Actorbox'=>
    			['label' => 'Actorbox Field',
    			'code' => 'actorbox']


    	];
    }


}

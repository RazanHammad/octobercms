<?php namespace Razan\Movies\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Genres extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Razan.Movies', 'Movies', 'side-menu-item');
    }
}

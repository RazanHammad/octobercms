<?php namespace Razan\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'razan_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

//protected $jsonable = ['actors'];

public $belongsToMany =[
'genres' => [
'razan\movies\models\Genre', // movie belongs to many genre
'table' => 'razan_movies_movies_genres', // pivot yable
'order' =>'general_title' // genre column that has the relation

],

'actors' =>[
'razan\movies\models\Actor',
'table' => 'razan_movies_movies_actors',
'order' => 'name'
]

];
    public $attachOne =['poster' => 'System\Models\File'];
       public $attachMany =['movie_gallary' => 'System\Models\File'];
}

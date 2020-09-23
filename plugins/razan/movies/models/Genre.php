<?php namespace Razan\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'razan_movies_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsToMany =[
'movies' => [
'razan\movies\models\Movie', // genre belongs to many movies
'table' => 'razan_movies_movies_genres', // pivot yable
'order' =>'name' // order columns depends on the field exists in movies table "name attribute"

]

];
}

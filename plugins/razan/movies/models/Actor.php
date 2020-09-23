<?php namespace Razan\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
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
    public $table = 'razan_movies_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsToMany =[
'movies' => [
'razan\movies\models\Movie', // movie belongs to many genre
'table' => 'razan_movies_movies_actors', // pivot yable
'order' =>'name' // genre column that has the relation

]

];


public function getFullNAmeAttribute(){

    return $this->name." ".$this->lastname;
}

//protected $fillable=['name','lastname'];
public  $attachOne = [ 'actor_image' => 'System\Models\File'];
         
}

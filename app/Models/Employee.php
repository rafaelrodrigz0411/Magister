<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $age
 * @property $phone_number
 * @property $genre
 * @property $created_at
 * @property $updated_at
 *
 * @property DevelopmentTeam[] $developmentTeams
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'age' => 'required',
		'phone_number' => 'required',
		'genre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','age','phone_number','genre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function developmentTeams()
    {
        return $this->hasMany('App\Models\DevelopmentTeam', 'id_employees', 'id');
    }
    

}

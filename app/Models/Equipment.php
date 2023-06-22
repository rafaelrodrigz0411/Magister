<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipment
 *
 * @property $id
 * @property $name_of_person_in_charge
 * @property $development_area
 * @property $id_buldings
 * @property $created_at
 * @property $updated_at
 *
 * @property Bulding $bulding
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipment extends Model
{
    
    static $rules = [
		'name_of_person_in_charge' => 'required',
		'development_area' => 'required',
		'id_buldings' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_of_person_in_charge','development_area','id_buldings'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bulding()
    {
        return $this->hasOne('App\Models\Bulding', 'id', 'id_buldings');
    }
    

}

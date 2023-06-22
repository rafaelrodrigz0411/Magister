<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulding
 *
 * @property $id
 * @property $branch_number
 * @property $address
 * @property $phone_number
 * @property $created_at
 * @property $updated_at
 *
 * @property DevelopmentUnit[] $developmentUnits
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bulding extends Model
{
    
    static $rules = [
		'branch_number' => 'required',
		'address' => 'required',
		'phone_number' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_number','address','phone_number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function developmentUnits()
    {
        return $this->hasMany('App\Models\DevelopmentUnit', 'id_buldings', 'id');
    }
    

}

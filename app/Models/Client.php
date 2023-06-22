<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $age
 * @property $gender
 * @property $phone_number
 * @property $address
 * @property $employee_contact
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'phone_number' => 'required',
		'address' => 'required',
		'employee_contact' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','age','gender','phone_number','address','employee_contact'];



}

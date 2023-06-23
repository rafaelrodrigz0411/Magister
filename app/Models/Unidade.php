<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 *
 * @property $id
 * @property $name_project
 * @property $start_date
 * @property $end_date
 * @property $id_projects_managers
 * @property $created_at
 * @property $updated_at
 *
 * @property ProjectsManager $projectsManager
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidade extends Model
{
    
    static $rules = [
		'name_project' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
		'id_projects_managers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_project','start_date','end_date','id_projects_managers'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectsManager()
    {
        return $this->hasOne('App\Models\ProjectsManager', 'id', 'id_projects_managers');
    }
    

}

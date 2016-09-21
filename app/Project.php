<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Project;

use App\Task;

class Project extends Model
{
	protected $guarded = [];
    
    public function tasks()
	{
		return $this->hasMany('App\Task');
	}
}

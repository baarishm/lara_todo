<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Project;

use App\Task;

class Task extends Model
{
	protected $guarded = [];
    
    public function projects()
	{
		return $this->belongsTo('App\Project','project_id', 'id');
	}

}

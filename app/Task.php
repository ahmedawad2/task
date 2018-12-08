<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'project_id', 'status', 'finished_at'];
    protected $dates = ['finished_at'];

    public function scopeDoneTasks($query)
    {
        return $query->where('status', 'done');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}

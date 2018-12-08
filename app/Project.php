<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'created_by'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function doneTasks()
    {
        return $this->tasks()->where('status', 'done');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }


}

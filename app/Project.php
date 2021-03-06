<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}

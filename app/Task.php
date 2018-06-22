<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content', 'status'];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}

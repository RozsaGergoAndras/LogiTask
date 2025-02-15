<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    /** @use HasFactory<\Database\Factories\TasksFactory> */
    use HasFactory;

    public function tasktype()
    {
        return $this->hasMany(Tasktypes::class);
    }

    public function taskContent()
    {
        return $this->belongsTo(TaskContent::class);
    }

    public function assigner()
    {
        return $this->belongsTo(User::class, 'assigner');
    }

    public function worker()
    {
        return $this->belongsTo(User::class, 'worker');
    }
}

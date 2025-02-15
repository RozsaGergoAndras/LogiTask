<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskcontent extends Model
{
    /** @use HasFactory<\Database\Factories\TaskcontentFactory> */
    use HasFactory;

    public function tasks()
    {
        return $this->hasMany(Tasks::class);
    }
}

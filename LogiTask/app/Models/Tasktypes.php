<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasktypes extends Model
{
    /** @use HasFactory<\Database\Factories\TasktypesFactory> */
    use HasFactory;

    /*public function roles()
    {
        return $this->hasMany(Roles::class);
    }*/

    public function assingableRole()
    {
        return $this->hasMany(Roles::class);
    }
}

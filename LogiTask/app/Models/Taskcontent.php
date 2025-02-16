<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskcontent extends Model
{
    /** @use HasFactory<\Database\Factories\TaskcontentFactory> */
    use HasFactory;
    protected $fillable = ['taskId','packageId','link','workstation'];

    public function task()
    {
        return $this->hasOne(Tasks::class);
    }

    public function package(){
        return $this->hasMany(Packages::class);
    }
}

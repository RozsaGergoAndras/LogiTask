<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productionflowcontent extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionflowcontentFactory> */
    use HasFactory;

    public function tasktypes(){
        return $this->hasMany(Tasktypes::class);
    }
}

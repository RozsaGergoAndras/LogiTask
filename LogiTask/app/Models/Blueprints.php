<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blueprints extends Model
{
    /** @use HasFactory<\Database\Factories\BlueprintsFactory> */
    use HasFactory;

    public function Blueprintparts(){
        return $this->hasMany(Blueprintparts::class);
    }

    public function ProcuctionFlow(){
        return $this->hasMany(Productionflow::class);
    }
}

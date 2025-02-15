<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productionflow extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionflowFactory> */
    use HasFactory;

    public function productionflowContent(){
        return $this->hasMany(Productionflowcontent::class);
    }
}

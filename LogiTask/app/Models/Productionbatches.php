<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productionbatches extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionbatchesFactory> */
    use HasFactory;

    public function assigner()
    {
        return $this->hasMany(User::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productionflow', function (Blueprint $table) {
            $table->id(); // automatikus primary key
            $table->string('name', 255); // VARCHAR(255) a name oszlophoz
            $table->timestamps(); // created_at és updated_at oszlopok
            $table->softDeletes(); // soft delete mező (deleted_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productionflows');
    }
};

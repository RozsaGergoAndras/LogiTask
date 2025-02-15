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
        Schema::create('productionbatches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assigner');
            $table->integer('remainingCount');
            $table->integer('productionCount');
            $table->timestamp('assignedDate')->useCurrent();
            $table->unsignedBigInteger('blueprintid');
            $table->softDeletes(); // Soft delete mező hozzáadása
            $table->timestamps();
            //Kapcsolat
            $table->foreign('assigner')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blueprintid')->references('bpId')->on('blueprints')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

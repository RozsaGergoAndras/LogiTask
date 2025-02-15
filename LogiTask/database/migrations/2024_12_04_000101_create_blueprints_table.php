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
        Schema::create('blueprints', function (Blueprint $table) {
            $table->id('bpId');
            $table->string('bpName');
            $table->string('instructionlink')->nullable();
            //$table->unsignedBigInteger('productionflowid');
            $table->foreignId('productionflowid');
            $table->softDeletes(); // Soft delete mező hozzáadása
            $table->timestamps();
            //Kapcsolat
            $table->foreign('productionflowid')->references('id')->on('productionflows')->onDelete('cascade');
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

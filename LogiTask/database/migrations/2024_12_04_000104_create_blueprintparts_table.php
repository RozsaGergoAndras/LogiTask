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
        Schema::create('blueprintparts', function (Blueprint $table) {
            $table->id('bpId');
            $table->unsignedBigInteger('partId');
            $table->softDeletes(); // Soft delete mező hozzáadása
            $table->timestamps();

            //Kapcsolat
            $table->foreign('partId')->references('partId')->on('parts')->onDelete('cascade');
            $table->foreign('bpId')->references('bpId')->on('blueprints')->onDelete('cascade');
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

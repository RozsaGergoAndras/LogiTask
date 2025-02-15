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
        Schema::create('taskcontent', function (Blueprint $table) {
            $table->id('taskId');
            $table->unsignedBigInteger('packageId')->nullable();
            $table->string('link', 1000)->nullable();
            $table->unsignedBigInteger('workstation')->comment('melyik állomáson dolgozott a munkás. csak virtuális, nincs semmihez kötve');
            $table->softDeletes(); // Soft delete mező hozzáadása
            $table->timestamps();
            //Kapcsolat
            $table->foreign('packageId')->references('packageId')->on('packages');
            $table->foreign('taskId')->references('id')->on('tasks');
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

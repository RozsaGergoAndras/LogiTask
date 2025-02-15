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
        Schema::create('tasktypes', function (Blueprint $table) {
            $table->id('taskTypeId');
            $table->string('TaskTypeName');
            //$table->unsignedBigInteger('assignableRole');
            $table->foreignId('assignableRole')->references('id')->on('roles')->onDelete('cascade');
            $table->softDeletes(); // Soft delete mező hozzáadása
            $table->timestamps();
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

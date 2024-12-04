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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assigner');
            $table->unsignedBigInteger('worker')->nullable();
            $table->integer('state');
            $table->timestamp('state0Date')->useCurrent();
            $table->timestamp('state1Date')->nullable();
            $table->timestamp('state2Date')->nullable();
            $table->unsignedBigInteger('taskType');
            $table->text('description')->nullable();
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

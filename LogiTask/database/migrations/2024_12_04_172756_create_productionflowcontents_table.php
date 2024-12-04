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
        Schema::create('productionflowcontent', function (Blueprint $table) {
            $table->id(); // automatikus primary key
            $table->foreignId('flowId')->constrained('productionflow')->onDelete('cascade'); // foreign key a productionflow-ra
            $table->integer('sequentialnumber'); // INT oszlop a sorrendhez
            $table->integer('tasktypeid'); // INT oszlop a tasktypeid-hez
            $table->timestamps(); // created_at és updated_at oszlopok
            $table->softDeletes(); // soft delete mező (deleted_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productionflowcontents');
    }
};

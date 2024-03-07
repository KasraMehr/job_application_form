<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('first_work')->nullable();
            $table->string('second_work')->nullable();
            $table->string('third_work')->nullable();
            $table->string('fourth_work')->nullable();
            $table->string('first_project')->nullable();
            $table->string('second_project')->nullable();
            $table->string('third_project')->nullable();
            $table->string('fourth_project')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};

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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
			$table->text('bio')->nullable();
			$table->text('skills')->nullable();
			$table->text('technical_skills')->nullable();
			$table->text('work_experience')->nullable();
			$table->text('internships')->nullable();
			$table->string('college')->nullable();
			$table->string('email')->nullable();
			$table->string('linkedin')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

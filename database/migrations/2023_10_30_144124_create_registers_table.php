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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name_applicant');
            $table->integer('ruc');
            $table->string('type');
            $table->integer('number_register'); 
            $table->integer('number_folios');
            $table->integer('code_item')->nullable();
            $table->string('type_cp')->nullable();
            $table->string('type_ic')->nullable();
            $table->date('date');
            $table->Time('hour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('gender_id')->unsigned();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('document_type_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

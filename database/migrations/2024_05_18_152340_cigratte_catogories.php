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
      Schema::create('cigratte_categories', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('cigratte_id');
        $table->foreign('cigratte_id')->references('id')->on('cigrattes');
        $table->unsignedBigInteger('type_id');
        $table->foreign('type_id')->references('id')->on('cigratte_type');
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

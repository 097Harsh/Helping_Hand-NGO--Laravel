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
        Schema::create('Donation', function (Blueprint $table) {
            $table->id('D_id');
            $table->string('Title');
            $table->text('Description');
            $table->text('address');
            $table->date('donation_date');
            $table->string('status');
            $table->time('From_time');
            $table->time('To_Time');
            $table->string('contact_name');
            $table->bigInteger('contact_person');

             //city
             $table->unsignedBigInteger('city_id');
             // Foreign key constraint
             $table->foreign('city_id')->references('city_id')->on('city')->onDelete('cascade');
             //area
             $table->unsignedBigInteger('area_id');
             // Foreign key constraint
             $table->foreign('area_id')->references('area_id')->on('area')->onDelete('cascade');
             //users
             $table->unsignedBigInteger('user_id');
             // Foreign key constraint
             $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
             //Category
             $table->unsignedBigInteger('cat_id');
             // Foreign key constraint
             $table->foreign('cat_id')->references('cat_id')->on('category')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Donation');
    }
};

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
        Schema::create('money_donation', function (Blueprint $table) {
            $table->id('m_id');
            $table->string('d_name');
            $table->bigInteger('amt');
            $table->text('msg');
            $table->date('d_date');
            $table->string('payment_status');
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
        Schema::dropIfExists('money_donation');
    }
};

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
        Schema::create('volunteer_acceptance', function (Blueprint $table) {
            $table->id('v_id');
            $table->unsignedBigInteger('user_id');
            // Foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('D_id');
            // Foreign key constraint
            $table->foreign('D_id')->references('D_id')->on('donation')->onDelete('cascade');
            $table->dateTime('datetime');
            $table->string('status');
            //$table->text('description');
            $table->datetime('received_datetime');
            //$table->text('received_message');
            $table->dateTime('delivery_datetime');
            //$table->text('delivery_message'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_acceptance');
    }
};

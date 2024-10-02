<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->decimal('amount', 10, 2); // Amount donated
            $table->unsignedBigInteger('campaign_id'); // Foreign key for campaign
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key for user, nullable
            $table->boolean('approve')->default(0); // Approve field default set to 0 (boolean)
            $table->string('transaction_pic')->nullable(); // Image for transaction proof
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('campaign_id')->references('id')->on('campaign')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}

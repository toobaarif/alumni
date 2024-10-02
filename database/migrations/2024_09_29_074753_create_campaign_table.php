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
        Schema::create('campaign', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('timeline')->nullable();
            $table->text('objectives')->nullable();
            $table->text('why')->nullable();
            $table->decimal('maxCollection', 10, 2)->nullable();
            $table->decimal('minimum', 10, 2)->nullable();
            $table->boolean('status')->default(0); // 0 for inactive, 1 for active
            $table->string('coverPhoto')->nullable();
            $table->string('picOneMain')->nullable();
            $table->string('picTwo')->nullable();
            $table->string('accountName')->nullable();
            $table->string('bankName')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('accountName2')->nullable();
            $table->string('bankName2')->nullable();
            $table->string('accountNumber2')->nullable();
            $table->boolean('approve')->default(1); // Default approved
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign');
    }
};

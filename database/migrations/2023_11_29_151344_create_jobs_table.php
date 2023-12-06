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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('no_of_positions')->default(0);
            $table->date('application_deadline')->nullable();
            $table->smallInteger('status')->default(1)->comment('0 = closed, 1 = open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

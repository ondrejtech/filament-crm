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
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->foreignId('user_id');
            $table->foreignId('dell_id');
            $table->foreignId('project_id');
            $table->date('start');
            $table->date('due');
            $table->foreignId('company_id');
            $table->foreignId('contact_id');
            $table->date('reminder_date');
            $table->time('reminder_time');
            $table->longText('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};

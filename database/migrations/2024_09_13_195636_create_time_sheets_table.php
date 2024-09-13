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
        Schema::create('time_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->foreignId('time_sheet_type');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignId('project_id');
            $table->foreignId('deal_id');
            $table->foreignId('task_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_sheets');
    }
};

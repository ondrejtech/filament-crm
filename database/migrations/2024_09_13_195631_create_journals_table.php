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
        Schema::create('journals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->foreignId('journal_type_id');
            $table->foreignId('deal_id')->nullable();
            $table->foreignId('project_id')->nullable();
            $table->date('start_date');
            $table->time('start_time');
            $table->foreignId('company_id');
            $table->foreignId('contact_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};

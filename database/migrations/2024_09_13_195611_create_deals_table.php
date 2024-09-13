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
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->foreignId('company_id');
            $table->foreignId('contact_id');
            $table->string('email');
            $table->string('phone');
            $table->string('street');
            $table->string('town');
            $table->string('zip');
            $table->string('state');
            $table->string('country');
            $table->string('est_revenue');
            $table->foreignId('currency_name');
            $table->date('est_close_date');
            $table->float('probability');
            $table->string('referral_source');
            $table->foreignId('marketing_id');
            $table->longText('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};

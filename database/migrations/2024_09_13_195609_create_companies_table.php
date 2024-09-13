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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->foreignId('contact_name');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('ico');
            $table->string('vat');
            $table->string('street');
            $table->string('town');
            $table->string('zip');
            $table->string('state');
            $table->string('country');
            $table->string('billing_street');
            $table->string('billing_town');
            $table->string('billing_zip');
            $table->string('billing_state');
            $table->string('billing_country');
            $table->mediumText('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

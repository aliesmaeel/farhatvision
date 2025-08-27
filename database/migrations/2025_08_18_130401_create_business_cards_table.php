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
        Schema::create('business_cards', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('name');
            $table->string('email');
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('url')->nullable();
            $table->boolean('bright')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_cards');
    }
};

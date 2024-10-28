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
        Schema::create('TB_IntestCampaignTYP', function (Blueprint $table) {
            $table->id();
            $table->string('Name_TH')->nullable();
            $table->string('Name_EN')->nullable();
            $table->enum('Active', ['active', 'inactive'])->defaultValue('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

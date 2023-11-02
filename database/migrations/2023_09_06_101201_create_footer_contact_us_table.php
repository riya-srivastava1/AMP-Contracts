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
        Schema::create('footer_contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('secondary_contact_number')->nullable();
            $table->longText('head_office')->nullable();
            $table->longText('corporate_office')->nullable();
            $table->string('is_active');
            $table->string('created_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_contact_us');
    }
};

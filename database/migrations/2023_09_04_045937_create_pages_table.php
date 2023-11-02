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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title_name')->nullable();
            $table->string('slug_url')->nullable();
            $table->string('banner_image_id')->nullable();
            $table->longText('contant')->nullable();
            $table->string('is_menu')->nullable();
            $table->string('is_active')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

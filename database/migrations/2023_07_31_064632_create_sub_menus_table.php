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
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('page_id');
            $table->string('is_active');
            $table->timestamps();
            $table->softDeletes();
            $table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_menus');
    }
};
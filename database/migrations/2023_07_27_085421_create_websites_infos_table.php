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
        Schema::create('websites_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('fav_icon');
            $table->string('meta_description');
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
        Schema::dropIfExists('websites_infos');
    }
};

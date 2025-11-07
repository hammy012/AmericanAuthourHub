<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title')->nullable();
            $table->string('title');
            $table->text('short_desc')->nullable();
            $table->string('sec_title')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('icon_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

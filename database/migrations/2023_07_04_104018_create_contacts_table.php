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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('tlp');
            $table->string('nohp')->nullable();
            $table->string('email');
            $table->string('fb_link');
            $table->string('ig_link');
            $table->string('youtube_link');
            $table->string('medsos_link1')->nullable();
            $table->string('medsos_link2')->nullable();
            $table->string('link_tautan1');
            $table->string('link_tautan2')->nullable();
            $table->string('link_tautan3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

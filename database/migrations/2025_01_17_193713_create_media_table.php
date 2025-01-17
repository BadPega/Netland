<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_media_table.php
public function up()
{
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->float('rating');
        $table->integer('length_in_minutes');
        $table->date('released_at');
        $table->string('country_of_origin');
        $table->string('youtube_trailer_id')->nullable();
        $table->text('summary');
        $table->string('spoken_in_language');
        $table->enum('type', ['film', 'series']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

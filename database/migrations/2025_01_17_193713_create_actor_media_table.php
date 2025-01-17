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
// database/migrations/xxxx_xx_xx_create_actor_media_table.php
public function up()
{
    Schema::create('actor_media', function (Blueprint $table) {
        $table->id();
        $table->foreignId('actor_id')->constrained()->onDelete('cascade');
        $table->foreignId('media_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_media');
    }
};

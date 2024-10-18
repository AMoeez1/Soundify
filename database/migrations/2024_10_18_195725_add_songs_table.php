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
        Schema::create('songs', function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('song_name');
            $table->foreignId('artist_id')->constrained('users')->onDelete('cascade');
            $table->string('artist_name');
            $table->foreignId('feat_artist_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('part_of',['album','ep','lp','mixtape','single'])->default('single');
            $table->string('from')->nullable();
            $table->string('cover');
            $table->String('audio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};

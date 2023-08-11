<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameLinks extends Migration
{
    public function up(): void
    {
        Schema::create('game_links', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->enum('category', ['geo', 'word', 'movies']);
            $table->integer('click_count')->default(0)->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_links');
    }
}

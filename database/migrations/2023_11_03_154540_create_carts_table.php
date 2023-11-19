<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


use App\Models\User;
use App\Models\Article;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture');
            $table->text('content');
            $table->string('genre')->nullable();
            $table->double('price');
            $table->double('qte');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Article::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};

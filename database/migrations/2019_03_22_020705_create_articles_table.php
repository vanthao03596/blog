<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('content');
            //Seo
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('og:title')->nullable();
            $table->string('og:type')->default('website');
            $table->string('og:description')->nullable();
            $table->string('og:image')->nullable();
            $table->text('image_url');

            $table->boolean('published')->default(false);
            $table->datetime('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
}

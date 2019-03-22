<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('article_translations', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->integer('article_id')->unsigned();
            $table->string('locale')->index();

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

            $table->unique(['article_id', 'locale']);
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
        Schema::dropIfExists('post_translations');
    }
}

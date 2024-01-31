<?php

declare(strict_types=1);

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
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('category_id')->default(0);
            $table->string('title')->default('');
            $table->string('slug')->default('')->comment('slug');
            $table->string('author')->default('');
            $table->mediumText('markdown')->comment('markdown article content');
            $table->mediumText('html')->comment('HTML page converted from markdown');
            $table->string('description')->default('')->comment('describe');
            $table->string('keywords')->default('')->comment('Keywords');
            $table->string('cover')->default('')->comment('cover picture');
            $table->unsignedTinyInteger('is_top')->default(0)->comment('1 Yes 0 No');
            $table->integer('views')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

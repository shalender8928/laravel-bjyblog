<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sort')->default(1);
            $table->tinyInteger('type')->default(1)->comment('1:github 2:gitee');
            $table->string('name')->default('')->comment('Item name');
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
        Schema::dropIfExists('open_sources');
    }
}

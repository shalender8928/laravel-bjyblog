<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('socialite_user_id')->unsigned()->default(0)->comment('third party user id');
            $table->string('name')->default('')->comment('website name');
            $table->string('description')->default('');
            $table->string('url')->default('')->comment('website link');
            $table->tinyInteger('audit')->default(0)->comment('Review status 1 is passed review');
            $table->tinyInteger('sort')->default(0);
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
        Schema::dropIfExists('sites');
    }
}

<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('oauth_users') && !Schema::hasTable('socialite_users')) {
            Schema::create('socialite_users', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedTinyInteger('socialite_client_id')->default(1)->comment('Type 1: QQ 2: Sina Weibo 3: github');
                $table->string('name', 30)->default('')->comment('Third party nickname');
                $table->string('avatar')->default('')->comment('avatar');
                $table->string('openid', 40)->default('')->comment('third party user id');
                $table->string('access_token')->default('')->comment('access_token token');
                $table->string('last_login_ip', 16)->default('')->comment('last login ip');
                $table->integer('login_times')->unsigned()->default(0)->comment('Number of logins');
                $table->string('email')->default('')->comment('Mail');
                $table->unsignedTinyInteger('is_admin')->default(0)->comment('Is it admin?');
                $table->unsignedTinyInteger('is_blocked')->default(0);
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialite_users');
    }
}

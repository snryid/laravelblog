<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlgUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->engine='MyISAM';//设定要创建的表的引擎为MyISAM否则默认为InnoDB
            $table->increments('id');
            $table->string('user_name')->default('')->comment('用户名');
            $table->integer('user_age')->default(20)->comment('年龄');
            $table->string('user_phone')->default('')->comment('手机号');
            $table->string('user_adress')->default('')->comment('住址');
            $table->text('user_description')->default('')->comment('简介');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}

<?php namespace Redhedded1\Recaptcha\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateRecaptchaKeysTable extends Migration
{
    public function up()
    {
        Schema::create('recaptcha_keys', function($table)
        {
            $table->engine = "InnoDB';
            $table->increments('id');
            $table->string('site_key');
            $table->string('secret_key');
            $table->timestamps();
       });
    }
    public function down()
    {
        Schema::drop('recaptcha_keys');
    }
}

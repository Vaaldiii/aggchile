<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('bimage');
            $table->longText('content1');
            $table->boolean('hascontent1');
            $table->longText('content2');
            $table->boolean('hascontent2');
            $table->longText('content3');
            $table->boolean('hascontent3');
            $table->integer('position');
            $table->string('type');
            $table->boolean('editable')->default(true);
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}

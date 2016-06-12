<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('imageLogo');
            $table->string('officeAddress');
            $table->string('officeNumber');
            $table->string('officeEmail');
            $table->text('imageAccordion1');
            $table->text('imageAccordion2');
            $table->string('hasImageQuienesSomos');
            $table->text('imageQuienesSomos');
            $table->string('hasImageServicios');
            $table->text('imageServicios');
            $table->string('hasImageContacto');
            $table->text('imageContacto');
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
        Schema::drop('settings');
    }
}

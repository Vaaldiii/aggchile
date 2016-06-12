<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name' => 'Inicio',
                'hascontent1' => true,
                'hascontent2' => false,
                'hascontent3' => false,
                'type' => 'static',
                'editable' => true,
                'url' => '/'
            ],
            [
                'name' => 'Quienes Somos',
                'hascontent1' => true,
                'hascontent2' => true,
                'hascontent3' => false,
                'type' => 'static',
                'editable' => true,
                'url' => '/quienes-somos'
            ],
            [
                'name' => 'Servicios',
                'hascontent1' => true,
                'hascontent2' => false,
                'hascontent3' => false,
                'type' => 'static',
                'editable' => true,
                'url' => '/servicios'
            ],
            [
                'name' => 'Equipo',
                'hascontent1' => true,
                'hascontent2' => false,
                'hascontent3' => false,
                'type' => 'static',
                'editable' => true,
                'url' => '/equipo'
            ],
            [
                'name' => 'Contacto',
                'hascontent1' => false,
                'hascontent2' => false,
                'hascontent3' => false,
                'type' => 'static',
                'editable' => false,
                'url' => '/contacto'
            ],
        ]);
    }
}
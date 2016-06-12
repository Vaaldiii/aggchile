<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'imageLogo' => 'logo.png',
            'officeAddress' => 'Alcalde Rutilio Rivas, 7613, La Reina, Santiago',
            'officeNumber' => '+56 9 90791549 – +56 9 77641305',
            'officeEmail' => 'contacto@aggchile.cl',
            'imageAccordion1' => 'slide-1.jpg',
            'imageAccordion2' => 'slide-2.jpg',
            'hasImageQuienesSomos' => 'yes',
            'imageQuienesSomos' => 'native-copper.jpg',
            'hasImageServicios' => 'yes',
            'imageServicios' => 'servicios-derecha.png',
            'hasImageContacto' => 'yes',
            'imageContacto' => 'contacto.jpg'
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@agg.cl',
            'password' => bcrypt('123456'),
        ]);

        for($i = 0; $i<15; $i++){
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@agg.cl',
                'password' => bcrypt('secret'),
            ]);
        }

    }
}

<?php

use Illuminate\Database\Seeder;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Josiah Blessed',
            'email' => 'creativejosiah@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}

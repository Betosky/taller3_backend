<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
        	'nombre' => 'Beto',
        	'email' => 'betopai@gmail.com',
        	'password' => bcrypt('beto93'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categoria')->insert([
        'descripcion' => 'Noticias de futbol',
      ]);
      DB::table('categoria')->insert([
        'descripcion' => 'Noticias de tenis',
      ]);
      DB::table('categoria')->insert([
        'descripcion' => 'Noticias de basquetbol',
      ]);
      DB::table('categoria')->insert([
        'descripcion' => 'Noticias de juegos olimpicos',
      ]);
    }
}

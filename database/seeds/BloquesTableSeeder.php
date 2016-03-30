<?php

use Illuminate\Database\Seeder;

class BloquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloques')->insert([
        	'nombre' => 'Metales Ligeros',
        	'letra' => 'S'
        ]);

        DB::table('bloques')->insert([
            'nombre' => 'No Metales',
            'letra' => 'P'
        ]);

        DB::table('bloques')->insert([
            'nombre' => 'Metales de Transición',
            'letra' => 'D'
        ]);

        DB::table('bloques')->insert([
            'nombre' => 'Metales de Transición Interna',
            'letra' => 'F'
        ]);
    }
}

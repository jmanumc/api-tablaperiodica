<?php

use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
        	'nombre' => 'Gases Nobles',
        	'clase' => 'gas-noble'
        ]);

        DB::table('tipos')->insert([
        	'nombre' => 'Metal',
        	'clase' => 'metal'
        ]);

        DB::table('tipos')->insert([
        	'nombre' => 'Metal de Transición',
        	'clase' => 'metal-transicion'
        ]);

        DB::table('tipos')->insert([
        	'nombre' => 'No Metal',
        	'clase' => 'no-metal'
        ]);

        DB::table('tipos')->insert([
        	'nombre' => 'Metaloides',
        	'clase' => 'metaloide'
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'No Definido',
            'clase' => 'no-definido'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SubtiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtipos')->insert([
        	'nombre' => 'Metálico',
        	'clase' => 'metalico'
        ]);

        DB::table('subtipos')->insert([
        	'nombre' => 'No Metálico',
        	'clase' => 'no-metalico'
        ]);

        DB::table('subtipos')->insert([
        	'nombre' => 'Pre. Metálico',
        	'clase' => 'pre-metalico'
        ]);

        DB::table('subtipos')->insert([
        	'nombre' => 'Pre. No Metálico',
        	'clase' => 'pre-no-metalico'
        ]);

        DB::table('subtipos')->insert([
        	'nombre' => 'Anfótero',
        	'clase' => 'anfotero'
        ]);

        DB::table('subtipos')->insert([
        	'nombre' => 'No Identificado',
        	'clase' => 'no-identificado'
        ]);
    }
}

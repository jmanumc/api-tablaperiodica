<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            'nombre' => 'Sólido',
            'clase' => 'solido'
        ]);

        DB::table('estados')->insert([
            'nombre' => 'Gas',
            'clase' => 'gas'
        ]);

        DB::table('estados')->insert([
            'nombre' => 'Líquido',
            'clase' => 'liquido'
        ]);

        DB::table('estados')->insert([
            'nombre' => 'Sintético',
            'clase' => 'sintetico'
        ]);
    }
}

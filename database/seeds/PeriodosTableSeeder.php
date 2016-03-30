<?php

use Illuminate\Database\Seeder;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([
            'nombre' => 1,
            'energia' => 'K'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 2,
            'energia' => 'K L'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 3,
            'energia' => 'K L M'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 4,
            'energia' => 'K L M N'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 5,
            'energia' => 'K L M N O'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 6,
            'energia' => 'K L M N O P'
        ]);

        DB::table('periodos')->insert([
            'nombre' => 7,
            'energia' => 'K L M N O P Q'
        ]);
    }
}

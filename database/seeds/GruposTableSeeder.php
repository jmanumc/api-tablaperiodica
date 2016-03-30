<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'nombre' => 'I A',
            'numero' => 1
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'II A',
            'numero' => 2
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'III B',
            'numero' => 3
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'IV B',
            'numero' => 4
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'V B',
            'numero' => 5
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VI B',
            'numero' => 6
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VII B',
            'numero' => 7
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VIII B',
            'numero' => 8
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VIII B',
            'numero' => 9
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VIII B',
            'numero' => 10
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'I B',
            'numero' => 11
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'II B',
            'numero' => 12
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'III A',
            'numero' => 13
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'IV A',
            'numero' => 14
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'V A',
            'numero' => 15
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VI A',
            'numero' => 16
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VII A',
            'numero' => 17
        ]);
        DB::table('grupos')->insert([
            'nombre' => 'VIII A',
            'numero' => 18
        ]);
    }
}

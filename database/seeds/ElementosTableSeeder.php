<?php

use Illuminate\Database\Seeder;

class ElementosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elementos')->insert([
            'atomo' => 1,
            'oxidacion' => '±1',
            'simbolo' => 'H',
            'nombre' => 'Hidrógeno',
            'masa' => '1.00794(7)',
            'electrones' => '1',
            'tipo_id' => 6,
            'subtipo_id' => 1,
            'estado_id' => 2,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 1
        ]);

        DB::table('elementos')->insert([
            'atomo' => 2,
            'oxidacion' => '0',
            'simbolo' => 'He',
            'nombre' => 'Helio',
            'masa' => '4.002602(2)',
            'electrones' => '2',
            'tipo_id' => 1,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 1
        ]);

        DB::table('elementos')->insert([
            'atomo' => 3,
            'oxidacion' => '1',
            'simbolo' => 'Li',
            'nombre' => 'Litio',
            'masa' => '[6.941(2)]',
            'electrones' => '2 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 4,
            'oxidacion' => '2',
            'simbolo' => 'Be',
            'nombre' => 'Berilio',
            'masa' => '9.012182(3)',
            'electrones' => '2 2',
            'tipo_id' => 2,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 5,
            'oxidacion' => '3',
            'simbolo' => 'B',
            'nombre' => 'Boro',
            'masa' => '10.811(7)',
            'electrones' => '2 3',
            'tipo_id' => 5,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 6,
            'oxidacion' => '2 ±4',
            'simbolo' => 'C',
            'nombre' => 'Carbono',
            'masa' => '12.0107(8)',
            'electrones' => '2 4',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 7,
            'oxidacion' => '±1 ±2 ±3 5',
            'simbolo' => 'N',
            'nombre' => 'Nitrógeno',
            'masa' => '14.0067(2)',
            'electrones' => '2 5',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 14,
            'oxidacion' => '4',
            'simbolo' => 'Si',
            'nombre' => 'Silicio',
            'masa' => '28.0855(3)',
            'electrones' => '2 8 4',
            'tipo_id' => 5,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 21,
            'oxidacion' => '3',
            'simbolo' => 'Sc',
            'nombre' => 'Escandio',
            'masa' => '44.955010(8)',
            'electrones' => '2 8 9 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 3,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 22,
            'oxidacion' => '2 3 4',
            'simbolo' => 'Ti',
            'nombre' => 'Titanio',
            'masa' => '47.867(1)',
            'electrones' => '2 8 10 2',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 4,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 23,
            'oxidacion' => '2 3 4 5',
            'simbolo' => 'V',
            'nombre' => 'Vanadio',
            'masa' => '50.9415(1)',
            'electrones' => '2 8 11 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 5,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 24,
            'oxidacion' => '2 3 6',
            'simbolo' => 'Cr',
            'nombre' => 'Cromo',
            'masa' => '51.9961(6)',
            'electrones' => '2 8 13 1',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 6,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 26,
            'oxidacion' => '2 3',
            'simbolo' => 'Fe',
            'nombre' => 'Hierro',
            'masa' => '55.845(2)',
            'electrones' => '2 8 14 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 8,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 27,
            'oxidacion' => '2 3',
            'simbolo' => 'Co',
            'nombre' => 'Cobalto',
            'masa' => '58.933200(9)',
            'electrones' => '2 8 15 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 9,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 28,
            'oxidacion' => '2 3',
            'simbolo' => 'Ni',
            'nombre' => 'Níquel',
            'masa' => '58.6934(2)',
            'electrones' => '2 8 16 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 29,
            'oxidacion' => '1 2',
            'simbolo' => 'Cu',
            'nombre' => 'Cobre',
            'masa' => '63.546(3)',
            'electrones' => '2 8 18 1',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 11,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 31,
            'oxidacion' => '3',
            'simbolo' => 'Ga',
            'nombre' => 'Galio',
            'masa' => '69.723(1)',
            'electrones' => '2 8 18 3',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 3,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 32,
            'oxidacion' => '2 4',
            'simbolo' => 'Ge',
            'nombre' => 'Germanio',
            'masa' => '72.64(1)',
            'electrones' => '2 8 18 4',
            'tipo_id' => 5,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 34,
            'oxidacion' => '-2 4 6',
            'simbolo' => 'Se',
            'nombre' => 'Selenio',
            'masa' => '78.96(3)',
            'electrones' => '2 8 18 6',
            'tipo_id' => 4,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 35,
            'oxidacion' => '±1 3 5',
            'simbolo' => 'Br',
            'nombre' => 'Bromo',
            'masa' => '79.904(1)',
            'electrones' => '2 8 18 7',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 3,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 43,
            'oxidacion' => '4 5 6 7',
            'simbolo' => 'Tc',
            'nombre' => 'Tecnocio',
            'masa' => '[98]',
            'electrones' => '2 8 18 13 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 4,
            'grupo_id' => 7,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);

        DB::table('elementos')->insert([
            'atomo' => 49,
            'oxidacion' => '3',
            'simbolo' => 'In',
            'nombre' => 'Indio',
            'masa' => '114.818(3)',
            'electrones' => '2 8 18 18 3',
            'tipo_id' => 2,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);

        DB::table('elementos')->insert([
            'atomo' => 61,
            'oxidacion' => '3',
            'simbolo' => 'Pm',
            'nombre' => 'Prometio',
            'masa' => '[147]',
            'electrones' => '2 8 18 23 8 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 80,
            'oxidacion' => '1 2',
            'simbolo' => 'Hg',
            'nombre' => 'Mercurio',
            'masa' => '200.59(2)',
            'electrones' => '2 8 18 32 18 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 3,
            'grupo_id' => 12,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 84,
            'oxidacion' => '2 4',
            'simbolo' => 'Po',
            'nombre' => 'Polonio',
            'masa' => '[209]',
            'electrones' => '2 8 18 32 18 6',
            'tipo_id' => 5,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 85,
            'oxidacion' => '±1 5',
            'simbolo' => 'At',
            'nombre' => 'Astato',
            'masa' => '[210]',
            'electrones' => '2 8 18 32 18 7',
            'tipo_id' => 4,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 89,
            'oxidacion' => '3',
            'simbolo' => 'Ac',
            'nombre' => 'Actinio',
            'masa' => '[227]',
            'electrones' => '2 8 18 32 18 9 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 110,
            'oxidacion' => 's/n',
            'simbolo' => 'Mv',
            'nombre' => 'Madveded',
            'masa' => '[281]',
            'electrones' => '2 8 18 32 32 16 2',
            'tipo_id' => 6,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);
    }
}

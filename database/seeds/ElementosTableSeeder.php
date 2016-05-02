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
            'electrones' => '2, 1',
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
            'electrones' => '2, 2',
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
            'electrones' => '2, 3',
            'tipo_id' => 5,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 6,
            'oxidacion' => '2, ±4',
            'simbolo' => 'C',
            'nombre' => 'Carbono',
            'masa' => '12.0107(8)',
            'electrones' => '2, 4',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 7,
            'oxidacion' => '±1, ±2, ±3, 5',
            'simbolo' => 'N',
            'nombre' => 'Nitrógeno',
            'masa' => '14.0067(2)',
            'electrones' => '2, 5',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 8,
            'oxidacion' => '-1, ±2',
            'simbolo' => 'O',
            'nombre' => 'Oxígeno',
            'masa' => '15.9994(3)',
            'electrones' => '2, 6',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 9,
            'oxidacion' => '-1',
            'simbolo' => 'F',
            'nombre' => 'Flúor',
            'masa' => '118.9984032(5)',
            'electrones' => '2, 7',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 10,
            'oxidacion' => '0',
            'simbolo' => 'Ne',
            'nombre' => 'Neón',
            'masa' => '20.1797(6)',
            'electrones' => '2, 8',
            'tipo_id' => 1,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 2
        ]);

        DB::table('elementos')->insert([
            'atomo' => 11,
            'oxidacion' => '1',
            'simbolo' => 'Na',
            'nombre' => 'Sodio',
            'masa' => '22.989770(2)',
            'electrones' => '2, 8, 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 12,
            'oxidacion' => '2',
            'simbolo' => 'Mg',
            'nombre' => 'Magnesio',
            'masa' => '24.3050(6)',
            'electrones' => '2, 8, 2',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 13,
            'oxidacion' => '3',
            'simbolo' => 'Al',
            'nombre' => 'Aluminio',
            'masa' => '26.981538(2)',
            'electrones' => '2, 8, 3',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 14,
            'oxidacion' => '4',
            'simbolo' => 'Si',
            'nombre' => 'Silicio',
            'masa' => '28.0855(3)',
            'electrones' => '2, 8, 4',
            'tipo_id' => 5,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 15,
            'oxidacion' => '±3, 4, 5',
            'simbolo' => 'P',
            'nombre' => 'Fósforo',
            'masa' => '30.973761(2)',
            'electrones' => '2, 8, 5',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 16,
            'oxidacion' => '±2, 4, 6',
            'simbolo' => 'S',
            'nombre' => 'Azufre',
            'masa' => '32.065(5)',
            'electrones' => '2, 8, 6',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 17,
            'oxidacion' => '±1, 3, 5, 7',
            'simbolo' => 'Cl',
            'nombre' => 'Cloro',
            'masa' => '35.453(2)',
            'electrones' => '2, 8, 7',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 18,
            'oxidacion' => '0',
            'simbolo' => 'Ar',
            'nombre' => 'Argón',
            'masa' => '39.946(1)',
            'electrones' => '2, 8, 8',
            'tipo_id' => 1,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 3
        ]);

        DB::table('elementos')->insert([
            'atomo' => 19,
            'oxidacion' => '1',
            'simbolo' => 'K',
            'nombre' => 'Potasio',
            'masa' => '39.0983(1)',
            'electrones' => '2, 8, 8, 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 20,
            'oxidacion' => '2',
            'simbolo' => 'Ca',
            'nombre' => 'Calcio',
            'masa' => '40.078(4)',
            'electrones' => '2, 8, 8, 2',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 21,
            'oxidacion' => '3',
            'simbolo' => 'Sc',
            'nombre' => 'Escandio',
            'masa' => '44.955010(8)',
            'electrones' => '2, 8, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 3,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 22,
            'oxidacion' => '2, 3, 4',
            'simbolo' => 'Ti',
            'nombre' => 'Titanio',
            'masa' => '47.867(1)',
            'electrones' => '2, 8, 10, 2',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 4,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 23,
            'oxidacion' => '2, 3, 4, 5',
            'simbolo' => 'V',
            'nombre' => 'Vanadio',
            'masa' => '50.9415(1)',
            'electrones' => '2, 8, 11, 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 5,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 24,
            'oxidacion' => '2, 3, 6',
            'simbolo' => 'Cr',
            'nombre' => 'Cromo',
            'masa' => '51.9961(6)',
            'electrones' => '2, 8, 13, 1',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 6,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 25,
            'oxidacion' => '2, 3, 4, 5, 6, 7',
            'simbolo' => 'Mn',
            'nombre' => 'Manganeso',
            'masa' => '54.938049(9)',
            'electrones' => '2, 8, 13, 2',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 7,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 26,
            'oxidacion' => '2, 3',
            'simbolo' => 'Fe',
            'nombre' => 'Hierro',
            'masa' => '55.845(2)',
            'electrones' => '2, 8, 14, 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 8,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 27,
            'oxidacion' => '2, 3',
            'simbolo' => 'Co',
            'nombre' => 'Cobalto',
            'masa' => '58.933200(9)',
            'electrones' => '2, 8, 15, 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 9,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 28,
            'oxidacion' => '2, 3',
            'simbolo' => 'Ni',
            'nombre' => 'Níquel',
            'masa' => '58.6934(2)',
            'electrones' => '2, 8, 16, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 29,
            'oxidacion' => '1, 2',
            'simbolo' => 'Cu',
            'nombre' => 'Cobre',
            'masa' => '63.546(3)',
            'electrones' => '2, 8, 18, 1',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 11,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 30,
            'oxidacion' => '2',
            'simbolo' => 'Zn',
            'nombre' => 'Zinc',
            'masa' => '65.409(4)',
            'electrones' => '2, 8, 18, 2',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 12,
            'bloque_id' => 3,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 31,
            'oxidacion' => '3',
            'simbolo' => 'Ga',
            'nombre' => 'Galio',
            'masa' => '69.723(1)',
            'electrones' => '2, 8, 18, 3',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 3,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 32,
            'oxidacion' => '2, 4',
            'simbolo' => 'Ge',
            'nombre' => 'Germanio',
            'masa' => '72.64(1)',
            'electrones' => '2, 8, 18, 4',
            'tipo_id' => 5,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 33,
            'oxidacion' => '±3, 5',
            'simbolo' => 'As',
            'nombre' => 'Arsénico',
            'masa' => '74.92160(2)',
            'electrones' => '2, 8, 18, 5',
            'tipo_id' => 5,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 34,
            'oxidacion' => '-2, 4, 6',
            'simbolo' => 'Se',
            'nombre' => 'Selenio',
            'masa' => '78.96(3)',
            'electrones' => '2, 8, 18, 6',
            'tipo_id' => 4,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 35,
            'oxidacion' => '±1, 3, 5',
            'simbolo' => 'Br',
            'nombre' => 'Bromo',
            'masa' => '79.904(1)',
            'electrones' => '2, 8, 18, 7',
            'tipo_id' => 4,
            'subtipo_id' => 2,
            'estado_id' => 3,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);

        DB::table('elementos')->insert([
            'atomo' => 36,
            'oxidacion' => '2, 4, 6',
            'simbolo' => 'Kr',
            'nombre' => 'Kriptón',
            'masa' => '83.796',
            'electrones' => '2, 8, 18, 8',
            'tipo_id' => 1,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 4
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 37,
            'oxidacion' => '1',
            'simbolo' => 'Rb',
            'nombre' => 'Rubidio',
            'masa' => '85.4678(3)',
            'electrones' => '2, 8, 18, 8, 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 38,
            'oxidacion' => '2',
            'simbolo' => 'Sr',
            'nombre' => 'Estroncio',
            'masa' => '87.62(1)',
            'electrones' => '2, 8, 18, 8, 2',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 39,
            'oxidacion' => '3',
            'simbolo' => 'Y',
            'nombre' => 'Itrio',
            'masa' => '88.90585(2)',
            'electrones' => '2, 8, 18, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 3,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 40,
            'oxidacion' => '3, 4',
            'simbolo' => 'Zr',
            'nombre' => 'Zirconio',
            'masa' => '88.90585(2)',
            'electrones' => '2, 8, 18, 10, 2',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 4,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 41,
            'oxidacion' => '2, 3, 4, 5',
            'simbolo' => 'Nb',
            'nombre' => 'Niobio',
            'masa' => '92.90638(2)',
            'electrones' => '2, 8, 18, 12, 1',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 5,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 42,
            'oxidacion' => '2, 3, 4, 5, 6',
            'simbolo' => 'Mo',
            'nombre' => 'Molibdeno',
            'masa' => '95.94(2)',
            'electrones' => '2, 8, 18, 13, 1',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 6,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 43,
            'oxidacion' => '4, 5, 6, 7',
            'simbolo' => 'Tc',
            'nombre' => 'Tecnocio',
            'masa' => '[98]',
            'electrones' => '2, 8, 18, 13, 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 4,
            'grupo_id' => 7,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 44,
            'oxidacion' => '2, 3, 4, 5, 6',
            'simbolo' => 'Ru',
            'nombre' => 'Rutenio',
            'masa' => '101.07(2)',
            'electrones' => '2, 8, 18, 15, 1',
            'tipo_id' => 3,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 8,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 45,
            'oxidacion' => '2, 3, 4',
            'simbolo' => 'Rh',
            'nombre' => 'Rodio',
            'masa' => '102.90550(2)',
            'electrones' => '2, 8, 18, 16, 1',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 9,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 46,
            'oxidacion' => '2, 4',
            'simbolo' => 'Pd',
            'nombre' => 'Paladio',
            'masa' => '106.42(1)',
            'electrones' => '2, 8, 18, 18, 0',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 47,
            'oxidacion' => '1',
            'simbolo' => 'Ag',
            'nombre' => 'Plata',
            'masa' => '107.8682(2)',
            'electrones' => '2, 8, 18, 18, 1',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 11,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 48,
            'oxidacion' => '2',
            'simbolo' => 'Cd',
            'nombre' => 'Cadmio',
            'masa' => '106.42(1)',
            'electrones' => '2, 8, 18, 18, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 12,
            'bloque_id' => 3,
            'periodo_id' => 5
        ]);

        DB::table('elementos')->insert([
            'atomo' => 49,
            'oxidacion' => '3',
            'simbolo' => 'In',
            'nombre' => 'Indio',
            'masa' => '114.818(3)',
            'electrones' => '2, 8, 18, 18, 3',
            'tipo_id' => 2,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);

		DB::table('elementos')->insert([
            'atomo' => 50,
            'oxidacion' => '2, 4',
            'simbolo' => 'Sn',
            'nombre' => 'Estaño',
            'masa' => '118.710(7)',
            'electrones' => '2, 8, 18, 18, 4',
            'tipo_id' => 2,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 51,
            'oxidacion' => '±3, 5',
            'simbolo' => 'Sb',
            'nombre' => 'Antimonio',
            'masa' => '121.760(1)',
            'electrones' => '2, 8, 18, 18, 5',
            'tipo_id' => 5,
            'subtipo_id' => 5,
            'estado_id' => 1,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 52,
            'oxidacion' => '-2, 4, 6',
            'simbolo' => 'Te',
            'nombre' => 'Telurio',
            'masa' => '127.60(3)',
            'electrones' => '2, 8, 18, 18, 6',
            'tipo_id' => 5,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 53,
            'oxidacion' => '±1, 5, 7',
            'simbolo' => 'I',
            'nombre' => 'Yodo',
            'masa' => '126.9044(3)',
            'electrones' => '2, 8, 18, 18, 7',
            'tipo_id' => 4,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 54,
            'oxidacion' => '2, 4, 6, 8',
            'simbolo' => 'Xe',
            'nombre' => 'Xenón',
            'masa' => '131.293()',
            'electrones' => '2, 8, 18, 18, 8',
            'tipo_id' =>1 ,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 5
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 55,
            'oxidacion' => '1',
            'simbolo' => 'Cs',
            'nombre' => 'Cesio',
            'masa' => '132.90545(2)',
            'electrones' => '2, 8, 18, 18, 8, 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 3,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 56,
            'oxidacion' => '2',
            'simbolo' => 'Ba',
            'nombre' => 'Bario',
            'masa' => '137.327(7)',
            'electrones' => '2, 8, 18, 18, 8, 2',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 57,
            'oxidacion' => '3',
            'simbolo' => 'La',
            'nombre' => 'Lantano',
            'masa' => '138.9055(2)',
            'electrones' => '2, 8, 18, 18, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 58,
            'oxidacion' => '3, 4',
            'simbolo' => 'Ce',
            'nombre' => 'Cerio',
            'masa' => '140.116(1)',
            'electrones' => '2, 8, 18, 18, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 59,
            'oxidacion' => '3, 4',
            'simbolo' => 'Pr',
            'nombre' => 'Praseodimio',
            'masa' => '140.90765(2)',
            'electrones' => '2, 8, 18, 21, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 60,
            'oxidacion' => '2, 3, 4',
            'simbolo' => 'Nd',
            'nombre' => 'Neodimio',
            'masa' => '144.24(3)',
            'electrones' => '2, 8, 18, 22, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
        DB::table('elementos')->insert([
            'atomo' => 61,
            'oxidacion' => '3',
            'simbolo' => 'Pm',
            'nombre' => 'Prometio',
            'masa' => '[147]',
            'electrones' => '2, 8, 18, 23, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 62,
            'oxidacion' => '2, 3',
            'simbolo' => 'Sm',
            'nombre' => 'Samario',
            'masa' => '150.35',
            'electrones' => '2, 8, 18, 24, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 63,
            'oxidacion' => '3, 4',
            'simbolo' => 'Eu',
            'nombre' => 'Europio',
            'masa' => '151.965(1)',
            'electrones' => '2, 8, 18, 25, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 64,
            'oxidacion' => '3, 4',
            'simbolo' => 'Gd',
            'nombre' => 'Gadolinio',
            'masa' => '157.25(3)',
            'electrones' => '2, 8, 18, 25, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 65,
            'oxidacion' => '3, 4',
            'simbolo' => 'Tb',
            'nombre' => 'Terbio',
            'masa' => '158.92534(2)',
            'electrones' => '2, 8, 18, 18, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 66,
            'oxidacion' => '2, 3, 4',
            'simbolo' => 'Dy',
            'nombre' => 'Disprosio',
            'masa' => '162.500(1)',
            'electrones' => '2, 8, 18, 18, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 67,
            'oxidacion' => '3',
            'simbolo' => 'Ho',
            'nombre' => 'Holmio',
            'masa' => '164.93032(2)',
            'electrones' => '2, 8, 18, 18, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 68,
            'oxidacion' => '3',
            'simbolo' => 'Er',
            'nombre' => 'Erbio',
            'masa' => '167.259(3)',
            'electrones' => '2, 8, 18, 30, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 69,
            'oxidacion' => '2, 3',
            'simbolo' => 'Tm',
            'nombre' => 'Tulio',
            'masa' => '168.9342(2)',
            'electrones' => '2, 8, 18, 31, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 70,
            'oxidacion' => '2, 3',
            'simbolo' => 'Yb',
            'nombre' => 'Iterbio',
            'masa' => '173.04(3)',
            'electrones' => '2, 8, 18, 32, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 71,
            'oxidacion' => '3',
            'simbolo' => 'Lu',
            'nombre' => 'Lutecio',
            'masa' => '174.967(1)',
            'electrones' => '2, 8, 18, 32, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 1,
            'bloque_id' => 4,
            'periodo_id' => 6
        ]);
		
		DB::table('elementos')->insert([
            'atomo' => 72,
            'oxidacion' => '3, 4',
            'simbolo' => 'Hf',
            'nombre' => 'Hafnio',
            'masa' => '178.49(2)',
            'electrones' => '2, 8, 18, 32, 10, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 4,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 73,
            'oxidacion' => '4, 5',
            'simbolo' => 'Ta',
            'nombre' => 'Tantalio',
            'masa' => '180.9479(1)',
            'electrones' => '2, 8, 18, 32, 11, 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 5,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 74,
            'oxidacion' => '2, 3, 4, 5, 6',
            'simbolo' => 'W',
            'nombre' => 'Tungsteno',
            'masa' => '183.84(1)',
            'electrones' => '2, 8, 18, 32, 12, 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 6,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 75,
            'oxidacion' => '2, 3, 4, 5, 6, 7',
            'simbolo' => 'Re',
            'nombre' => 'Renio',
            'masa' => '186.207(1)',
            'electrones' => '2, 8, 18, 32, 13, 2',
            'tipo_id' => 3,
            'subtipo_id' => 4,
            'estado_id' => 1,
            'grupo_id' => 7,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 76,
            'oxidacion' => '3, 4, 6',
            'simbolo' => 'Os',
            'nombre' => 'Osmio',
            'masa' => '190.23(3)',
            'electrones' => '2, 8, 18, 32, 14, 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 8,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 77,
            'oxidacion' => '2, 3, 4, 5, 6',
            'simbolo' => 'Ir',
            'nombre' => 'Iridio',
            'masa' => '192.217(3)',
            'electrones' => '2, 8, 18, 32, 15, 2',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 9,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 78,
            'oxidacion' => '2, 4',
            'simbolo' => 'Pt',
            'nombre' => 'Platino',
            'masa' => '195.078(2)',
            'electrones' => '2, 8, 18, 32, 17, 1',
            'tipo_id' => 3,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 79,
            'oxidacion' => '1, 3',
            'simbolo' => 'Au',
            'nombre' => 'Oro',
            'masa' => '196.96655(2)',
            'electrones' => '2, 8, 18, 32, 18, 1',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 11,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 80,
            'oxidacion' => '1, 2',
            'simbolo' => 'Hg',
            'nombre' => 'Mercurio',
            'masa' => '200.59(2)',
            'electrones' => '2, 8, 18, 32, 18, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 3,
            'grupo_id' => 12,
            'bloque_id' => 3,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 81,
            'oxidacion' => '1, 3',
            'simbolo' => 'Tl',
            'nombre' => 'Talio',
            'masa' => '204.3833(2)',
            'electrones' => '2, 8, 18, 32, 18, 3',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 82,
            'oxidacion' => '2, 4',
            'simbolo' => 'Pb',
            'nombre' => 'Plomo',
            'masa' => '207.2(1)',
            'electrones' => '2, 8, 18, 32, 18, 4',
            'tipo_id' => 2,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 83,
            'oxidacion' => '±3, 5',
            'simbolo' => 'Bi',
            'nombre' => 'Bismuto',
            'masa' => '208.98038(2)',
            'electrones' => '2, 8, 18, 32, 18, 5',
            'tipo_id' => 2,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 84,
            'oxidacion' => '2, 4',
            'simbolo' => 'Po',
            'nombre' => 'Polonio',
            'masa' => '[209]',
            'electrones' => '2, 8, 18, 32, 18, 6',
            'tipo_id' => 5,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 85,
            'oxidacion' => '±1, 5',
            'simbolo' => 'At',
            'nombre' => 'Astato',
            'masa' => '[210]',
            'electrones' => '2, 8, 18, 32, 18, 7',
            'tipo_id' => 4,
            'subtipo_id' => 3,
            'estado_id' => 1,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 86,
            'oxidacion' => '2',
            'simbolo' => 'Rn',
            'nombre' => 'Radón',
            'masa' => '[222]',
            'electrones' => '2, 8, 18, 32, 18, 8',
            'tipo_id' => 1,
            'subtipo_id' => 2,
            'estado_id' => 2,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 6
        ]);

        DB::table('elementos')->insert([
            'atomo' => 87,
            'oxidacion' => '1',
            'simbolo' => 'Fr',
            'nombre' => 'Francio',
            'masa' => '[223]',
            'electrones' => '2, 8, 18, 32, 18, 8, 1',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 1,
            'bloque_id' => 1,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 88,
            'oxidacion' => '2',
            'simbolo' => 'Ra',
            'nombre' => 'Radio',
            'masa' => '[226]',
            'electrones' => '2, 8, 18, 32, 18, 8, 2',
            'tipo_id' => 2,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'grupo_id' => 2,
            'bloque_id' => 1,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 89,
            'oxidacion' => '3',
            'simbolo' => 'Ac',
            'nombre' => 'Actinio',
            'masa' => '[227]',
            'electrones' => '2, 8, 18, 32, 18, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 90,
            'oxidacion' => '3, 4',
            'simbolo' => 'Th',
            'nombre' => 'Torio',
            'masa' => '232.0381(1)',
            'electrones' => '2, 8, 18, 32, 18, 10, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 91,
            'oxidacion' => '3, 4, 5',
            'simbolo' => 'Pa',
            'nombre' => 'Protactinio',
            'masa' => '231.03588(2)',
            'electrones' => '2, 8, 18, 32, 20, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 92,
            'oxidacion' => '3, 4, 5, 6',
            'simbolo' => 'U',
            'nombre' => 'Uranio',
            'masa' => '238.02891(3)',
            'electrones' => '2, 8, 18, 32, 21, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 1,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 93,
            'oxidacion' => '3, 4, 5, 6',
            'simbolo' => 'Np',
            'nombre' => 'Neptunio',
            'masa' => '[237]',
            'electrones' => '2, 8, 18, 32, 22, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 94,
            'oxidacion' => '3, 4, 5, 6',
            'simbolo' => 'Pu',
            'nombre' => 'Plutonio',
            'masa' => '[244]',
            'electrones' => '2, 8, 18, 32, 24, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 95,
            'oxidacion' => '2, 3, 4, 5, 6',
            'simbolo' => 'Am',
            'nombre' => 'Americio',
            'masa' => '[243]',
            'electrones' => '2, 8, 18, 32, 25, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 96,
            'oxidacion' => '3, 4',
            'simbolo' => 'Cm',
            'nombre' => 'Curio',
            'masa' => '[247]',
            'electrones' => '2, 8, 18, 32, 25, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 97,
            'oxidacion' => '3, 4',
            'simbolo' => 'Bk',
            'nombre' => 'Berkelio',
            'masa' => '[247]',
            'electrones' => '2, 8, 18, 32, 27, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 98,
            'oxidacion' => '2, 3',
            'simbolo' => 'Cf',
            'nombre' => 'Californio',
            'masa' => '[251]',
            'electrones' => '2, 8, 18, 32, 28, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 99,
            'oxidacion' => '3',
            'simbolo' => 'Es',
            'nombre' => 'Einstenio',
            'masa' => '[252]',
            'electrones' => '2, 8, 18, 32, 29, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 100,
            'oxidacion' => '2, 3',
            'simbolo' => 'Fm',
            'nombre' => 'Fermio',
            'masa' => '[257]',
            'electrones' => '2, 8, 18, 32, 30, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 101,
            'oxidacion' => '3',
            'simbolo' => 'Md',
            'nombre' => 'Mendelevio',
            'masa' => '[258]',
            'electrones' => '2, 8, 18, 32, 31, 8, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 102,
            'oxidacion' => '2, 3',
            'simbolo' => 'No',
            'nombre' => 'Nobelio',
            'masa' => '[259]',
            'electrones' => '2, 8, 18, 32, 32, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 103,
            'oxidacion' => '3',
            'simbolo' => 'Lr',
            'nombre' => 'Laurencio',
            'masa' => '[262]',
            'electrones' => '2, 8, 18, 32, 32, 9, 2',
            'tipo_id' => 3,
            'subtipo_id' => 1,
            'estado_id' => 4,
            'serie_id' => 2,
            'bloque_id' => 4,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 104,
            'oxidacion' => '4',
            'simbolo' => 'Rf',
            'nombre' => 'Rutherfordio',
            'masa' => '[261]',
            'electrones' => '2, 8, 18, 32, 32, 10, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 4,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 105,
            'oxidacion' => '5',
            'simbolo' => 'Db',
            'nombre' => 'Dubnio',
            'masa' => '[262]',
            'electrones' => '2, 8, 18, 32, 32, 11, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 5,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 106,
            'oxidacion' => '6',
            'simbolo' => 'Sg',
            'nombre' => 'Seaborgio',
            'masa' => '[266]',
            'electrones' => '2, 8, 18, 32, 32, 12, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 6,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 107,
            'oxidacion' => '7',
            'simbolo' => 'Bh',
            'nombre' => 'Bohrio',
            'masa' => '[264]',
            'electrones' => '2, 8, 18, 32, 32, 13, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 7,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 108,
            'oxidacion' => '3',
            'simbolo' => 'Hs',
            'nombre' => 'Hassio',
            'masa' => '[277]',
            'electrones' => '2, 8, 18, 32, 32, 14, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 8,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 109,
            'oxidacion' => '2',
            'simbolo' => 'Mt',
            'nombre' => 'Meitnerio',
            'masa' => '[268]',
            'electrones' => '2, 8, 18, 32, 32, 15, 2',
            'tipo_id' => 3,
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 9,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 110,
            'oxidacion' => '- - -',
            'simbolo' => 'Mv',
            'nombre' => 'Madveded',
            'masa' => '[281]',
            'electrones' => '2, 8, 18, 32, 32, 16, 2',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 10,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 111,
            'oxidacion' => '- - -',
            'simbolo' => 'Pl',
            'nombre' => 'Plutirio',
            'masa' => '[272]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 11,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 112,
            'oxidacion' => '- - -',
            'simbolo' => 'Da',
            'nombre' => 'Darwanzio',
            'masa' => '[277]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 12,
            'bloque_id' => 3,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 113,
            'oxidacion' => '- - -',
            'simbolo' => 'Tf',
            'nombre' => 'Tustrano',
            'masa' => '[272]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 13,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 114,
            'oxidacion' => '- - -',
            'simbolo' => 'Eo',
            'nombre' => 'Eristeneo',
            'masa' => '[285]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 14,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 115,
            'oxidacion' => '- - -',
            'simbolo' => 'Me',
            'nombre' => 'Merchel',
            'masa' => '[279]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 15,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 116,
            'oxidacion' => '- - -',
            'simbolo' => 'Nc',
            'nombre' => 'Nectarten',
            'masa' => '[289]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 16,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 117,
            'oxidacion' => '- - -',
            'simbolo' => 'El',
            'nombre' => 'Efelio',
            'masa' => '[286]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 17,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);

        DB::table('elementos')->insert([
            'atomo' => 118,
            'oxidacion' => '- - -',
            'simbolo' => 'On',
            'nombre' => 'Oberón',
            'masa' => '[288]',
            'electrones' => '- - -',
            'subtipo_id' => 6,
            'estado_id' => 4,
            'grupo_id' => 18,
            'bloque_id' => 2,
            'periodo_id' => 7
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GruposTableSeeder::class);
        $this->call(BloquesTableSeeder::class);
        $this->call(PeriodosTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(TiposTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(SubtiposTableSeeder::class);
        $this->call(ElementosTableSeeder::class);
        $this->call(DetallesTableSeeder::class);
    }
}

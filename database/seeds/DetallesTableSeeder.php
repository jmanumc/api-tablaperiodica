<?php

use Illuminate\Database\Seeder;

class DetallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalles')->insert([
            'elemento_id' => 1,
            'aplicacion'  => 'Se necesitan grandes cantidades de H2 en las industrias del petróleo y química.',
            'impacto'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero cupiditate inventore amet voluptatem impedit debitis reprehenderit veniam quibusdam, rem? Quisquam architecto accusamus nesciunt quia perspiciatis deserunt recusandae pariatur quae quod!',
            'imagen'      => '001.JPG'
        ]);
        $this->updateDetalleElemento(1);
    }

    /**
     * Update the row detalle_id of the table elementos.
     *
     * @return void
     */
    public function updateDetalleElemento($id)
    {
        DB::table('elementos')->where('id',$id)->update(['detalle_id' => $id]);
    }
}

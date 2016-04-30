<?php

use Illuminate\Database\Seeder;

class DetallesTableSeeder extends Seeder
{
    /**
     * Update the row detalle_id of the table elementos.
     *
     * @return void
     */
    public function updateDetalleElemento($id)
    {
        DB::table('elementos')->where('id',$id)->update(['detalle_id' => $id]);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalles')->insert([
            'elemento_id' => 1,
            'aplicacion' => '<ul><li>Se utiliza para el procesar combustibles f&oacute;siles.</li><li>Se utiliza para producir amon&iacute;aco utilizado en los productos comunes de limpieza del hogar.</li><li>El hidr&oacute;geno se utiliza como un agente hidrogenante para producir metanol y convertir aceites y grasas no saturada insalubres en aceites y grasas saturadas.</li></ul>',
            'impacto' => '<p><em>Estabilidad ambiental:</em>&nbsp;El hidr&oacute;geno existe naturalmente en la atm&oacute;sfera. El gas se disipar&aacute; r&aacute;pidamente en &aacute;reas bien ventiladas.</p><p><em>Efecto sobre plantas o animales:&nbsp;</em>Cualquier efecto en animales ser&aacute; debido a los ambientes deficientes de ox&iacute;geno. No se anticipa que tenga efectos adversos sobre las plantas, aparte de la helada producida en presencia de los gases de expansi&oacute;n r&aacute;pida.</p>',
            'imagen' => '001.JPG'
        ]);
        $this->updateDetalleElemento(1);

        DB::table('detalles')->insert([
            'elemento_id' => 2,
            'aplicacion' => '<ul><li>El helio se utiliza para enfriar los imanes superconductores en los esc&aacute;neres utilizados para hacer resonancias magn&eacute;ticas.</li><li>Como el helio es m&aacute;s ligero que el aire, se utiliza para llenar los dirigibles y los globos aerost&aacute;ticos.</li><li>El helio se utiliza para condensar el hidr&oacute;geno y el ox&iacute;geno para producir combustible para cohetes.</li></ul>',
            'impacto' => '<p><em>Efectos de la exposici&oacute;n:</em>La sustancia puede ser absorbida por el cuerpo por inhalaci&oacute;n. Inhalaci&oacute;n: Elevaci&oacute;n de la voz. Mareos. Pesadez. Dolor de cabeza. Asfixia. Piel: Congelaci&oacute;n en contacto con el l&iacute;quido.</p><p>Riesgo de inhalaci&oacute;n: Si hay p&eacute;rdidas en el contenedor este gas puede provocar asfixia, ya que hace disminuir el contenido de ox&iacute;geno en el aire en los lugares cerrados. Comprobar la concentraci&oacute;n de ox&iacute;geno antes de entrar en el recinto.</p>',
            'imagen' => '002.JPG'
        ]);
        $this->updateDetalleElemento(2);

        DB::table('detalles')->insert([
            'elemento_id' => 3,
            'aplicacion' => '<ul><li>El litio puede ser utilizado como un refrigerante debido a su alto calor espec&iacute;fico.</li><li>A partir de compuestos de litio se pueden crear fuegos artificiales y bengalas de color rojo.</li><li>El hidr&oacute;xido de litio (LiOH) se utiliza para hacer jabones de litio. Estos jabones se utilizan para la fabricaci&oacute;n de grasas lubricantes.</li></ul>',
            'impacto' => '<p>El litio met&aacute;lico reacciona con el nitr&oacute;geno, el ox&iacute;geno, y el vapor de agua en el aire. Consecuentemente, la superficie del litio se recubre de una mezcla de hidr&oacute;xido de litio (LiOH), carbonato de litio (Li<sub>2</sub>CO<sub>3</sub>), y nitrato de litio (Li<sub>3</sub>N). El hidr&oacute;xido de litio representa un peligro potencialmente significativo porque es extremadamente corrosivo. Se debe prestar especial atenci&oacute;n a los organismos acu&aacute;ticos.&nbsp;</p>',
            'imagen' => '003.JPG'
        ]);
        $this->updateDetalleElemento(3);

        DB::table('detalles')->insert([
            'elemento_id' => 4,
            'aplicacion' => '<ul><li>Probablemente el uso m&aacute;s importante de berilio es en las ventanas de radiaci&oacute;n para los tubos de rayos X. El berilio es ideal para este uso ya que tiene una muy baja absorci&oacute;n de rayos-X.</li><li>El berilio se utiliza en las tuber&iacute;as de muchos experimentos de alta energ&iacute;a de colisi&oacute;n de f&iacute;sica de part&iacute;culas (como el Gran Colisionador de Hadrones). La rigidez del metal permite crear un vac&iacute;o de gran alcance.</li><li>El berilio se utiliza como un componente de peso ligero de equipo militar y en la industria aeroespacial. Se utiliza en la alta velocidad de las aeronaves, misiles, veh&iacute;culos espaciales y sat&eacute;lites de comunicaciones.</li></ul>',
            'impacto' => '<p>El berilio entra en el aire, agua y suelo como resultado de procesos naturales y actividades humanas. Esto ocurre de forma natural en el medio ambiente en peque&ntilde;as cantidades. El hombre a&ntilde;ade berilio a trav&eacute;s de la producci&oacute;n de metal y de la combusti&oacute;n de carb&oacute;n y aceite.<br /> Ciertos elementos qu&iacute;micos reaccionan con el berilio en el agua haci&eacute;ndolo insoluble. Esto es bueno, porque la forma insoluble del berilio en agua causa mucho meno da&ntilde;o a los organismos que la forma soluble. El berilio no se acumula en los cuerpos de los peces, pero algunas frutas y vegetales como son los frijoles y las peras pueden contener niveles significantes de berilio.<br /> Las pruebas de laboratorio han indicado que es posible que el berilio produzca c&aacute;ncer y cambios en el ADN de los animales, aunque de momento no hay evidencia el estudios de campo que respalde estos descubrimientos.</p>',
            'imagen' => '004.JPG'
        ]);
        $this->updateDetalleElemento(4);

        DB::table('detalles')->insert([
            'elemento_id' => 5,
            'aplicacion' => '<ul><li>Una gran cantidad de boro se utiliza junto a tetraborato de sodio para aislar la fibra de vidrio. Tambi&eacute;n se utiliza en muchos productos de limpieza de los detergentes y lej&iacute;as.</li><li>La mayor&iacute;a del boro se utiliza para producir vidrio y cer&aacute;mica. El vidrio de borosilicato tiene una resistencia excepcional a los golpes t&eacute;rmicos (cambios bruscos de temperatura que provocan que el vidrio se rompa).</li><li>Los filamentos de boro se utilizan como materiales ligeros pero de alta resistencia en la creaci&oacute;n de estructuras aeroespaciales. Tambi&eacute;n se utiliza para producir algunos de palos de golf y ca&ntilde;as de pescar.</li></ul>',
            'impacto' => '<p>Los humanos pueden ser expuestos al Boro a trav&eacute;s de las frutas y vegetales, el agua, aire y el consumo de productos.</p><p>Comer peces o carne no incrementar&aacute; la concentraci&oacute;n de Boro en nuestros cuerpos, el Boro no se acumula en los tejidos animales. La exposici&oacute;n al Boro a trav&eacute;s del aire y del agua no es muy frecuente que ocurra, pero el riesgo de exposici&oacute;n al polvo de Boro en el lugar de trabajo existe.</p><p>Las exposiciones al Boro pueden tambi&eacute;n ocurrir al consumir productos como cosm&eacute;ticos y productos para lavar.</p><p>Cuando los humanos consumen grandes cantidades de comida que contiene Boro, la concentraci&oacute;n de Boro en sus cuerpos puede aumentar a niveles que causan problemas de salud. El Boro puede infectar el est&oacute;mago, h&iacute;gado, ri&ntilde;ones y cerebro y puede eventualmente llevar a la muerte. Cuando la exposici&oacute;n es con peque&ntilde;as cantidades de Boro tiene lugar la irritaci&oacute;n de la nariz, garganta y ojos.</p>',
            'imagen' => '005.JPG'
        ]);
        $this->updateDetalleElemento(5);

        DB::table('detalles')->insert([
            'elemento_id' => 6,
            'aplicacion' => '<ul><li>El uso principal de carbono es en forma de hidrocarburos, principalmente gas metano y el petr&oacute;leo crudo. El petr&oacute;leo crudo se utiliza para producir gasolina y queroseno a trav&eacute;s de su destilaci&oacute;n.</li><li>La celulosa, un pol&iacute;mero de carbono natural que se encuentra en plantas, se utiliza en la elaboraci&oacute;n de algod&oacute;n, lino y c&aacute;&ntilde;amo.</li><li>Los pl&aacute;sticos se fabrican a partir de pol&iacute;meros sint&eacute;ticos de carbono.</li></ul>',
            'impacto' => '<p>No se tiene constancia de que el carbono tenga efectos negativos sobre el medio ambiente.</p>',
            'imagen' => '006.JPG'
        ]);
        $this->updateDetalleElemento(6);

        DB::table('detalles')->insert([
            'elemento_id' => 7,
            'aplicacion' => '<ul><li>El nitr&oacute;geno se utiliza para conservar los alimentos envasados ​​al detener la oxidaci&oacute;n de los alimentos que hace que se estropeen.</li><li>Las bombillas pueden contener nitr&oacute;geno como una alternativa m&aacute;s barata al arg&oacute;n.</li><li>El gas nitr&oacute;geno se utiliza a menudo en la parte superior de los explosivos l&iacute;quidos para evitar que se detonen.</li></ul>',
            'impacto' => '<p>Los humanos han cambiado radicalmente los suministros de nitratos y nitritos. La mayor causa de la adici&oacute;n de nitratos y nitritos es el uso intensivo de fertilizantes. Los procesos de combusti&oacute;n pueden tambi&eacute;n realzar los suministros de nitrato y nitrito, debido a la emisi&oacute;n de &oacute;xidos de nitr&oacute;geno que puede ser convertidos en nitratos y nitritos en el ambiente.</p><p>La adici&oacute;n de Nitr&oacute;geno enlazado en el ambiente tiene varios efectos. Primeramente, puede cambiar la composici&oacute;n de especies debido a la susceptibilidad de ciertos organismos a las consecuencias de los compuestos de nitr&oacute;geno. Segundo, la mayor&iacute;a del nitrito puede tener varios efectos sobre la salud de los humanos asi como en animales. La comida que es rica en compuestos de Nitr&oacute;geno puede causar una p&eacute;rdida en el transporte de ox&iacute;geno en la sangre, lo que puede tener consecuencias serias para el ganado.</p><p>La toma de altas concentraciones de Nitr&oacute;geno puede causar problemas en la gl&aacute;ndula tiroid&eacute;a y puede llevar a bajos almacenamientos de la Vitamina A. En los est&oacute;magos e intestinos de animales los nitratos pueden convertirse en nitrosaminas, un tipo de substancia peligrosamente cancer&iacute;gena.</p><p>Content composed with the HTML code editor with instant preview. Get a htmlg subscription to remove promotional messages like this one or browse our HTML5 tools directory for the best free online tools!</p>',
            'imagen' => '007.JPG'
        ]);
        $this->updateDetalleElemento(7);

        DB::table('detalles')->insert([
            'elemento_id' => 8,
            'aplicacion' => '<ul><li>Obviamente, el ox&iacute;geno es importante para la respiraci&oacute;n humana. Por lo tanto, la terapia de ox&iacute;geno se utiliza para las personas que tienen dificultad para respirar debido a alguna condici&oacute;n m&eacute;dica (como enfisema o neumon&iacute;a).</li><li>El ox&iacute;geno gaseoso es venenoso para las bacterias que causan gangrena. Por lo tanto, se utiliza para matarlos.</li><li>El envenenamiento por mon&oacute;xido de carbono se trata con gas ox&iacute;geno.</li></ul>',
            'impacto' => 'No ha sido constatado ningún efecto negativo del oxígeno en el medio ambiente.',
            'imagen' => '008.JPG'
        ]);
        $this->updateDetalleElemento(8);

        DB::table('detalles')->insert([
            'elemento_id' => 9,
            'aplicacion' => '<ul><li>Algunos compuestos de fl&uacute;or (tal como fluoruro s&oacute;dico, fluoruro estannoso y monofluorofosfato de sodio) se a&ntilde;aden a los dent&iacute;fricos para prevenir las caries dentales. Tambi&eacute;n se a&ntilde;aden hatibualmente al agua.</li><li>Los anest&eacute;sicos m&aacute;s generales son derivados de compuestos de fl&uacute;or.</li><li>El fl&uacute;or-18 es un is&oacute;topo artificial que emite positrones y tiene una vida media relativamente m&aacute;s larga. Esto lo hace ideal para su uso en la topograf&iacute;a por emisi&oacute;n de positrones.</li></ul>',
            'impacto' => '<p>El fl&uacute;or est&aacute; presente en la corteza terrestre de forma natural, pudiendo ser encontrado en rocas, carb&oacute;n y arcilla. Los fluoruros son liberados al aire cuando el viento arrastra el suelo. Los procesos de combusti&oacute;n en las industrias pueden liberar fluoruro de hidr&oacute;geno al aire. Los fluoruros que se encuentran en el aire acabar&aacute;n deposit&aacute;ndose en el suelo o en el agua.<br /> En el medio ambiente el fl&uacute;or no puede ser destru&iacute;do; solamente puede cambiar de forma. El fl&uacute;or que se encuentra en el suelo puede acumularse en las plantas. La cantidad de fl&uacute;or que tomen las plantas depende del tipo de planta, del tipo de suelo y de la cantidad y tipo de fl&uacute;or que se encuentre en el suelo. En las plantas que son sensibles a la exposici&oacute;n del fl&uacute;or incluso bajas concentraciones de fl&uacute;or pueden provocar da&ntilde;os en las hojas y una disminuci&oacute;n del crecimiento.</p>',
            'imagen' => '009.JPG'
        ]);
        $this->updateDetalleElemento(9);

        DB::table('detalles')->insert([
            'elemento_id' => 10,
            'aplicacion' => '<ul><li>El ne&oacute;n se utiliza a menudo en los carteles de publicidad ya que produce un brillante color naranja-rojizo. Algunas luces de diferentes colores a veces se llaman luces de ne&oacute;n, sin embargo, estas luces son producidas con otros gases nobles.</li><li>El punto triple del ne&oacute;n (la temperatura donde los tres estados, gas, l&iacute;quido y s&oacute;lido y ne&oacute;n coexisten al mismo tiempo) es un punto fijo en la definici&oacute;n de la Escala Internacional de Temperatura de 1990.</li><li>El ne&oacute;n l&iacute;quido se utiliza a menudo como un refrigerante criog&eacute;nico donde no son necesarios las temperaturas extremadamente bajas que requieren helio l&iacute;quido. Es m&aacute;s efectivo que el helio ya que a pesar de ser m&aacute;s caro puede ser m&aacute;s viable.</li></ul>',
            'impacto' => '<p>El ne&oacute;n es un gas raro atmosf&eacute;rico, y como tal no es t&oacute;xico y es qu&iacute;micamente inerte.</p>',
            'imagen' => '010.JPG'
        ]);
        $this->updateDetalleElemento(10);

        /*DB::table('detalles')->insert([
            'elemento_id' => ,
            'aplicacion' => '',
            'impacto' => '',
            'imagen' => '.JPG'
        ]);
        $this->updateDetalleElemento();*/
    }
}

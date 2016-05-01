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

        DB::table('detalles')->insert([
            'elemento_id' => 11,
            'aplicacion' => '<ul><li>El sodio se utiliza para descalcificaci&oacute;n de metales. Esto da el metal una superficie lisa.</li><li>El metal de sodio se utiliza tambi&eacute;n para refinar metales, tales como zirconio y potasio, a partir de sus compuestos.</li><li>El sodio fundido (l&iacute;quido) se utiliza como refrigerante en muchos reactores nucleares. Se puede utilizar individualmente o puede combinarse con potasio.</li></ul>',
            'impacto' => '<p>Ecotoxicidad: L&iacute;mite Medio de Tolerancia (LMT) para el pez mosquito, 125 ppm/96hr (agua dulce); L&iacute;mite Medio de Tolerancia (LMT) para el pez sol (Lepomis macrochirus), 88 88 mg/48hr (agua del grifo).</p><p>Destino medioambiental: Este compuesto qu&iacute;mico no es m&oacute;vil en su forma s&oacute;lida, aunque absorbe la humedad muy f&aacute;cilmente. Una vez l&iacute;quido, el hidr&oacute;xido de sodio se filtra r&aacute;pidamente en el suelo, con la posibilidad de contaminar las reserves de agua.</p>',
            'imagen' => '011.JPG'
        ]);
        $this->updateDetalleElemento(11);

        DB::table('detalles')->insert([
            'elemento_id' => 12,
            'aplicacion' => '<ul><li>En el proceso de Kroll, el magnesio se utiliza para obtener titanio.</li><li>El magnesio es a la vez fuerte y ligero. Esto lo hace ideal para su uso en piezas de autom&oacute;viles y camiones. A menudo es aleado con otros metales fuertes (por ejemplo, el aluminio).</li><li>Debido a su bajo peso y buenas propiedades mec&aacute;nicas y el&eacute;ctricas, el magnesio se utiliza para la fabricaci&oacute;n de tel&eacute;fonos m&oacute;viles (tambi&eacute;n llamados tel&eacute;fonos m&oacute;viles), ordenadores port&aacute;tiles y c&aacute;maras. Tambi&eacute;n se puede utilizar para hacer otros componentes el&eacute;ctricos.</li></ul>',
            'impacto' => '<p>Hay muy poca informaci&oacute;n disponible acerca de los efectos ambientales de los vapores de &oacute;xido de magnesio. Si otros mam&iacute;feros inhalan vapores de &oacute;xido de magnesio, pueden sufrir efectos similares a los de los humanos.</p><p>En un espectro del 0 al 3, los vapores de &oacute;xido de magnesio registran un 0,8 de peligrosidad para el medioambiente. Una puntuaci&oacute;n de 3 representa un peligro muy alto para el medioambiente y una puntuaci&oacute;n de 0 representa un peligro insignificante. Los factores tomados en cuenta para la obtenci&oacute;n de este ranking incluyen el grado de perniciosidad del material y/o su carencia de toxicidad, y la medida de su capacidad de permanecer activo en el medioambiente y si se acumula o no en los organismos vivos. No tiene en cuenta el grado de exposici&oacute;n a la sustancia.</p><p>El polvo de magnesio no es sospechoso de ser altamente da&ntilde;ino para el medioambiente. En forma de &oacute;xido de magnesio se ha establecido una la toxicidad en el agua en 1000 ppm.</p>',
            'imagen' => '012.JPG'
        ]);
        $this->updateDetalleElemento(12);

        DB::table('detalles')->insert([
            'elemento_id' => 13,
            'aplicacion' => '<ul><li>El aluminio met&aacute;lico es muy &uacute;til para el envasado. Se utiliza para fabricar latas y papel de aluminio.</li><li>El borohidruro de aluminio se a&ntilde;ade al combustible de aviaci&oacute;n.</li><li>El cableado el&eacute;ctrico se hace a veces a partir de aluminio o de una combinaci&oacute;n de aluminio y cobre.</li></ul>',
            'impacto' => '<p>Los efectos del Aluminio han atraido nuestra atenci&oacute;n, mayormente debido a los problemas de acidificaci&oacute;n. El Aluminio puede acumularse en las plantas y causar problemas de salud a animales que consumen esas plantas. Las concentraciones de Aluminio parecen ser muy altas en lagos acidificados. En estos lagos un n&uacute;mero de peces y anfibios est&aacute;n disminuyendo debido a las reacciones de los iones de Aluminio con las proteinas de las agallas de los peces y los embriones de las ranas</p><p>Las consecuencias para los p&aacute;jaros que consumen peces contaminados es que la c&aacute;scara de los huevos es m&aacute;s fina y los pollitos nacen con bajo peso. Las consecuencias para los animales que respiran el Aluminio a trav&eacute;s del aire son problemas de pulmones, p&eacute;rdida de peso y declinaci&oacute;n de la actividad. Otro efecto negativo en el ambiente del Aluminio es que estos iones pueden reaccionar con los fosfatos, los cuales causan que el fosfato no est&eacute; disponible para los organismos acu&aacute;ticos.</p><p>Altas concentraciones de Aluminio no s&oacute;lo pueden ser encontrados en lagos &aacute;cidos y arie, tambi&eacute;n en aguas subterr&aacute;neas y suelos &aacute;cidos.</p><p>The free online div table generator allows you to create nice grids for your websites. Please subsribe for a html g membership to stop adding promotional messages to the edited documents.</p>',
            'imagen' => '013.JPG'
        ]);
        $this->updateDetalleElemento(13);

        DB::table('detalles')->insert([
            'elemento_id' => 14,
            'aplicacion' => '<ul><li>El di&oacute;xido de silicio y s&iacute;lice (en forma de arcilla o arena) son componentes importantes de ladrillos, hormig&oacute;n y cemento.</li><li>El silicio es un semiconductor. Esto significa que el flujo el&eacute;ctrico puede ser controlada mediante el uso de partes de silicio. Por lo tanto, el silicio es muy importante en la industria el&eacute;ctrica. Componentes de silicio se utilizan en las computadoras, los transistores, c&eacute;lulas solares, pantallas LCD y otros dispositivos semiconductores.</li><li>La mayor&iacute;a del silicio se utiliza para la fabricaci&oacute;n de aleaciones de aluminio y silicio con el fin de producir piezas fundidas. Las piezas se producen mediante el vertido del material fundido de aluminio y silicio en un molde. Estas piezas de material fundido se utilizan generalmente en la industria del autom&oacute;vil para fabricar piezas para coches.</li></ul>',
            'impacto' => '<p>No se ha informado de efectos negativos del silicio sobre el medio ambiente.</p>',
            'imagen' => '014.JPG'
        ]);
        $this->updateDetalleElemento(14);

        DB::table('detalles')->insert([
            'elemento_id' => 15,
            'aplicacion' => '<ul><li>Los fosfatos se utilizan para hacer vidrio especial que se utiliza como en las l&aacute;mparas de sodio.</li><li>El f&oacute;sforo es un nutriente esencial para las plantas, por lo que se a&ntilde;ade a los fertilizantes.</li><li>En el laboratorio, dos is&oacute;topos radiactivos de f&oacute;sforo se puede utilizar como trazadores radiactivos.</li></ul>',
            'impacto' => '<p><em>F&oacute;sforo blanco:</em>&nbsp;El f&oacute;sforo blanco estra en el ambiente cuando es usado en industrias para hacer otros productos qu&iacute;micos y cuando el ej&eacute;rcito lo usa como munici&oacute;n. A trav&eacute;s de descargas de aguas residuales el f&oacute;sforo blanco termina en las aguas superficiales cerca de las f&aacute;bricas donde es usado.</p><p>El f&oacute;sforo blanco no es probablemente esparcido, porque este reacciona con el ox&iacute;geno bastante r&aacute;pido.</p><p><em>Fosfatos:</em>Los fosfatos tienen muchos efectos sobre los organismos. Los efectos son mayormente consecuencias de las emisiones de grandes cantidades de fosfatos en el ambiente debido a la miner&iacute;a y los cultivos. Durante la purificaci&oacute;n del agua los fosfatos no son a menudo eliminado correctamente, as&iacute; que pueden expandirse a trav&eacute;s de largas distancias cuando se encuentran en la superficie de las aguas.</p>',
            'imagen' => '015.JPG'
        ]);
        $this->updateDetalleElemento(15);

        DB::table('detalles')->insert([
            'elemento_id' => 16,
            'aplicacion' => '<ul><li>La mayor&iacute;a de azufre se convierte en &aacute;cido sulf&uacute;rico. El &aacute;cido sulf&uacute;rico es extremadamente importante para muchas industrias de todo el mundo. Se utiliza en la fabricaci&oacute;n de fertilizantes, refiner&iacute;as de petr&oacute;leo, tratamiento de aguas residuales, bater&iacute;as de plomo para autom&oacute;viles, extracci&oacute;n de mineral, eliminaci&oacute;n de &oacute;xido de hierro, fabricaci&oacute;n de nylon y producci&oacute;n de &aacute;cido clorh&iacute;drico.</li><li>El azufre puede ser utilizado como un pesticida y fungicida. Muchos agricultores que cultivan alimentos org&aacute;nicos usan azufre como un pesticida natural y fungicida.</li><li>El sulfato de magnesio, que contiene azufre, se utiliza como laxante, en sales de ba&ntilde;o y como un suplemento de magnesio para las plantas.</li></ul>',
            'impacto' => '<p>El azufre puede encontrarse en el aire en varias formas diferentes. Puede provocar irritaciones en los ojos y garganta de los animales, cuando la toma tiene lugar a trav&eacute;s de la inhalaci&oacute;n del azufre en su fase gaseosa. El azufre se aplica extensivamente en las industrias y es emitido al aire, debido a las limitadas posibilidades de destrucci&oacute;n de los enlaces de azufre que se aplican.<br /> Los efectos da&ntilde;inos del azufre en los animales son principalmente da&ntilde;os cerebrales, a trav&eacute;s de un malfuncionamiento del hipot&aacute;lamo, y perjudicar el sistema nervioso.<br /> Pruebas de laboratorio con animales de prueba han indicado que el azufre puede causar graves da&ntilde;os vasculares en las venas del cerebro, coraz&oacute;n y ri&ntilde;ones. Estos tests tambi&eacute;n han indicado que ciertas formas del azufre pueden causar da&ntilde;os fetales y efectos cong&eacute;nitos. Las madres pueden incluso transmitirles envenenamiento por azufre a sus hijos a trav&eacute;s de la leche materna.<br /> Por &uacute;ltimo, el azufre puede da&ntilde;ar los sistemas enzim&aacute;ticos internos de los animales.</p>',
            'imagen' => '016.JPG'
        ]);
        $this->updateDetalleElemento(16);

        DB::table('detalles')->insert([
            'elemento_id' => 17,
            'aplicacion' => '<ul><li>El cloro se utiliza (por lo general un determinado compuesto de cloro) para matar las bacterias en las piscinas y en el agua potable. Tambi&eacute;n se utiliza en los desinfectantes y blanqueadores por la misma raz&oacute;n. El cloro es muy efectivo contra la bacteria E. coli.</li><li>Si bien no se utiliza tan a menudo hoy en d&iacute;a, algunas fuerzas armadas a&uacute;n usan el cloro como un gas venenoso. Es m&aacute;s utilizado de esta forma normalmente por grupos terroristas.</li><li>El cloro se utiliza para fabricar pl&aacute;sticos.</li></ul>',
            'impacto' => '<p>El cloro se disuelve cuando se mezcla con el agua. Tambi&eacute;n puede escaparse del agua e incorporarse al aire bajo ciertas condiciones. La mayor&iacute;a de las emisiones de cloro al medio ambiente son al aire y a las aguas superficiales.</p><p>Una vez en el aire o en el agua, el cloro reacciona con otros compuestos qu&iacute;micos. Se combina con material inorg&aacute;nico en el ahua para formar sales de cloro, y con materia org&aacute;nica para formar compuestos org&aacute;nicos clorinados.</p><p>Debido a su reactividad no es probable que el cloro se mueva a trav&eacute;s del suelo y se incorpore a las aguas subterr&aacute;neas.</p><p>Las plantas y los animales no suelen almacenar cloro. Sin embargo, estudios de laboratorio muestran que la exposici&oacute;n repetida a cloro en el aire puede afectar al sistema inmunitario, la sangre, el coraz&oacute;n, y el sistema respiratorio de los animales.</p><p>El cloro provoca da&ntilde;os ambientales a bajos niveles. El cloro es especialmente da&ntilde;ino para organismos que viven en el agua y el suelo.</p>',
            'imagen' => '017.JPG'
        ]);
        $this->updateDetalleElemento(17);

        DB::table('detalles')->insert([
            'elemento_id' => 18,
            'aplicacion' => '<ul><li>El gas arg&oacute;n se utiliza en quemadores el&eacute;ctricos de grafito para evitar la combusti&oacute;n del grafito. El grafito se quema en si se calienta con aire normal por la presencia de ox&iacute;geno.</li><li>Los cristales de silicio y germanio se obtienen utilizando arg&oacute;n.</li><li>El arg&oacute;n se utiliza para matar a los cerdos (evitando su sufrimiento) si hay un brote de alguna enfermedad en una granja.</li></ul>',
            'impacto' => '<p>Actualmente no se conocen los efectos del arg&oacute;n en plantas y animales. No se espera que perjudique a los organismos acu&aacute;ticos.</p><p>El arg&oacute;n no contiene ning&uacute;n material que deteriore la capa de ozono y no est&aacute; inclu&iacute;do en la lista de contaminantes marinos del DOT (Departamento de Transportes, E.E.U.U.).</p>',
            'imagen' => '018.JPG'
        ]);
        $this->updateDetalleElemento(18);

        DB::table('detalles')->insert([
            'elemento_id' => 19,
            'aplicacion' => '<ul><li>Casi todo el potasio en el mundo se utiliza en fertilizantes. Como los iones de potasio son una parte vital de la nutrici&oacute;n de las plantas, los cultivos y los &aacute;rboles deben ser cultivados en suelos con altas concentraciones de iones de potasio. El cloruro de potasio, sulfato de potasio y nitrato de potasio se utilizan en la agricultura, horticultura y cultivos hidrop&oacute;nicos.</li><li>El cloruro de potasio se utiliza para detener el coraz&oacute;n. Esto se utiliza para una cirug&iacute;a de coraz&oacute;n (cuando el coraz&oacute;n se detiene y se vuelve a reactivar) y en las inyecciones letales.</li><li>La sal de Rochelle, que contiene potasio, es el principal componente en polvo de hornear.</li></ul>',
            'impacto' => '<p>Junto con el nitr&oacute;geno y el f&oacute;sforo, el potasio es uno de los macronutrients esenciales para la supervivencia de las plantas. Su presencia es de gran importancia para la salud del suelo, el crecimiento de las plantas y la nutrici&oacute;n animal. Su funci&oacute;n primaria en las plantas es su papel en el mantenimiento de la presi&oacute;n osm&oacute;tica y el tama&ntilde;o de la c&eacute;lula, influyendo de esta forma en la fotos&iacute;ntesis y en la producci&oacute;n de energ&iacute;a, as&iacute; como en la apertura de los estomas y el aporte de di&oacute;xido de carbono, la turgencia de la planta y la translocaci&oacute;n de los nutrientes. Como tal, el elemento es requerido en proporciones relativamente elevadas por las plantas en desarrollo.</p><p>Las consecuencias de niveles bajos de potasio se muestran por variedad de s&iacute;ntomas: restricci&oacute;n del crecimiento, reducci&oacute;n del florecimiento, cosechas enos abundantes y menor calidad de producci&oacute;n.</p><p>Elevados niveles de potasio soluble en el agua pueden causar da&ntilde;os a las semillas en germinaci&oacute;n, inhiben la toma de otros minerales y reducen la calidad del cultivo.</p><p>Composed with the online HTML editor. Please purchase a HTML Kit license to remove the promotional messages from the edited documents.</p>',
            'imagen' => '019.JPG'
        ]);
        $this->updateDetalleElemento(19);

        DB::table('detalles')->insert([
            'elemento_id' => 20,
            'aplicacion' => '<ul><li>El calcio se utiliza como un agente reductor con el fin de extraer metales como el uranio, zirconio y torio.</li><li>El queso se hace mediante el uso de iones de calcio que realizan la coagulaci&oacute;n de la leche.</li><li>El cemento y el mortero, mezclas importantes en la construcci&oacute;n de edificios y otras cosas, se hacen con calcio.</li></ul>',
            'impacto' => '<p>El fosfato de calcio es muy t&oacute;xico para los organismos acu&aacute;ticos.</p>',
            'imagen' => '020.JPG'
        ]);
        $this->updateDetalleElemento(20);

        /*DB::table('detalles')->insert([
            'elemento_id' => ,
            'aplicacion' => '',
            'impacto' => '',
            'imagen' => '.JPG'
        ]);
        $this->updateDetalleElemento();*/
    }
}

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

        DB::table('detalles')->insert([
            'elemento_id' => 21,
            'aplicacion' => '<ul><li>El escandio, se a&ntilde;ade al aluminio para crear una aleaci&oacute;n muy fuerte que se utiliza en la industria aeroespacial. Los avi&oacute;nes militares rusos MiG-21 y MiG-29 utilizan este material. Debido al alto costo, se utilizan m&aacute;s frecuentemente aleaciones de titanio en los aviones.</li><li>Las aleaciones de escandio se utilizan tambi&eacute;n en algunos equipos de alto rendimiento deportivo. Esto incluye los bates de b&eacute;isbol, cadenas de bicicletas y palos de lacrosse. Hay por lo menos una empresa de fabricaci&oacute;n de armas que utiliza aleaciones de escandio en sus rev&oacute;lveres.</li><li>El yoduro de escandio, se utiliza con yoduro de sodio para crear l&aacute;mparas de gas. Son una fuente de luz potente y com&uacute;nmente se utiliza para replicar la luz solar al usar c&aacute;maras de televisi&oacute;n.</li></ul>',
            'impacto' => '<p>El escandio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n pueden entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El escandio se acumula gradualmente en los suelos y el agua y esto conducir&aacute; finalmente al incremento de las concentraciones en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos el escandio produce da&ntilde;os a las membranas celulares, lo que tiene diversas influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '021.JPG'
        ]);
        $this->updateDetalleElemento(21);

        DB::table('detalles')->insert([
            'elemento_id' => 22,
            'aplicacion' => '<ul><li>Las aleaciones de titanio se utilizan en los aviones y tambi&eacute;n en helic&oacute;pteros, blindaje, buques de guerra, naves espaciales y misiles. Las aleaciones de titanio no se desgastan f&aacute;cilmente, son fuertes y resistentes a la corrosi&oacute;n por lo que son perfectos para su uso en las aplicaciones anteriores.</li><li>La mayor&iacute;a de titanio se convierte en &oacute;xido de titanio. Este es el pigmento blanco encontrado en el dent&iacute;frico, pintura, papel y algunos pl&aacute;sticos. El cemento y las piedras preciosas tambi&eacute;n contienen &oacute;xido de titanio. Las ca&ntilde;as de pescar y palos de golf tambi&eacute;n se hacen m&aacute;s fuertes mediante del uso de &oacute;xido de titanio.</li><li>Los intercambiadores de calor en las plantas de desalinizaci&oacute;n (que convierten el agua de mar en agua potable) est&aacute;n hechos de titanio, ya que es resistente a la corrosi&oacute;n en agua de mar.</li></ul>',
            'impacto' => '<p>Baja toxicidad.</p>',
            'imagen' => '022.JPG'
        ]);
        $this->updateDetalleElemento(22);

        DB::table('detalles')->insert([
            'elemento_id' => 23,
            'aplicacion' => '<ul><li>Peque&ntilde;as cantidades de vanadio son a&ntilde;adidos al acero para hacerlo m&aacute;s fuerte. Los instrumentos quir&uacute;rgicos, herramientas, ejes, cuadros de bicicletas, cig&uuml;e&ntilde;ales, engranajes y motores de aviones est&aacute;n hechos de este acero reforzado con vanadio.</li><li>El pent&oacute;xido de vanadio se utiliza como un catalizador para producir &aacute;cido sulf&uacute;rico. El &aacute;cido sulf&uacute;rico es uno de los productos qu&iacute;micos m&aacute;s importantes para la industria. El pent&oacute;xido de vanadio se utiliza tambi&eacute;n para hacer anh&iacute;drido maleico y algunos tipos de cer&aacute;mica.</li><li>En el futuro, podr&iacute;a usarse un compuesto de vanadio podr&iacute;a para las pilas de litio como &aacute;nodo. Tambi&eacute;n podr&iacute;a usarse en las bater&iacute;as recargables.</li></ul>',
            'impacto' => '<p>El Vanadio puede ser encontrado en el ambiente, en algas, plantas, invertebrados, peces y muchas otras especies. En mejillones y cangrejos se acumula fuertemente, el cual puede ser acumulado en concentraciones de 10<sup>5&nbsp;</sup>a 10<sup>6</sup>&nbsp;veces mayores que las concentraciones que son encontradas en el agua salada.</p><p>El Vanadio causa la inhibici&oacute;n de ciertas enzimas de animales, lo cual tiene varios efectos neurol&oacute;gicos. Pr&oacute;ximo a los efectos neurol&oacute;gicos el Vanadio puede causar desordenes respiratorios, par&aacute;lisis y efectos negativos en el h&iacute;gado y los ri&ntilde;ones.</p><p>Las pruebas de laboratorio en pruebas con animales han mostrado, que el Vanadio puede causar da&ntilde;o en el sistema reproductivo de animales machos, y el Vanadio puede causar alteraciones del ADN en algunos casos, pero no puede causar c&aacute;ncer en animales.</p>',
            'imagen' => '023.JPG'
        ]);
        $this->updateDetalleElemento(23);

        DB::table('detalles')->insert([
            'elemento_id' => 24,
            'aplicacion' => '<ul><li>La cinta magn&eacute;tica (utilizada en cassettes de audio y cintas de audio de gama alta) est&aacute; hecha de un compuesto magn&eacute;tico de cromo.</li><li>El &oacute;xido de cromo (III) es un &oacute;xido de metal pulido mejor conocido como verde de cromo.</li><li>En los laboratorios de ciencias, el &aacute;cido cr&oacute;mico se utiliza para limpiar la cristaler&iacute;a si tiene trazas de compuestos org&aacute;nicos.</li></ul>',
            'impacto' => '<p>Los cultivos contienen sistemas para gestionar la toma de Cromo para que est&aacute; sea lo suficientemente baja como para no causar c&aacute;ncer. Pero cuando la cantidad de Cromo en el suelo aumenta, esto puede aumentar las concentraciones en los cultivos. La acidificaci&oacute;n del suelo puede tambi&eacute;n influir en la captaci&oacute;n de Cromo por los cultivos. Las plantas usualmente absorben s&oacute;lo Cromo (III). Esta clase de Cromo probablemente es esencial, pero cuando las concentraciones exceden cierto valor, efectos negativos pueden ocurrir.</p><p>No es conocido que el Cromo se acumule en los peces, pero altas concentraciones de Cromo, debido a la disponibilidad de metales en las aguas superficiales, pueden da&ntilde;ar las agallas de los peces que nadan cerca del punto de vertido. En animales el Cromo puede causar problemas respiratorios, una baja disponibilidad puede dar lugar a contraer las enfermedades, defectos de nacimiento, infertilidad y formaci&oacute;n de tumores.</p>',
            'imagen' => '024.JPG'
        ]);
        $this->updateDetalleElemento(24);

        DB::table('detalles')->insert([
            'elemento_id' => 25,
            'aplicacion' => '<ul><li>El traquetreo de los motores se reducen mediante el uso de un compuesto de manganeso que se a&ntilde;ade a la gasolina sin plomo. Esto aumenta el octanaje del combustible.</li><li>El manganeso se utiliza en las bater&iacute;as desechables est&aacute;ndar.</li><li>El manganeso es esencial para producir acero y el hierro. El manganeso es un componente esencial para la fabricaci&oacute;n de acero inoxidable de bajo costo.</li></ul>',
            'impacto' => '<p>Los compuestos del manganeso existen de forma natural en el ambiente como s&oacute;lidos en suelos y peque&ntilde;as part&iacute;culas en el agua. Las part&iacute;culas de manganeso en el aire est&aacute;n presente en las part&iacute;culas de polvo. Estas usualmente se depositan en la tierra en unos pocos d&iacute;as.<br /> Los humanos aumentan las concentraciones de Manganeso en el aire por las actividades industriales y a trav&eacute;s de la quema de productos f&oacute;siles. El Manganeso que deriva de las fuentes humanas puede tambi&eacute;n entrar en la superficie del agua, aguas subterr&aacute;neas y aguas residuales. A trav&eacute;s de la aplicaci&oacute;n del Manganeso como pesticida el Manganeso entrar&aacute; en el suelo.</p><p>Para los animales el Manganeso es un componente esencial sobre unas 36 enzimas que son usadas para el metabolismo de carbohidratos, prote&iacute;nas y grasas.</p><p>Con animales que comen muy poco manganeso interfiere en el crecimiento normal, la formaci&oacute;n de huesos y en la reproducci&oacute;n.</p><p>El Manganseo puede causar s&iacute;ntomas de toxicidad y deficiencia en plantas. Cuando el pH del suelo es bajo las deficiencias de Manganeso son m&aacute;s comunes.</p><p>Concentraciones altamente t&oacute;xicas de Manganeso en suelo pueden causar inflamaci&oacute;n de la pared celular, abrasamiento de las hojas y puntos marrones en las hojas. Las deficiencia puede tambi&eacute;n causar estos efectos entre concentraciones t&oacute;xicas y concentraciones que causan deficiencias una peque&ntilde;a &aacute;rea de concentraciones donde el crecimiento de la planta es &oacute;ptimo puede ser detectado.</p>',
            'imagen' => '025.JPG'
        ]);
        $this->updateDetalleElemento(25);

        DB::table('detalles')->insert([
            'elemento_id' => 26,
            'aplicacion' => '<ul><li>En el proceso Haber-Bosch se utilizan catalizadores de hierro para producir amon&iacute;aco y tambi&eacute;n se utilizan en el proceso de Fischer-Tropsch para convertir el mon&oacute;xido de carbono en los hidrocarburos utilizados para combustibles y lubricantes.</li><li>El metal de hierro es fuerte, pero tambi&eacute;n es muy barato. Por lo tanto, es el metal de uso m&aacute;s com&uacute;n hoy en d&iacute;a. La mayor&iacute;a de los autom&oacute;viles, m&aacute;quinas, herramientas, los cascos de los buques de gran tama&ntilde;o y la mayor&iacute;a de las piezas de las m&aacute;quinas est&aacute;n hechas de hierro.</li><li>El acero inoxidable es un tipo muy com&uacute;n de acero. El acero se obtiene mediante la combinaci&oacute;n de hierro con otros metales. El acero inoxidable se utiliza en algunas partes de los edificios, en ollas y sartenes, cubiertos y material quir&uacute;rgico. Tambi&eacute;n se utiliza para fabricar aviones y autom&oacute;viles. El acero inoxidable es tambi&eacute;n 100% reciclable.</li></ul>',
            'impacto' => '<p>El hierro (III)-O-arsenito, pentahidratado puede ser peligroso para el medio ambiente; se debe prestar especial atenci&oacute;n a las plantas, el aire y el agua. Se recomienda encarecidamente que no se permita que el producto entre en el medio ambiente porque persiste en &eacute;ste.</p>',
            'imagen' => '026.JPG'
        ]);
        $this->updateDetalleElemento(26);

        DB::table('detalles')->insert([
            'elemento_id' => 27,
            'aplicacion' => '<ul><li>El &oacute;xido de cobalto de litio se utiliza como un electrodo en bater&iacute;as de litio. Las bater&iacute;as recargables de n&iacute;quel-hidruro met&aacute;lico (NiMH) tambi&eacute;n contienen algo de cobalto.</li><li>Pinturas, barnices y tintas se pueden hacer con cobalto para conseguir determinados colores.</li><li>El cobalto se suele a&ntilde;adir a las aleaciones para crear lo que se conoce como <em>superaleaciones</em>. Estas aleaciones tienen una temperatura estable por lo que son ampliamente utilizados en motores a reacci&oacute;n y turbinas de gas. Estas aleaciones se utilizan tambi&eacute;n en las caderas y rodillas prot&eacute;sicas cuando se necesitan estos tipos de implantes. Algunos dientes postizos se realizan con cobalto para evitar alergias al n&iacute;quel. Los imanes permanentes tambi&eacute;n est&aacute;n hechos de aleaciones de cobalto.</li></ul>',
            'impacto' => '<p>El Cobalto es un elemento que ocurre de forma natural en el medio ambiente en el aire, agua, suelo, rocas, plantas y animales. Este puede tambi&eacute;n entrar en el aire y el agua y depositarse sobre la tierra a trav&eacute;s del viento y el polvo y entrar en la superficie del agua a trav&eacute;s de la escorrent&iacute;a cuando el agua de lluvia corre a trav&eacute;s del suelo y rocas que contienen Cobalto.</p><p>Los humanos a&ntilde;aden Cobalto por liberaci&oacute;n de peque&ntilde;as cantidades en la atm&oacute;sfera por la combusti&oacute;n de carb&oacute;n y la miner&iacute;a, el procesado de minerales que contienen Cobalto y la producci&oacute;n y uso de compuesto qu&iacute;micos con Cobalto.</p><p>Por otra parte, los suelo cercanos a las minas y las fundiciones pueden contener muy altas cantidades de Cobalto, as&iacute; que la toma por los animales a trav&eacute;s de comer las plantas puede causar efectos sobre la salud. El Cobalto se acumular&aacute; en plantas y en cuerpos de animales que comen esas plantas, pero no es conocido que el Cobalto sufra biomagnificaci&oacute;n en la cadena alimentaria. Debido a que las frutas, vegetales, peces y otros animales que nosotros comemos usualmente no contienen altas cantidades de Cobalto.</p>',
            'imagen' => '027.JPG'
        ]);
        $this->updateDetalleElemento(27);

        DB::table('detalles')->insert([
            'elemento_id' => 28,
            'aplicacion' => '<ul><li>El n&iacute;quel se utiliza en muchos productos. Algunos ejemplos son las cuerdas de la guitarra el&eacute;ctrica, los imanes y bater&iacute;as recargables. Las propiedades magn&eacute;ticas de n&iacute;quel en realidad hacen que sea un material muy importante para fabricar discos duros de ordenador.</li><li>El n&iacute;quel se une al hierro en una aleaci&oacute;n para fabricar acero inoxidable. El acero inoxidable tiene numerosas aplicaciones. Se emplea en utensilios de cocina, cubiertos, herramientas, instrumentos quir&uacute;rgicos, tanques de almacenamiento de armas de fuego, faros de coches, joyas y relojes.</li><li>Varios tipos de hoja de lata se hacen usando n&iacute;quel aleado con otros metales. Tambi&eacute;n se pueden hacer aleaciones resistentes al calor y la electricidad de n&iacute;quel.</li></ul>',
            'impacto' => '<p>El n&iacute;quel es liberado al aire por las plantas de energ&iacute;a y las incineradoras de basuras. Este se depositar&aacute; en el suelo o caer&aacute; despu&eacute;s de reaccionar con las gotas de lluvia. Usualmente lleva un largo periodo de tiempo para que el n&iacute;quel sea eliminado del aire. El n&iacute;quel puede tambi&eacute;n terminar en la superficie del agua cuando es parte de las aguas residuales. La mayor parte de todos los compuestos del n&iacute;quel que son liberados al ambiente se absorber&aacute;n por los sedimentos o part&iacute;culas del suelo y llegar&aacute; a inmovilizarse. En suelos &aacute;cidos, el n&iacute;quel se une para llegar a ser m&aacute;s m&oacute;vil y a menudo alcanza el agua subterr&aacute;nea.</p>',
            'imagen' => '028.JPG'
        ]);
        $this->updateDetalleElemento(28);

        DB::table('detalles')->insert([
            'elemento_id' => 29,
            'aplicacion' => '<ul><li>El cobre se utiliza para las tuber&iacute;as de suministro de agua. Este metal tambi&eacute;n se utiliza en refrigeradores y sistemas de aire acondicionado.</li><li>Los disipadores de calor de los ordenadores est&aacute;n hechos de cobre debido a que el cobre es capaz de absorber una gran cantidad de calor.</li><li>El magnetr&oacute;n, la parte fundamental de los hornos de microondas, contiene cobre.</li></ul>',
            'impacto' => '<p>La producci&oacute;n mundial de Cobre est&aacute; todav&iacute;a creciendo. Esto b&aacute;sicamente significa que m&aacute;s y m&aacute;s Cobre termina en le medioambiente. Los r&iacute;os est&aacute;n depositando barro en sus orillas que est&aacute;n contaminados con Cobre, debido al vertido de aguas residuales contaminadas con Cobre. El Cobre entra en el aire, mayoritariamente a trav&rsquo;es de la liberaci&oacute;n durante la combusti&oacute;n de fuel. El Cobre en el aire permanecer&aacute; por un peri&oacute;do de tiempo eminente, antes de depositarse cuando empieza a llover. Este terminar&aacute; mayormente en los suelos, como resultado los suelos pueden tambi&eacute;n contener grandes cantidades de Cobre despu&eacute;s de que est&eacute; sea depositado desde el aire.</p><p>El Cobre puede ser liberado en el medioambiente tanto por actividades humanas como por procesos naturales. Ejemplo de fuentes naturales son las tormentas de polvo, descomposici&oacute;n de la vegetaci&oacute;n, incendios forestales y aerosoles marinos. Unos pocos de ejemplos de actividades humanas que contribuyen a la liberaci&oacute;n del Cobre han sido ya nombrado. Otros ejemplos son la miner&iacute;a, la producci&oacute;n de metal, la producci&oacute;n de madera y la producci&oacute;n de fertilizantes fosfatados.</p><p><br /> Cuando el Cobre termina en el suelo este es fuertemente atado a la materia org&aacute;nica y menierales. Como resultado este no viaja muy lejos antes de ser liberado y es dificil que entre en el agua subterr&aacute;nea. En el agua superficial el cobre puede viajar largas distancias, tanto suspendido sobre las part&iacute;culas de lodos como iones libres.</p><p>El Cobre no se rompe en el ambiente y por eso se puede acumular en plantas y animales cuando este es encontrado en suelos. En suelos ricos en Cobre s&oacute;lo un n&uacute;mero peque&ntilde;o de plantas pueden vivir. Por esta raz&oacute;n no hay diversidad de plantas cerca de las f&aacute;bricas de Cobres, debido al efecto del Cobre sobre las plantas, es una seria amenaza para la producci&oacute;n en las granjas. El Cobre puede seriamente influir en el proceso de ciertas tierras agr&iacute;colas, dependiendo de la acidez del suelo y la presencia de materia org&aacute;nica. A pesar de esto el esti&eacute;rcol que contiene Cobre es todav&iacute;a usado.</p><p>The free Word to HTML converter helps you get rid of the dirty code when converting documents to web content.</p>',
            'imagen' => '029.JPG'
        ]);
        $this->updateDetalleElemento(29);

        DB::table('detalles')->insert([
            'elemento_id' => 30,
            'aplicacion' => '<ul><li>El zinc se utiliza principalmente como un agente anti-corrosiva en productos de metal. Se utiliza en el proceso de galvanizaci&oacute;n. La galvanizaci&oacute;n es el recubrimiento de otros metales con hierro o acero. Aproximadamente la mitad del zinc que se usa en el mundo es para galvanizaci&oacute;n. La galvanizaci&oacute;n se utiliza para fabricar tela met&aacute;lica, barandillas, puentes colgantes, postes de luz, techos de metal, intercambiadores de calor y carrocer&iacute;as de coches.</li><li>El zinc se usa como un &aacute;nodo en otros metales, en particular los metales que se utilizan en trabajos el&eacute;ctricos o que entran en contacto con agua de mar.</li><li>Tambi&eacute;n se utiliza para el &aacute;nodo en las bater&iacute;as. En pilas de zinc y carbono se utiliza una l&aacute;mina de este metal.</li></ul>',
            'impacto' => '<p>El Zinc ocurre de forma natural en el aire, agua y suelo, pero las concentraciones est&aacute;n aumentando por causas no naturales, debido a la adici&oacute;n de Zinc a trav&eacute;s de las actividades humanas. La mayor&iacute;a del Zinc es adicionado durante actividades industriales, como es la miner&iacute;a, la combusti&oacute;n de carb&oacute;n y residuos y el procesado del acero.<br /> El Zinc no s&oacute;lo puede ser una amenaza para el ganado, pero tambi&eacute;n para las plantas. Las plantas a menudo tienen una toma de Zinc que sus sistemas no puede manejar, debido a la acumulaci&oacute;n de Zinc en el suelo. En suelos ricos en Zinc s&oacute;lo un n&uacute;mero limitado de plantas tiene la capacidad de sobrevivir. Esta es la raz&oacute;n por la cu&aacute;l no hay mucha diversidad de plantas cerca de factorias de Zinc. Debido a que los efectos del Zinc sobre, las plantas es una amenaza ser&iacute;a para la producci&oacute;n de las granjas. A pesar de esto esti&eacute;rcol que contiene zinc es todav&iacute;a aplicado.</p><p>Finalmente, el Zinc puede interrumpir la actividad en los suelos, con influencias negativas en la actividad de microorganismos y lombrices. La descomposici&oacute;n de la materia org&aacute;nica posiblemente sea m&aacute;s lenta debido a esto.</p>',
            'imagen' => '030.JPG'
        ]);
        $this->updateDetalleElemento(30);

        DB::table('detalles')->insert([
            'elemento_id' => 31,
            'aplicacion' => '<ul><li>El uso principal del galio es en semiconductores donde se utiliza com&uacute;nmente en circuitos de microondas y en algunas aplicaciones de infrarrojos. Tambi&eacute;n se utiliza en para fabricar diodos LED de color azule y violeta y diodos l&aacute;ser.</li><li>El galio se usa en las armas nucleares para ayudar a estabilizar el plutonio.</li><li>Se puede utilizar en el interior de un telescopio para encontrar neutrinos.</li></ul>',
            'impacto' => '<p>Una controversia con el galio involucra las armas nucleares y la poluci&oacute;n. El galio es usado para unir las minas entre s&iacute;. Sin embargo, cuando las minas se cortan y se forma polvo de &oacute;xido de plutonio, el galio permanece en el plutonio. El plutonio se ve inutilizado para su uso como combustible porque el galio es corrosivo para varios otros elementos. Si el galio es eliminado, sin embargo, el plutonio se vuelve &uacute;til de nuevo. El problema es que el proceso para eliminar el galio contribuye a una gran cantidad de poluci&oacute;n en el agua con sustancias radiactivas. El galio es un elemento ideal para ser usado en minas, pero la poluci&oacute;n es destructiva para La Tierra y para la salud de sus habitantes. Incluso haci&eacute;ndose esfuerzos para eliminar la poluci&oacute;n del agua, esto incrementar&iacute;a significativamente los costes de procedimiento de la conversi&oacute;n de plutonio en un combustible (en alrededor de 200 millones de d&oacute;lares). Los cient&iacute;ficos est&aacute;n trabajando en otro m&eacute;todo para limpiar el plutonio, pero pueden pasar a&ntilde;os hasta que sea completado.</p>',
            'imagen' => '031.JPG'
        ]);
        $this->updateDetalleElemento(31);

        DB::table('detalles')->insert([
            'elemento_id' => 32,
            'aplicacion' => '<ul><li>El germanio se utiliza como material semiconductor. Se usa generalmente, junto al silicio, en los circuitos integrados de alta velocidad para mejorar su rendimiento. En algunos casos se est&aacute; planteando sustituir al silicio por germanio para hacer chips miniaturizados.</li><li>Tambi&eacute;n se utiliza en las l&aacute;mparas fluorescentes y algunos didodos LED.</li><li>Algunos pedales de guitarra contienen transistores de germanio para producir un tono de distorsi&oacute;n caracter&iacute;stico.</li></ul>',
            'impacto' => '<p>Como metal pesado se considera que tiene alg&uacute;n efecto negativo en los ecosistemas acu&aacute;ticos.</p>',
            'imagen' => '032.JPG'
        ]);
        $this->updateDetalleElemento(32);

        DB::table('detalles')->insert([
            'elemento_id' => 33,
            'aplicacion' => '<ul><li>El uso principal de ars&eacute;nico met&aacute;lico es el fortalecimiento de las aleaciones de cobre y plomo para su uso en bater&iacute;as de coche.</li><li>Tambi&eacute;n se utiliza como un dopante de tipo n en dispositivos semiconductores electr&oacute;nicos (como los diodos).</li><li>El ars&eacute;nico tambi&eacute;n se utiliza en numerosos pesticidas, herbicidas e insecticidas, aunque esta pr&aacute;ctica se est&aacute; volviendo menos com&uacute;n ya que cada vez m&aacute;s productos de este tipo est&aacute;n prohibidos.</li></ul>',
            'impacto' => '<p>El Ars&eacute;nico puede ser encontrado de forma natural en la tierra en peque&ntilde;as concentraciones. Esto ocurre en el suelo y minerales y puede entrar en el aire, agua y tierra a trav&eacute;s de las tormentas de polvo y las aguas de escorrent&iacute;a.</p><p>El Ars&eacute;nico es un componente que es extremadamente duro de convertir en productos solubre en agua o vol&aacute;til. En realidad el Ars&eacute;nico es naturalmente espec&iacute;ficamente un compuesto m&oacute;vil, b&aacute;sicamente significa que grandes concentraciones no aparecen probablemente en un sitio espec&iacute;fico.</p><p>El ciclo del Ars&eacute;nico ha sido ampliado como consecuencia de la interferencia humana y debido a esto, grandes cantidades de Ars&eacute;nico terminan en el Ambiente y en organismos vivos. El Ars&eacute;nico es moyoritariamente emitido por las industrias productoras de cobre, pero tambi&eacute;n durante la producci&oacute;n de plomo y zinc y en la agricultura.</p><p>Este no puede ser destruido una vez que este ha entrado en el Ambiente, as&iacute; que las cantidades que hemos a&ntilde;adido pueden esparcirse y causar efectos sobre la salud de los humanos y los animales en muchas localizaciones sobre la tierra.</p><p>Las plantas absorben Ars&eacute;nico bastante f&aacute;cil, as&iacute; que alto ranto de concentraciones pueden estar presentes en la comida. Las concentraciones del peligroso Ars&eacute;nico inorg&aacute;nico que est&aacute; actualmente presente en las aguas superficiales aumentan las posibilidades de alterar el material gen&eacute;tico de los peces.</p>',
            'imagen' => '033.JPG'
        ]);
        $this->updateDetalleElemento(33);

        DB::table('detalles')->insert([
            'elemento_id' => 34,
            'aplicacion' => '<ul><li>El uso m&aacute;s com&uacute;n de selenio es en la producci&oacute;n de vidrio. Debido al hecho de que el selenio provoca un color rojo en el vidrio, tambi&eacute;n se puede usar para tintar el vidrio de color rojo. Tambi&eacute;n se puede utilizar para anular los tintes de color verde o amarillo causados ​​por otras impurezas durante el proceso de fabricaci&oacute;n de vidrio.</li><li>En la fabricaci&oacute;n de goma se utilizan peque&ntilde;as cantidades de compuestos de selenio.</li><li>El selenio se puede mezclar con otro elemento qu&iacute;mico llamado bismuto para crear un lat&oacute;n sin plomo.</li></ul>',
            'impacto' => '<p>El selenio se presenta naturalmente en el medio ambiente. Es liberado tanto a trav&eacute;s de procesos naturales como de actividades humanas. En su forma natural el selenio como elemento no puede ser creado ni destruido, pero tiene la capacidad de cambiar de forma.</p><p>Bajos niveles de selenio pueden terminar en suelos o agua a trav&eacute;s de la erosi&oacute;n de las rocas. Ser&aacute; entonces tomado por las plantas o acabar&aacute; en el aire cuando es absorbido en finas part&iacute;culas de polvo. Es m&aacute;s probable que el selenio entre en el aire a trav&eacute;s de la combusti&oacute;n de carb&oacute;n y aceite, en forma de di&oacute;xido de selenio. Esta sustancia ser&aacute; transformada en &aacute;cido de selenio en el agua o el sudor.</p>',
            'imagen' => '034.JPG'
        ]);
        $this->updateDetalleElemento(34);

        DB::table('detalles')->insert([
            'elemento_id' => 35,
            'aplicacion' => '<ul><li>El mayor uso de bromo es la creaci&oacute;n de retardantes de llama. Cuando cuando esta sustancia se quema el bromo aisla el fuego del ox&iacute;geno causando que este se apague.</li><li>Los compuestos de bromuro, en particular el bromuro de potasio, se utilizan en los c&iacute;rculos m&eacute;dicos como anticonvulsivos. Tambi&eacute;n se utilizan los veterinarios. La mayor&iacute;a de los pa&iacute;ses limitan seriamente el uso y la disponibilidad de las sales de bromo para uso humano debido al hecho de que causan disfunciones neurol&oacute;gicas.</li><li>Las sustancias bromadas son ingredientes importantes de muchos medicamentos de venta libre y medicamentos con receta, como analg&eacute;sicos, sedantes y los antihistam&iacute;nicos. De hecho, los compuestos de bromo son los ingredientes activos en varios medicamentos que tratan la neumon&iacute;a y la adicci&oacute;n a la coca&iacute;na. Actualmente, los medicamentos que contienen varios compuestos de bromo est&aacute;n en ensayos para el tratamiento de la enfermedad de Alzheimer y las nuevas generaciones de la lucha contra el c&aacute;ncer y medicamentos contra el SIDA.</li></ul>',
            'impacto' => '<p>Los bromuros org&aacute;nicos son a menudo aplicados como agentes desinfectantes y protectores, debido a sus efectos perjudiciales para los microorganismos. Cuando se aplican en invernaderos y en campos de cultivo pueden ser arrastrados f&aacute;cilmente hasta las aguas superficiales, lo que tiene efectos muy negativos para la salud de las daphnia, peces, langostas y algas.</p><p>Los bromuros org&aacute;nicos son tambi&eacute;n perjudiciales para los mam&iacute;feros, especialmente cuando se acumulan en los cuerpos de sus presas. Los efectos m&aacute;s importantes sobre los animales son da&ntilde;os nerviosos y da&ntilde;os en el ADN, lo que puede aumentar las probabilidades de desarrollar c&aacute;ncer.</p><p>La toma de bromuro org&aacute;nico tiene lugar a trav&eacute;s de la comida, de la respiraci&oacute;n y a trav&eacute;s de la piel.</p>',
            'imagen' => '035.JPG'
        ]);
        $this->updateDetalleElemento(35);

        DB::table('detalles')->insert([
            'elemento_id' => 36,
            'aplicacion' => '<ul><li>Las bombillas de kript&oacute;n se utilizan en fotograf&iacute;a para algunas aplicaciones, ya que producen luz blanca bajo ciertas condiciones. Generalmente se usa en flashes fotogr&aacute;ficos de alta velocidad.</li><li>Este color blanco se utiliza en los tubos de gas de colores para crear un efecto similar al de un letrero de ne&oacute;n.</li><li>El kript&oacute;n se utiliza en la producci&oacute;n y el uso del l&aacute;ser de fluoruro de kript&oacute;n, que est&aacute; siendo utilizado en la investigaci&oacute;n de la fusi&oacute;n nuclear. Su uso tambi&eacute;n es frecuente en espect&aacute;culos de l&aacute;ser de alta potencia.</li></ul>',
            'impacto' => '<p>El kript&oacute;n es un gas raro atmosf&eacute;rico y como tal no es t&oacute;xico y es qu&iacute;micamente inerte. Las temperaturas extremadamente fr&iacute;as (-244<sup>o</sup>C) congelar&aacute;n a los organismos al contacto, pero no se anticipan efectos ecol&oacute;gicos a largo plazo.</p><p><em>Consideraciones para su vertido:&nbsp;</em>Cuando su vertido sea necesario, descargar el gas lentamente en un lugar exterior y bien ventilado lejano a &aacute;reas de trabajo y tomas de aire de edificios.No verter ning&uacute;n gas residual en cilindros de aire comprimido. Devolver los cilindros al proveedor con alguna presi&oacute;n residual, y la v&aacute;lvula del cilindro fuertemente cerrada.Tener en cuenta que los requerimientos estatales y locales para los vertidos pueden ser m&aacute;s restrictivos o diferentes a las normas federales. Consultar las normas estatales y locales referentes al vertido adecuado de este material.</p>',
            'imagen' => '036.JPG'
        ]);
        $this->updateDetalleElemento(36);
        
        DB::table('detalles')->insert([
            'elemento_id' => 37,
            'aplicacion' => '<ul><li>El rubidio se usa para hacer relojes at&oacute;micos a partir de rubidio de bajo costo. Estos relojes at&oacute;micos se utilizan para una variedad de prop&oacute;sitos tales como en los sistemas mundiales de navegaci&oacute;n (GPS y GLONASS) y dentro de la industria de las telecomunicaciones (estaciones base de telefon&iacute;a m&oacute;vil y estaciones de televisi&oacute;n).</li><li>Se utiliza en el enfriamiento por l&aacute;ser, que se utiliza para enfriar las muestras moleculares y at&oacute;micas.</li><li>Las sales de rubidio se utilizan para hacer ciertos tipos de productos de vidrio y cer&aacute;mica.</li></ul>',
            'impacto' => '<p>No se han documentado efectos ambientales negativos del rubidio.</p>',
            'imagen' => '037.JPG'
        ]);
        $this->updateDetalleElemento(37);

        DB::table('detalles')->insert([
            'elemento_id' => 38,
            'aplicacion' => '<ul><li>El cristal de la pantalla frontal de los dispositivos CRT contiene compuestos de estroncio para prevenir la emisi&oacute;n de rayos-X. Este es el uso m&aacute;s com&uacute;n de estroncio.</li><li>Con frecuencia al estroncio se le a&ntilde;ade peque&ntilde;as cantidades de aluminio y silicio creando aleaciones para mejorar su fuerza.</li><li>El AJ62 es una aleaci&oacute;n resistente usada en la industria del autom&oacute;vil que contiene un 2 por ciento de estroncio.</li></ul>',
            'impacto' => '<p>El Estroncio en su estado elemental ocurre de forma natural en muchos compartimentos del medio ambiente, incluyendo rocas, suelo, agua y aire. Los compuestos del estroncio pueden moverse a trav&eacute;s del medio ambiente con bastante facilidad, porque mucho de los compuestos son soluble en agua.</p><p>El Estroncio est&aacute; siempre presente en el aire como polvo, en un cierto nivel. Las concentraciones de Estroncio en el aire son incrementadas por las actividades humanas, como e la combusti&oacute;n de carb&oacute;n y aceite. Part&iacute;culas de polvo que contienen Estroncio precipitar&aacute;n en las aguas superficiales, en el suelo o en las superficies de las plantas en alg&uacute;n lugar. Cuando las part&iacute;culas no precipitan estas volver&aacute;n a caer a la tierra coando llueve o cuando nieve. Todo el Estroncio eventualmente terminar&aacute; en los suelos o en los fondos de las masas de aguas, donde se mezcla con el Estroncio que est&aacute; ya presente. El Estroncio puede terminar en el agua a trav&eacute;s de suelos y a trav&eacute;s de la erosi&oacute;n de rocas. S&oacute;lo una peque&ntilde;a parte del Estroncio en agua procede de part&iacute;culas de polvo del aire. La mayor parte del Estroncio en agua est&aacute; disuelto, pero algo de &eacute;l est&aacute; suspendido, causando turbidez de agua en algunos puntos. No mucho Estroncio termina en el agua potable.</p>',
            'imagen' => '038.JPG'
        ]);
        $this->updateDetalleElemento(38);

        DB::table('detalles')->insert([
            'elemento_id' => 39,
            'aplicacion' => '<ul><li>El &oacute;xido de itrio es un componente del f&oacute;sforo usado ​​para producir el color rojo en los tubos de rayos cat&oacute;dicos de las antiguas televisiones.</li><li>El &oacute;xido de itrio se utiliza en la cer&aacute;mica y el vidrio. El &oacute;xido de itrio tiene un alto punto de fusi&oacute;n e a&ntilde;ade resistencia al vidrio.</li><li>Los granates de itrio y hierro se utilizan para filtrar las ondas de los microondas y la transmisi&oacute;n y transducci&oacute;n de energ&iacute;a ac&uacute;stica.</li></ul>',
            'impacto' => '<p>El itrio es introducido en el ambiente en muchos lugares diferentes, mayoritariamente por industrias que procesan el petr&oacute;leo. Este puede tambi&eacute;n entrar en el ambiente cuando los equipos de las casas son tirados a las basuras. El itrio podr&aacute; gradualmente acumularse en suelos y agua y eventualmente podr&aacute; acumularse en humanos, animales y particulas del suelo. En animales acu&aacute;ticos el &Iacute;trio causa da&ntilde;o en las c&eacute;lulas de membranas, lo cual tiene bastantes influencias negativas en la reproducci&oacute;n y las funciones del sistema nervioso.</p>',
            'imagen' => '039.JPG'
        ]);
        $this->updateDetalleElemento(39);

        DB::table('detalles')->insert([
            'elemento_id' => 40,
            'aplicacion' => '<ul><li>Este metal se utiliza en la industria nuclear para el revestimiento de elementos combustibles ya que tiene una secci&oacute;n transversal de baja absorci&oacute;n de neutrones. El zirconio es muy resistente a la corrosi&oacute;n por &aacute;cidos y &aacute;lcalis del agua, por lo tanto, es ampliamente utilizado en la industria qu&iacute;mica, donde se emplean agentes corrosivos.</li><li>El metal se utiliza en aleaciones con acero para aplicaciones quir&uacute;rgicas. Este metal es superconductor a bajas temperaturas y las aleaciones de circonio y niobio se utilizan para fabricar imanes superconductores. Las aleaciones de zirconio con zinc se vuelven magn&eacute;ticas a temperaturas inferiores a -238 grados cent&iacute;grados. El zirconio se utiliza tambi&eacute;n en tubos de vac&iacute;o, l&aacute;mparas de flash para fotograf&iacute;a, en cebadores explosivos y en filamentos de las l&aacute;mparas.</li><li>El &oacute;xido de zirconio (zirc&oacute;n) tiene un &iacute;ndice de refracci&oacute;n alto. El &oacute;xido tambi&eacute;n se usa para crear crisoles de laboratorio resistentes a choques t&eacute;rmicos, para el revestimiento de los hornos metal&uacute;rgicos y por las industrias del vidrio y la cer&aacute;mica como un material refractario.</li></ul>',
            'impacto' => '<p>Es improbable que el zirconio presente un peligro para el medio ambiente.</p>',
            'imagen' => '040.JPG'
        ]);
        $this->updateDetalleElemento(40);

        DB::table('detalles')->insert([
            'elemento_id' => 41,
            'aplicacion' => '<p>Su uso principal es para alearlo con el acero inoxidable, al que proporciona mayor resistencia a la corrosi&oacute;n, particularmente a altas temperaturas.</p><p>Aleado con esta&ntilde;o, titanio o circonio, se utiliza en la fabricaci&oacute;n de superconductores y es un componente importante en muchas superaleaciones.</p><p>El niobio puro tiene caracter&iacute;sticas &oacute;ptimas como material de construcci&oacute;n para las plantas de energ&iacute;a nuclear.</p>',
            'impacto' => '<p>No se han documentado efectos ambientales negativos.</p>',
            'imagen' => '041.JPG'
        ]);
        $this->updateDetalleElemento(41);

        DB::table('detalles')->insert([
            'elemento_id' => 42,
            'aplicacion' => '<p>El metal se usa principalmente en aleaciones para aceros. Estas aleaciones resultan muy duras y resistentes a las altas presiones y temperaturas. Se utilizan para trabajos estructurales, en aeron&aacute;utica y en la industria automovil&iacute;stica.</p><p>El molibdenno se emplea como electrodo en hornos de vidrio, moldes y &uacute;tiles de trabajo con fundidos de colada a presi&oacute;n, contactores el&eacute;ctricos, herramientas de todo tipo, h&eacute;lices, l&aacute;mparas el&eacute;ctricas y tubos electr&oacute;nicos.</p><p>Tambi&eacute;n se emplea como pigmento en la preparaci&oacute;n de pinturas y como lubricante para altas temperaturas.</p>',
            'impacto' => '<p>No se han documentado efectos negativos del molibdeno sobre el medio ambiente.</p>',
            'imagen' => '042.JPG'
        ]);
        $this->updateDetalleElemento(42);

        DB::table('detalles')->insert([
            'elemento_id' => 43,
            'aplicacion' => '<p>El Tc, con 6 horas de per&iacute;odo, se usa en las t&eacute;cnicas escintigr&aacute;ficas en medicina nuclear como trazador por su corto per&iacute;odo y su facilidad para fijarse en los tejidos. Adem&aacute;s de los usos m&eacute;dicos, los pertecnatos se utilizan como inhibidores de la corrosi&oacute;n en las aleaciones.</p>',
            'impacto' => '<p>No se han documentado efectos ambientales negativos del tecnecio.</p>',
            'imagen' => '043.JPG'
        ]);
        $this->updateDetalleElemento(43);

        DB::table('detalles')->insert([
            'elemento_id' => 44,
            'aplicacion' => '<p>El metal puro es m&aacute;s resistente que el platino al ataque de los &aacute;cidos, incluso al agua regia.</p><p>Se usa en aleaciones con el platino y el paladio para darles mayor dureza. Estas aleaciones se emplean en la fabricaci&oacute;n de contactos el&eacute;ctricos de resistencia elevada, en odontolog&iacute;a, plumillas para escribir, joyas, ejes y pivotes antimagn&eacute;ticos para relojes e instrumentos de precisi&oacute;n y restauraciones met&aacute;lizas sobre porcelana.</p><p>La aleaci&oacute;n rutenio-molibdeno es superconductora a temperaturas del orden de -263&ordm;C.</p>',
            'impacto' => '<p>No se han documentado efectos negativos del rutenio sobre el medio ambiente.</p>',
            'imagen' => '044.JPG'
        ]);
        $this->updateDetalleElemento(44);

        DB::table('detalles')->insert([
            'elemento_id' => 45,
            'aplicacion' => '<p>Se usa principalmente en aleaciones con paladio o platino para termopares para la medida de altas temperaturas, resistencias de hornos el&eacute;ctricos y como aditivo para la fibra de vidrio.</p><p>Tambi&eacute;n se usa como recubrimiento electrol&iacute;tico de otros metales y en los procesos de acabado en joyer&iacute;a y utensilios de plata.</p><p>Tiene usos como catalizador por ejemplo en la producci&oacute;n de &aacute;cido n&iacute;trico.</p><p>El metal finamente dividido con alg&uacute;n contenido de &oacute;xido y de hidruro se conoce como negro de rodio y se utiliza como catalizador y como pigmento negro para la cer&aacute;mica.</p>',
            'impacto' => '<p>No vender el material al medio ambiente sin los adecuados permisos gubernamentales.</p>',
            'imagen' => '045.JPG'
        ]);
        $this->updateDetalleElemento(45);

        DB::table('detalles')->insert([
            'elemento_id' => 46,
            'aplicacion' => '<p>El uso m&aacute;s importante del metal es en el campo de las comunicaciones donde se usa, aleado con Ag y Cu, en la fabricaci&oacute;n de rel&eacute;s y para contactos el&eacute;ctricos especiales sometidos a la acci&oacute;n de la corrosi&oacute;n o a esfuerzos mec&aacute;nicos importantes.</p><p>Se usa como catalizador en algunos procesos como la hidrogenaci&oacute;n de alcanos. Aleaciones de paladio se usan en odontolog&iacute;a para pr&oacute;tesis dentales, para resistencias el&eacute;ctricas de precisi&oacute;n, para resortes no magn&eacute;ticos en relojer&iacute;a, para cubrir espejos especiales, para la soldadura del acero inoxidable y como protecci&oacute;n contra la corrosi&oacute;n.</p><p>Tambi&eacute;n se usa como oro blanco en joyer&iacute;a (aleado con oro).</p>',
            'impacto' => '<p>No vender el material al medio ambiente sin los adecuados permisos gubernamentales.</p>',
            'imagen' => '046.JPG'
        ]);
        $this->updateDetalleElemento(46);

        DB::table('detalles')->insert([
            'elemento_id' => 47,
            'aplicacion' => '<p>Todos conocemos el uso de la plata en joyer&iacute;a y decoraci&oacute;n y como moneda. Su resistencia a los agentes corrosivos la hace id&oacute;nea para la fabricaci&oacute;n de algunos recipientes especiales o como recubrimiento de otros metales.</p><p>La plata se usa tambi&eacute;n para fabricar componentes electr&oacute;nicos y el&eacute;ctricos y para cable de semiconductores de alta velocidad por su buena conductividad.</p><p>Se alea com&uacute;nmente con cantidades peque&ntilde;as de otros metales para hacerlos m&aacute;s duros y m&aacute;s duraderos, as&iacute; sus aleaciones con plomo o talio se usan como recubrimiento en algunas piezas para la industria aeron&aacute;utica.</p><p>En algunos usos tradicionales como incrustaciones decorativas o recubrimiento del vidrio para la fabricaci&oacute;n de espejos ha sido sustituida por el aluminio.</p><p>La plata coloidal, soluciones diluidas de nitrato de plata (AgNO<sub>3 </sub>), se usa en medicina como antis&eacute;ptico y bactericida.</p><p>Los haluros de plata son sensibles a la luz y se usan en emulsiones para placas y pel&iacute;culas fotogr&aacute;ficas.</p><p>Una aplicaci&oacute;n menos conocida y frecuente de los haluros de plata, principalmente del yoduro, es su dispersi&oacute;n en las nubes para producir lluvia artificialmente.</p><p>En algunos procesos tambi&eacute;n se utiliza la plata como catalizador.</p>',
            'impacto' => '<p>Niveles ambientales, efectos en los organismos en el laboratorio y en el campo Medio acu&aacute;tico: toxicidad de los componentes de la plata para especies cu&aacute;ticas, ambiente terrestre evaluaci&oacute;n de los efectos.</p>',
            'imagen' => '047.JPG'
        ]);
        $this->updateDetalleElemento(47);

        DB::table('detalles')->insert([
            'elemento_id' => 48,
            'aplicacion' => '<p>El cadmio se deposita electrol&iacute;ticamente sobre metales, principalmente hierro o el acero, sobre los que forma un revestimiento qu&iacute;micamente resistente.</p><p>Se alea con el cobre para los cables del tendido el&eacute;ctrico.</p><p>El cadmio rebaja el punto de fusi&oacute;n de los metales con los que se alea; se usa con Pb, Sn y Bi en la fabricaci&oacute;n de fusibles para sistemas autom&aacute;ticos, alarmas contra incendios y fusibles el&eacute;ctricos.</p><p>Un aleaci&oacute;n de cadmio con Pb y Zn se usa como soldadura para el hierro.</p><p>Se usa tambi&eacute;n para las barras de control en plantas el&eacute;ctricas nucleares por su capacidad de absorci&oacute;n de neutrones lentos y como blindaje contra neutrones en aparatos de medida.</p><p>Las sales de cadmio se usan en fotograf&iacute;a y en la fabricaci&oacute;n de fuegos de artificio, pinturas fluorescentes, vidrios y porcelana.</p><p>El sulfuro de cadmio es empleado en un tipo de c&eacute;lula fotovoltaica, y las pilas recargables de n&iacute;quel - cadmio son cada vez m&aacute;s usadas.</p><p>El sulfato de cadmio se usa en medicina como astringente. El sulfuro (CdS) y seleniuro (CdSe) se utilizan como pigmento.</p>',
            'impacto' => '<p>De forma natural grandes cantidades de Cadmio son liberadas al ambiente, sobre 25.000 toneladas al a&ntilde;o. La mitad de este Cadmio es liberado en los r&iacute;os a trav&eacute;s de la descomposici&oacute;n de rocas y alg&uacute;n Cadmio es liberado al aire a trav&eacute;s de fuegos forestales y volcanes. El resto del Cadmio es liberado por las actividades humanas, como es la manufacturaci&oacute;n.</p><p>Las aguas residuales con Cadmio procedentes de las industrias mayoritariamente termian en suelos. Las causas de estas corrientes de residuos son por ejemplo la producci&oacute;n de Zinc, minerales de fosfato y las bioindustrias del esti&eacute;rcol. El Cadmio de las corrientes residuales pueden tambi&eacute;n entrar en el aire a trav&eacute;s de la quema de residuos urbanos y de la quema de combustibles f&oacute;siles. Debido a las regulaciones s&oacute;lo una peque&ntilde;a cantidad de Cadmio entra ahora en el agua a trav&eacute;s del vertido de aguas residuales de casas o industrias.</p><p>Otra fuente importante de emisi&oacute;n de Cadmio es la producci&oacute;n de fertilizantes fosfatados artificiales. Parte del Cadmio terminar&aacute; en el suelo despu&eacute;s de que el fertilizante es aplicado en las granjas y el resto del Cadmio terminar&aacute; en las aguas superficiales cuando los residuos del fertilizante es vertido por las compa&ntilde;&iacute;as productoras.</p>',
            'imagen' => '048.JPG'
        ]);
        $this->updateDetalleElemento(48);

        DB::table('detalles')->insert([
            'elemento_id' => 49,
            'aplicacion' => '<p>Se utiliza como recubrimiento electrol&iacute;tico contra el desgaste en piezas de aleaciones antifricci&oacute;n.</p><p>Se usa tambi&eacute;n en aleaciones para pr&oacute;tesis dentales y motores el&eacute;ctricos, en varillas de control de reactores nucleares.</p><p>Algunas aleaciones de indio tienen un bajo punto de fusi&oacute;n. Por ejemplo, una aleaci&oacute;n con un 24% de indio y un 76% de galio es l&iacute;quida a la temperatura ambiente.</p><p>Ciertos compuestos de indio (InAs e InSb) tienen propiedades &uacute;nicas como semiconductores, por lo que se utilizan en la fabricaci&oacute;n de muchos componentes electr&oacute;nicos.</p><div>Los espejos hechos con indio son &oacute;pticamente tan buenos como los de plata, pero superan a &eacute;stos en la resistencia a la corrosi&oacute;n atmosf&eacute;rica.</div>',
            'impacto' => '<p>Los efectos ambientales de esta sustancia a&uacute;n no han sido investigados.</p>',
            'imagen' => '049.JPG'
        ]);
        $this->updateDetalleElemento(49);

        DB::table('detalles')->insert([
            'elemento_id' => 50,
            'aplicacion' => '<p>El esta&ntilde;o tiene usos ampliamente difundidos e interviene en centenares de procesos industriales.</p><p>En forma de pel&iacute;cula, se usa como revestimiento protector del cobre, del hierro y de los diversos metales usados en la fabricaci&oacute;n de latas de conserva, aunque dada la facilidad con que se ataca por algunos &aacute;cidos resulta no apto para la elaboraci&oacute;n de muchas frutas y otros alimentos.</p><p>Se utiliza para disminuir la fragilidad del vidrio, en el esta&ntilde;ado de hilos conductores y, aleado con niobio, en la preparaci&oacute;n de semiconductores.</p><p>Los compuestos de esta&ntilde;o se usan para fungicidas, tintes, dent&iacute;fricos (SnF<sub>2 </sub>) y pigmentos.</p><p>Se utiliza en la preparaci&oacute;n de importantes aleaciones como bronce (el esta&ntilde;o y cobre) y metal de tipograf&iacute;a (esta&ntilde;o, plomo y antimonio).</p><p>Se usa tambi&eacute;n, en aleaci&oacute;n con el titanio, en la industria aeroespacial y como ingrediente en algunos insecticidas.</p><p>El sulfuro est&aacute;nnico, conocido tambi&eacute;n como mosaico de oro, se usa en forma de polvo para dar aspecto met&aacute;lico a objetos de madera o de resina.</p>',
            'impacto' => '<p>El esta&ntilde;o como simple &aacute;tomo o en mol&eacute;cula no es muy t&oacute;xico para ning&uacute;n tipo de organismo. La forma t&oacute;xica es la forma org&aacute;nica. Los compuestos org&aacute;nicos del esta&ntilde;o pueden mantenerse en el medio ambiente durante largos periodos de tiempo. Son muy persistentes y no f&aacute;cilmente biodegradables. Los microorganismos tienen muchas dificultades en romper compuestos org&aacute;nicos del esta&ntilde;o que se han acumulado en aguas del suelo a lo largo de los a&ntilde;os. Las concentraciones de esta&ntilde;o org&aacute;nico todav&iacute;a aumentan debido a esto.</p><p>Los esta&ntilde;os org&aacute;nicos pueden dispersarse a trav&eacute;s de los sistemas acu&aacute;ticos cuando son absorbidos por part&iacute;culas residuales. Se sabe que causan mucho da&ntilde;o en los ecosistemas acu&aacute;ticos, ya que son muy t&oacute;xicos para los hongos, las algas y el fitoplancton. El fitoplancton es un eslab&oacute;n muy importante en el ecosistema acu&aacute;tico, ya que proporciona ox&iacute;geno al resto de los organismos acu&aacute;ticos. Tambi&eacute;n es una parte importante de la cadena alimenticia acu&aacute;tica.</p><p>Hay muchos tipos diferentes de esta&ntilde;o org&aacute;nico que pueden variar mucho en su toxicidad. Los esta&ntilde;os tribut&iacute;licos son los compuestos del esta&ntilde;o m&aacute;s t&oacute;xicos para los peces y los hongos, mientras que el esta&ntilde;o trifen&oacute;lico es mucho m&aacute;s t&oacute;xico para el fitoplancton.</p><p>Se sabe que los esta&ntilde;os org&aacute;nicos alteran el crecimiento, la reproducci&oacute;n, los sistemas enzim&aacute;ticos y los esquemas de alimentaci&oacute;n de los organismos acu&aacute;ticos. La exposici&oacute;n tiene lugar principalmente en la capa superior del agua, ya que es ah&iacute; donde los compuestos org&aacute;nicos del esta&ntilde;o se acumulan.</p>',
            'imagen' => '050.JPG'
        ]);
        $this->updateDetalleElemento(50);

        DB::table('detalles')->insert([
            'elemento_id' => 51,
            'aplicacion' => '<p>Se usa en semiconductores y en aleaciones como el metal de imprenta.</p><p>Sus compuestos se utilizan para fluoraci&oacute;n (SbF<sub>3 </sub>), cloraci&oacute;n (SbCl<sub>5 </sub>) y como retardantes de la llama en pl&aacute;sticos (Sb<sub>2</sub>O<sub>3</sub>), un doble tartrato de antimonio y potasio se emplea en medicina, el sulfuro de antimonio rojo, se usa en equipos de seguridad y en el vulcanizado del caucho.</p><p>Una mezcla de &oacute;xido y sulfuro de antimonio se utiliza como pigmento amarillo para el vidrio y la cer&aacute;mica.</p><p>El tricloruro de antimonio se emplea como c&aacute;ustico en medicina y como mordiente en tintorer&iacute;a.</p><p>El is&oacute;topo radiactivo Sb-124 se usa como trazador en los oleoductos.</p>',
            'impacto' => '<p>El antimonio se puede encontrar en los suelos, agua y aire en cantidades muy peque&ntilde;as. El antimonio contamina principalmente los suelos. Puede viajar grandes distancias con las aguas subterr&aacute;neas hacia otros lugares y aguas superficiales.</p><p>Las pruebas de laboratorio con ratas, conejos y conejillos de indias nos han mostrado que niveles relativamente altos de antimonio pueden matar a peque&ntilde;os animales. Las ratas pueden experimentar da&ntilde;os pulmonares, cardiacos, hep&aacute;ticos y renales previos a la muerte.</p><p>Los animales que respiran bajos niveles de antimonio durante un largo periodo de tiempo pueden experimentar irritaci&oacute;n ocular, p&eacute;rdida de pelo y da&ntilde;os pulmonares. Los perros pueden experimentar problemas cardiacos incluso cuando son expuestos a bajos niveles de antimonio. Los animales que respiran bajos niveles de antimonio durante un par de meses tambi&eacute;n pueden experimentar problemas de fertilidad.</p>',
            'imagen' => '051.JPG'
        ]);
        $this->updateDetalleElemento(51);

        DB::table('detalles')->insert([
            'elemento_id' => 52,
            'aplicacion' => '<p>Se usa en algunas aleaciones de cobre y plomo para aumentar la resistencia a la tensi&oacute;n, en la fabricaci&oacute;n de rectificadores y dispositivos termoel&eacute;ctricos y en la investigaci&oacute;n de semiconductores.</p><p>Junto con otras sustancias org&aacute;nicas, es empleado como agente vulcanizador en el procesamiento del caucho sint&eacute;tico y natural.</p><p>Se usa tambi&eacute;n para dar color azul al vidrio.</p><p>El teluro coloidal se usa como insecticida, germicida y fungicida.</p>',
            'impacto' => '<p>No es peligroso o es f&aacute;cilmente transformado en inocuo por procesos naturales.</p><p>Cuando es calentado para descomponerlo, el cloruro de teluro puede emitir vapores t&oacute;xicos de teluro y cloro.</p>',
            'imagen' => '052.JPG'
        ]);
        $this->updateDetalleElemento(52);

        DB::table('detalles')->insert([
            'elemento_id' => 53,
            'aplicacion' => '<p>Tiene usos muy importantes en medicina. Soluciones de yodo y alcohol y complejos de yodo se utilizan como antis&eacute;pticos y desinfectantes.</p><p>Is&oacute;topos radiactivos del yodo se usan en medicina nuclear como trazadores y en otros campos de investigaci&oacute;n.</p><p>Tambi&eacute;n tiene otros usos no m&eacute;dicos como preparaci&oacute;n de emulsiones fotogr&aacute;ficas, elaboraci&oacute;n de colorantes y l&aacute;mparas hal&oacute;genas.</p><p>El yoduro de plata dispersado en las nubes se utiliza para producir lluvia con fines agr&iacute;colas.</p>',
            'impacto' => '<p>El yodo puede encontrarse en el aire, el agua y el suelo de forma natural. Las fuentes m&aacute;s importantes de yodo natural son los oc&eacute;anos. El yodo en el aire se puede combinar con part&iacute;culas de agua y precipitar en el agua o los suelos. El yodo en los suelos se combina con materia org&aacute;nica y permanece en el mismo sitio por mucho tiempo. Las plantas que crecen en estos suelos pueden absorber yodo. EL ganado y otros animales absorber&aacute;n yodo cuando coman esas plantas.</p><p>El yodo en las aguas superficiales se evaporar&aacute; y volver&aacute; a entrar en el aire. Los humanos tambi&eacute;n a&ntilde;adimos yodo al aire, al quemar carb&oacute;n o fuel para producir energ&iacute;a. Pero la cantidad de yodo que entra en el aire debido a la actividad humana es bastante peque&ntilde;a comparada a la cantidad que se evapora de los oc&eacute;anos.</p><p>El yodo puede ser radioactivo. Los is&oacute;topos radioactivos se forman de manera natural durante reacciones qu&iacute;micas en la atm&oacute;sfera.</p>',
            'imagen' => '053.JPG'
        ]);
        $this->updateDetalleElemento(53);

        DB::table('detalles')->insert([
            'elemento_id' => 54,
            'aplicacion' => '<p>El xen&oacute;n se usa principalmente en tubos de descarga, luces de destello (estroboscopios) y en algunos procesos nucleares.</p>',
            'impacto' => '<p>El xen&oacute;n es un gas atmosf&eacute;rico raro y como tal no es t&oacute;xico y es qu&iacute;micamente inerte. Su temperatura extremadamente fr&iacute;a (-244<sup>o</sup>C) congelar&aacute; a los organismos al contacto, pero no se anticipan efectos ecol&oacute;gicos a largo plazo.</p><p><em>Consideraciones para su eliminaci&oacute;n:</em>&nbsp;Cuando su eliminaci&oacute;n se hace necesaria, verter el gas lentamente en una zona exterior bien ventilada y alejada de zonas de trabajo y de tomas de aire de edificios. No verter ning&uacute;n gas residual en cilindros de gas comprimido. Devolver los cilindros al proveedor con la presi&oacute;n residual y la v&aacute;lvula del cilindro fuertemente cerrada. Se ha de tener en cuenta que los requerimientos estatales y locales para le eliminaci&oacute;n de residuos pueden ser m&aacute;s restrictivos o diferentes a las regulaciones federales. Se deben consultar las regulaciones locales relacionadas con la adecuada eliminaci&oacute;n de este material.</p>',
            'imagen' => '054.JPG'
        ]);
        $this->updateDetalleElemento(54);

        DB::table('detalles')->insert([
            'elemento_id' => 55,
            'aplicacion' => '<p>Se usa como un agente reductor poderoso y en la fabricaci&oacute;n de c&eacute;lulas fotovoltaicas.</p><p>El Cs-137 se usa en la terapia de rayos gamma.</p><p>El Cs-133 se usa en el reloj at&oacute;mico.</p>',
            'impacto' => '<p>El cesio ocurre de forma natural en la naturaleza mayormente por erosi&oacute;n y desgastado de rocas y minerales. Es tambi&eacute;n liberado al aire, al agua y al suelo a trav&eacute;s de la miner&iacute;a y f&aacute;bricas de minerales. Los is&oacute;topos radiactivos del Cesio pueden s&oacute;lo ser disminuidos en su concentraci&oacute;n a trav&eacute;s de la desintergraci&oacute;n radiactiva. El Cesio no radiactivo puede tambi&eacute;n ser destruido cuando entra en el ambiente o reacciona con otros compuestos en mol&eacute;culas muy espec&iacute;ficas.</p><p>Tanto el Cesio radiactivo como el estable actu&aacute;n de la misma manera qu&iacute;mica en los cuerpos de los humanos y los animales.</p><p>El Cesio en el aire puede viajar largas distancias antes de precipitar en la tierra. En el agua y en el suelo la mayor&iacute;a de los compuestos del Cesio son muy solubles en agua</p>',
            'imagen' => '055.JPG'
        ]);
        $this->updateDetalleElemento(55);

        DB::table('detalles')->insert([
            'elemento_id' => 56,
            'aplicacion' => '<p>Como metal tiene pocas aplicaciones pr&aacute;cticas, aunque que se use a veces para cubrir conductores el&eacute;ctricos en aparatos electr&oacute;nicos y en sistemas de ignici&oacute;n de autom&oacute;viles.</p><p>El sulfato de bario purificado se usa en la radiolog&iacute;a para diagnosticar problemas gastrointestinales. El paciente ingiere una papilla de sulfato de bario que es opaco a los rayos X y permite observar las zonas de bloqueo en el proceso digestivo.</p><p>El nitrato de bario se usa en pirotecnia para dar color verde. Tambi&eacute;n se utiliza en pinturas, vidrios, como componente de algunos raticidas y para extraer americio a partir de AmF<sub>3 </sub>.</p>',
            'impacto' => '<p>El Bario es un metal plateado-blancuzco que puede ser encontrado en el medioambiente, donde existe de forma natural. Aparece combinado con otros elementos qu&iacute;micos, como el azufre, carb&oacute;n u ox&iacute;geno.</p><p>Los compuestos del Bario son usado por las industrias del aceite y gas para hacer lubricantes para taladros. Los compuestos del Bario son tambi&eacute;n usado para hacer pinturas, bricks, azulejos, vidrio y gomas.</p><p>Debido al uso extensivo del Bario en las industrias, el Bario ha sido liberado al ambiente en grandes cantidades. Como resultado las concentraciones de Bario en el aire, agua y suelo pueden ser mayores que las concentraciones que ocurren de forma natural en muchos lugares. El Bario es liberado al aire por las minas, proceso de refinado, y durante la producci&oacute;n de compuestos de Bario. Puede entrar tambi&eacute;n al aire durante la combusti&oacute;n del carb&oacute;n y aceites.</p>',
            'imagen' => '056.JPG'
        ]);
        $this->updateDetalleElemento(56);

        DB::table('detalles')->insert([
            'elemento_id' => 57,
            'aplicacion' => '<p>Se usa en aleaciones con el aluminio y el magnesio, as&iacute; como tambi&eacute;n con el acero.</p><p>El &oacute;xido de lantano se utiliza para fabricar ciertos tipos de vidrios &oacute;pticos.</p><p>El lantano impuro se utiliza para fabricar piedras para encendedores.</p>',
            'impacto' => '<p>El Lantano es introducido en el ambiente en muchos lugares diferentes, mayoritariamente por industrias que procesan el petr&oacute;leo. Este puede tambi&eacute;n entrar en el ambiente cuando los equipos de las casas son tirados a las basuras. El Lantano podr&aacute; gradualmente acumularse en suelos y agua y eventualmente podr&aacute; acumularse en humanos, animales y particulas del suelo. En animales acu&aacute;ticos el Lantano causa da&ntilde;o en las c&eacute;lulas de membranas, lo cual tiene bastantes influencias negativas en la reproducci&oacute;n y las funciones del sistema nervioso.</p>',
            'imagen' => '057.JPG'
        ]);
        $this->updateDetalleElemento(57);

        DB::table('detalles')->insert([
            'elemento_id' => 58,
            'aplicacion' => '<p>Se utiliza en la preparaci&oacute;n de aleaciones para piedras de encendedor.</p><p>Los compuestos de cerio se emplean en la fabricaci&oacute;n de vidrios, cer&aacute;micas, filamentos y c&eacute;lulas fotoel&eacute;ctricas.</p><p>El nitrato ceroso se usa como medicamento en el tratamiento de v&oacute;mitos y mareos cr&oacute;nicos.</p><p>El sulfato c&eacute;rico se utiliza como agente oxidante en qu&iacute;mica anal&iacute;tica, en fotograf&iacute;a y en hornos autolimpiables.</p>',
            'impacto' => '<p>El cerio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El cerio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '058.JPG'
        ]);
        $this->updateDetalleElemento(58);

        DB::table('detalles')->insert([
            'elemento_id' => 59,
            'aplicacion' => '<p>Se emplea en aleaciones con magnesio, en aleaciones para la fabricaci&oacute;n de piedras de encendedor, como desoxidante en tubos de vac&iacute;o.</p><p>Tambi&eacute;n se utiliza como colorante en la industria del vidrio y la cer&aacute;mica. Una mezcla de praseodimio y neodimio se usa en la fabricaci&oacute;n de vidrios filtrantes de la luz amarilla para protegerse de la intensa luz en las soldaduras.</p>',
            'impacto' => '<p>El praseodimio se vierte al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El praseodimio se acumular&aacute; gradualmente en el suelo y en las aguas del suelo y esto llevar&aacute; finalmente al incremento de la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p>',
            'imagen' => '059.JPG'
        ]);
        $this->updateDetalleElemento(59);

        DB::table('detalles')->insert([
            'elemento_id' => 60,
            'aplicacion' => '<p>Se utiliza para la fabricaci&oacute;n de vidrios especiales como filtros de infrarrojo.</p><p>Una mezcla de praseodimio y neodimio se usa en la fabricaci&oacute;n de vidrios filtrantes de la luz amarilla para protegerse de la intensa luz en las soldaduras.</p><p>Tambi&eacute;n se usa como colorante en vidrios, cer&aacute;micas y barnices, en la fabricaci&oacute;n de algunos componentes electr&oacute;nicos (especialmente condensadores) y en algunas aleaciones para piedras de encendedor.</p><p>El &oacute;xido del metal, Nd<sub>2 </sub>O<sub>3</sub>, se usa en los tubos de televisi&oacute;n para aumentar el contraste y en l&aacute;seres.</p>',
            'impacto' => '<p>El neodimio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El neodimio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '060.JPG'
        ]);
        $this->updateDetalleElemento(60);

        DB::table('detalles')->insert([
            'elemento_id' => 61,
            'aplicacion' => '<p>Se usa en para preparar pinturas luminiscentes para se&ntilde;alizaciones de seguridad.</p><p>El metal se ha usado en pilas at&oacute;micas especiales y como fuente de part&iacute;culas beta en indicadores de espesor.</p><p>Por sus caracter&iacute;sticas puede ser utilizado como fuente para aparatos port&aacute;tiles de radiograf&iacute;a y como fuente auxiliar de energ&iacute;a en sat&eacute;lites y sondas espaciales.</p>',
            'impacto' => '<p>El prometio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El prometio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '061.JPG'
        ]);
        $this->updateDetalleElemento(61);

        DB::table('detalles')->insert([
            'elemento_id' => 62,
            'aplicacion' => '<p>El uso principal es la elaboraci&oacute;n de imanes permanentes, siendo el SmCoS<sub>5 </sub> la sustancia con mayor resistencia a la desmagnetizaci&oacute;n conocida hasta el momento.</p><p>El samario se usa para dopar los cristales de fluoruro de calcio para uso &oacute;ptico en m&aacute;seres y l&aacute;seres.</p><p>En la industria cinematogr&aacute;fica se usa el samario, conjuntamente con otras tierras raras, en algunos dispositivos de iluminaci&oacute;n.</p><p>Los compuestos se usan para algunas cer&aacute;micas y vidrios &oacute;pticos especiales opacos a la radiaci&oacute;n infrarroja.</p><p>El &oacute;xido de samario se usa en las varillas de control de algunos reactores nucleares y como catalizador en la deshidrataci&oacute;n y deshidrogenaci&oacute;n del alcohol et&iacute;lico.</p>',
            'impacto' => '<p>El samario es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El samario se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '062.JPG'
        ]);
        $this->updateDetalleElemento(62);

        DB::table('detalles')->insert([
            'elemento_id' => 63,
            'aplicacion' => '<p>Se usa para absorber neutrones en reactores nucleares y algunos de sus compuestos, como el vanadato de itrio y europio, se utilizan en los tubos de imagen de los televisores en color porque el europio produce fosforescencia roja al ser bombardeado con electrones.</p><p>El dopaje de ciertos tipos de pl&aacute;sticos con europio permite su uso como material l&aacute;ser.</p>',
            'impacto' => '<p>El europio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El europio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '063.JPG'
        ]);
        $this->updateDetalleElemento(63);

        DB::table('detalles')->insert([
            'elemento_id' => 64,
            'aplicacion' => '<p>Como la mayor parte de las tierras raras se usa en aleaciones para la industria electr&oacute;nica, sobre todo para condensadores y m&aacute;seres.</p><p>Tambi&eacute;n se emplea en hornos de alta temperatura y en aparatos para el enfriamiento magn&eacute;tico.</p><p>Se utiliza como componente de las varillas de control en reactores nucleares por su gran capacidad para retener los neutrones.</p><p>Los compuestos se usan en la cat&aacute;lisis de polimerizaci&oacute;n de hidrocarburos, en la fabricaci&oacute;n de tubos de imagen para los televisores a color y en dispositivos para microondas.</p><p>Se ha encontrado que una proporci&oacute;n aproximada del 1% de gadolinio mejora las propiedades del hierro y el cromo haci&eacute;ndolos m&aacute;s resistentes a la oxidaci&oacute;n y a las temperaturas elevadas.</p>',
            'impacto' => '<p>El gadolinio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El gadolinio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '064.JPG'
        ]);
        $this->updateDetalleElemento(64);

        DB::table('detalles')->insert([
            'elemento_id' => 65,
            'aplicacion' => '<p>Tiene aplicaci&oacute;n en aleaciones, materiales refractarios y aparatos electr&oacute;nicos. El borato de sodio y terbio se usa en dispositivos transistorizados, el &oacute;xido, Tb<sub>2</sub>O<sub>3 </sub>, se usa como activador del verde en los tubos de imagen de televisores en color.</p><p>Puede usarse junto con el ZrO<sub>2 </sub> como estabilizador en las c&eacute;lulas de combustible que operan a temperatura elevada.</p>',
            'impacto' => '<p>El terbio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El terbio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '065.JPG'
        ]);
        $this->updateDetalleElemento(65);

        DB::table('detalles')->insert([
            'elemento_id' => 66,
            'aplicacion' => '<p>Aunque no se han encontrado a&uacute;n muchas aplicaciones, su facilidad para la absorci&oacute;n de neutrones y su alto punto de fusi&oacute;n sugieren usos del elemento en dispositivos de control del flujo de neutrones y para aleaciones con aceros inoxidables especiales.</p><p>En combinaci&oacute;n con el vanadio y otras tierras raras, se utiliza en la fabricaci&oacute;n de materiales para l&aacute;seres y para tubos de imagen en los televisores en color (Dy<sub>2 </sub>O<sub>3 </sub>).</p><p>Algunos compuestos mixtos de disprosio-cadmio se han utilizado como fuentes de radiaci&oacute;n infrarroja para estudiar algunas reacciones qu&iacute;micas.</p><p>Un &oacute;xido de disprosio-n&iacute;quel se utiliza para la fabricaci&oacute;n de varillas de control para los reactores nucleares ya que &eacute;stas son poco sensibles a las variaciones de volumen tras bombardeos prolongados con neutrones.</p>',
            'impacto' => '<p>El disprosio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El disprosio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '066.JPG'
        ]);
        $this->updateDetalleElemento(66);

        DB::table('detalles')->insert([
            'elemento_id' => 67,
            'aplicacion' => '<p>Tiene pocas aplicaciones pr&aacute;cticas, aunque se ha usado como catalizador en reacciones qu&iacute;micas industriales y tambi&eacute;n para la fabricaci&oacute;n de algunos dispositivos electr&oacute;nicos.</p>',
            'impacto' => '<p>El holmio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El holmio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '067.JPG'
        ]);
        $this->updateDetalleElemento(67);

        DB::table('detalles')->insert([
            'elemento_id' => 68,
            'aplicacion' => '<p>Se usa para mejorar la maleabilidad del vanadio y para incrementar la absorci&oacute;n infrarroja en el vidrio.</p><p>Tiene aplicaci&oacute;n como amplificador de las se&ntilde;ales d&eacute;biles en la tecnolog&iacute;a de la fibra &oacute;ptica y se usa en la fabricaci&oacute;n de l&aacute;seres.</p><p>El &oacute;xido de erbio (III) se usa para dar al vidrio un tono rosado y tambi&eacute;n como colorante para barnices y esmaltes.</p>',
            'impacto' => '<p>El erbio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El erbio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '068.JPG'
        ]);
        $this->updateDetalleElemento(68);

        DB::table('detalles')->insert([
            'elemento_id' => 69,
            'aplicacion' => '<p>A causa de su elevado coste y su dificultosa extracci&oacute;n no se le han encontrado muchas aplicaciones.</p><p>El <sup>169</sup>Tm, tras ser bombardeado con neutrones para hacerlo radiactivo, y algunos de sus compuestos se utilizan como fuente de rayos X para las m&aacute;quinas port&aacute;tiles de radiograf&iacute;a.</p><div>El tulio natural puede tener aplicaci&oacute;n en la fabricaci&oacute;n de materiales cer&aacute;micos con propiedades magn&eacute;ticas para los equipos de microondas y se ha planteado la posibilidad de utilizar el <sup>171</sup>Tm como fuente de energ&iacute;a.</div>',
            'impacto' => '<p>El tulio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El tulio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '069.JPG'
        ]);
        $this->updateDetalleElemento(69);

        DB::table('detalles')->insert([
            'elemento_id' => 70,
            'aplicacion' => '<p>Tiene aplicaciones potenciales en aleaciones, electr&oacute;nica, y materiales magn&eacute;ticos. Se han conseguido gemas sint&eacute;ticas de silicatos de iterbio.</p>',
            'impacto' => '<p>El iterbio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El iterbio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p>',
            'imagen' => '070.JPG'
        ]);
        $this->updateDetalleElemento(70);

        DB::table('detalles')->insert([
            'elemento_id' => 71,
            'aplicacion' => '<p>Se usa para el cracking catal&iacute;tico y en reacciones de hidrogenaci&oacute;n, alquilaci&oacute;n y polimerizaci&oacute;n. Encuentra tambi&eacute;n aplicaciones como captador de impurezas en la industria metal&uacute;rgica.</p><p>Si el Lu se irradia con neutrones se convierte en una fuente pura de radiaci&oacute;n beta.</p>',
            'impacto' => '<p>El lutecio es vertido al medio ambiente en muchos lugares diferentes, principalmente por industrias productoras de petr&oacute;leo. Tambi&eacute;n puede entrar en el medio ambiente cuando se tiran los equipos dom&eacute;sticos. El lutecio se acumular&aacute; gradualmente en los suelos y en el agua de los suelos y esto llevar&aacute; finalmente a incrementar la concentraci&oacute;n en humanos, animales y part&iacute;culas del suelo.</p><p>En los animales acu&aacute;ticos provoca da&ntilde;os a las membranas celulares, lo que tiene varias influencias negativas en la reproducci&oacute;n y en las funciones del sistema nervioso.</p>',
            'imagen' => '071.JPG'
        ]);
        $this->updateDetalleElemento(71);

        DB::table('detalles')->insert([
            'elemento_id' => 72,
            'aplicacion' => '<p>El hafnio se usa en la fabricaci&oacute;n de filamentos el&eacute;ctricos en aleaci&oacute;n con wolframio y t&aacute;ntalo.</p><p>Por su resistencia a las altas temperaturas, se usa con el circonio como material estructural en las plantas nucleares de energ&iacute;a.</p><p>Se utiliza en la fabricaci&oacute;n de barras de control para reactores nucleares, por su capacidad de absorci&oacute;n de neutrones.</p>',
            'impacto' => '<p><em>Efectos en los animales:</em>&nbsp;Son escasos los datos disponibles acerca de la toxicidad del hafnio met&aacute;lico o su polvo. Los estudio con animales indican que los compuestos del hafnio provocan irritaciones de los ojos, la piel y la membrana mucosa, y da&ntilde;os hep&aacute;ticos. La LD 50 oral del tetracloruro de hafnio en ratas es de 2,362 mg/kg, y la LD 50 intraperitoneal en ratones para el oxicloruro de hafnio es de 112 mg/k.</p><p>(LD 50: Dosis Letal 50. Dosis individual de una sustancia que provoca la muerte del 50% de la poblaci&oacute;n animal debido a la exposici&oacute;n a la sustancia por cualquier v&iacute;a distinta a la inhalaci&oacute;n. Normalmente expresada como miligramos o gramos de material por kilogramo de peso del animal.)</p>',
            'imagen' => '072.JPG'
        ]);
        $this->updateDetalleElemento(72);

        DB::table('detalles')->insert([
            'elemento_id' => 73,
            'aplicacion' => '<p>Se usa para aleaciones resistentes a la corrosi&oacute;n en plantas qu&iacute;micas y en aeron&aacute;utica.</p><p>Debido a la tolerancia del tejido humano a este metal y de la resistencia de &eacute;ste a los &aacute;cidos corporales, se emplea en la fabricaci&oacute;n de instrumentos quir&uacute;rgicos y de piezas para la sujeci&oacute;n de fracturas &oacute;seas.</p><p>Es m&aacute;s resistente que el platino a muchos agentes corrosivos y por ello se utiliza, en lugar de &eacute;ste, en diversos materiales de laboratorio.</p><p>El carburo de t&aacute;ntalo se usa en herramientas para cortar acero. Se emplea tambi&eacute;n en la fabricaci&oacute;n de condensadores para circuitos electr&oacute;nicos y rectificadores de tensi&oacute;n en circuitos como por ejemplo en los sistemas de se&ntilde;alizaci&oacute;n ferroviaria.</p><p>El pent&oacute;xido de t&aacute;ntalo se utiliza para incrementar el poder de refracci&oacute;n en vidrios &oacute;pticos especiales.</p>',
            'impacto' => '<p>No verter el material al medio ambiente sin los adecuados permisos gubernamentales. Aislar los &oacute;xidos de tantalio para prevenir la poluci&oacute;n del medio.</p>',
            'imagen' => '073.JPG'
        ]);
        $this->updateDetalleElemento(73);

        DB::table('detalles')->insert([
            'elemento_id' => 74,
            'aplicacion' => '<p>En estado puro se utiliza en la fabricaci&oacute;n de filamentos para l&aacute;mparas el&eacute;ctricas, resistencias para hornos el&eacute;ctricos con atm&oacute;sfera reductoras o neutras, contactos el&eacute;ctricos para los distribuidores de autom&oacute;vil, antic&aacute;todos para tubos de rayos X y de televisi&oacute;n.</p><p>Tiene usos importantes en aleaciones para herramientas de corte a elevada velocidad (W<sub>2</sub>C), en la fabricaci&oacute;n de buj&iacute;as y en la preparaci&oacute;n de barnices (WO<sub>3</sub>) y mordientes en tintorer&iacute;a.</p><p>Los wolframatos de calcio y magnesio se utilizan en la fabricaci&oacute;n de tubos fluorescentes.</p><p>El carburo de wolframio, estable a temperaturas del orden de 500&ordm;C, tambi&eacute;n se usa como lubricante seco.</p>',
            'impacto' => '<p>No se espera que este producto sea peligroso para el medio ambiente. No existen datos espec&iacute;ficos relativos a la ecotoxicidad de este producto</p>',
            'imagen' => '074.JPG'
        ]);
        $this->updateDetalleElemento(74);

        DB::table('detalles')->insert([
            'elemento_id' => 75,
            'aplicacion' => '<p>Se usa en aleaciones para termopares (con el wolframio), varillas de soldadura, imanes criog&eacute;nicos y para filamentos el&eacute;ctricos y de flashes fotogr&aacute;ficos.</p><p>Se usa tambi&eacute;n como catalizador.</p>',
            'impacto' => '<p>No se ha encontrado informaci&oacute;n relativa a la toxicidad ambiental del renio.</p>',
            'imagen' => '075.JPG'
        ]);
        $this->updateDetalleElemento(75);

        DB::table('detalles')->insert([
            'elemento_id' => 76,
            'aplicacion' => '<p>Se utiliza como aditivo endurecedor en las aleaciones. Aleado con el platino, se usa para patrones de medida y peso.</p><p>El uso principal del metal est&aacute; en el aleaci&oacute;n osmiridio usada para la fabricaci&oacute;n de puntas, pivotes, plumillas, etc.</p><p>La disoluci&oacute;n de tetr&oacute;xido de osmio se utiliza como tintura para la observaci&oacute;n de tejidos al microscopio.</p>',
            'impacto' => '<p>No se ha encontrado informaci&oacute;n relativa a los efectos del osmio sobre el medio ambiente. Sin embargo, se espera que su ecotoxicidad sea muy baja debido a su fuerza como oxidante, lo que le hace ser f&aacute;cilmente convertido en su di&oacute;xido, una forma del metal que es razonablemente inocua.</p>',
            'imagen' => '076.JPG'
        ]);
        $this->updateDetalleElemento(76);

        DB::table('detalles')->insert([
            'elemento_id' => 77,
            'aplicacion' => '<p>Una aleaci&oacute;n especial con 10% de iridio y 90% de platino se usa como patr&oacute;n para la unidad de masa y de longitud que se conservan en Par&iacute;s. Esta aleaci&oacute;n es mucho m&aacute;s dura que el platino puro.</p><p>Aleaciones con un porcentaje algo mayor de iridio se usan para hacer instrumental de precisi&oacute;n, aparatos quir&uacute;rgicos, plumillas de estilogr&aacute;ficas, filamentos el&eacute;ctricos, pares termoel&eacute;ctricos, etc.</p><p>En la elaboraci&oacute;n del &aacute;cido n&iacute;trico se utiliza como catalizador.</p>',
            'impacto' => '<p>No permitir que el producto alcance las aguas del suelo, las reservas de agua o los sistemas de alcantarillado.</p>',
            'imagen' => '077.JPG'
        ]);
        $this->updateDetalleElemento(77);

        DB::table('detalles')->insert([
            'elemento_id' => 78,
            'aplicacion' => '<p>Debido a su inercia qu&iacute;mica y a su alto punto de fusi&oacute;n se utiliza, aleado normalmente con algo de iridio, en la construcci&oacute;n de aparatos de laboratorio como crisoles, platos de combusti&oacute;n, evaporadores, pinzas, etc.</p><p>Se utiliza en contactores, en elementos calefactores y pares termoel&eacute;ctricos para la medida de altas temperaturas.</p><p>Tiene usos en joyer&iacute;a y en medicina para la preparaci&oacute;n de algunas drogas antitumorales y en rellenos dentales.</p><p>La esponja de platino, platino finamente dividido, se utiliza como catalizador en procesos como la producci&oacute;n de &aacute;cido n&iacute;trico, &aacute;cido sulf&uacute;rico y metanal y en el cracking de hidrocarburos.</p>',
            'impacto' => '<p>La aplicaci&oacute;n del platino en productos met&aacute;licos no es conocido que cause muchos problemas ambientales, pero sabemos que causa problemas de salud serios en el lugar de trabajo. El Platino es emitido al aire a trav&eacute;s de los escapes de los coches que utilizan gasolina. Consecuentemente, los niveles de Platino en el aire pueden ser m&aacute;s altos en ciertas localizaciones, por ejemplo en garajes, en t&uacute;neles y en terrenos de empresas de camiones.</p><p>Los efectos del Platino sobre los animales y el ambiente posiblemente no hayn sido investigado todav&iacute;a extensamente. La &uacute;nica cosa que conocemos es que el Platino se acumular&aacute; en las raices de plantas despu&eacute;s de ser tomado. Si se come raices de plantas que contengan Platino puede hacer un da&ntilde;o en los animales y humanos, pero no est&aacute; todav&iacute;a claro. Los microorganismos pueden ser capaces de convertir las substancias de platino en sustancias m&aacute;s peligrosas en suelos, pero sobre este tema nosotros tambi&eacute;n tenemos poca informaci&oacute;n.</p>',
            'imagen' => '078.JPG'
        ]);
        $this->updateDetalleElemento(78);

        DB::table('detalles')->insert([
            'elemento_id' => 79,
            'aplicacion' => '<p>El oro es conocido por el hombre desde la prehistoria. Se valora no s&oacute;lo por su belleza sino por su resistencia a la corrosi&oacute;n y por su facilidad de manipulaci&oacute;n. Adem&aacute;s, el oro era m&aacute;s f&aacute;cil de obtener en forma pura que el resto de los metales.</p><p>A causa de su relativa escasez, el oro se usa como base para transacciones monetarias internacionales.</p><p>Se utiliza en monedas y joyas aleado con otros metales para darle la dureza necesaria. Tambi&eacute;n se usa en forma de pan de oro en el dorado y rotulado art&iacute;stico.</p><p>Tiene otros usos como colorante rojo para el vidrio, elaboraci&oacute;n de piezas dentales y en la industria electr&oacute;nica.</p><p>El is&oacute;topo Au-198 se usa como fuente de radiaci&oacute;n en la investigaci&oacute;n biol&oacute;gica y en el tratamiento del c&aacute;ncer.</p>',
            'impacto' => '<p>La ecotoxicidad del oro no ha sido evaluada. Sin embargo, se espera que la degradaci&oacute;n del oro bajo condiciones aerobias sea muy pobre y no hay evidencia que sugiera que pueda crear problemas ecol&oacute;gicos al ser vertido en el medio. Ya que el oro es insoluble, se cree que tiene caracter&iacute;sticas m&iacute;nimas de bioacumulaci&oacute;n y biodisponibilidad.</p>',
            'imagen' => '079.JPG'
        ]);
        $this->updateDetalleElemento(79);

        DB::table('detalles')->insert([
            'elemento_id' => 80,
            'aplicacion' => '<p>El mercurio se usa en term&oacute;metros porque el cambio en su volumen por cada grado de elevaci&oacute;n o disminuci&oacute;n de la temperatura es el mismo es decir, su coeficiente de dilataci&oacute;n es pr&aacute;cticamente constante.</p><p>Se utiliza tambi&eacute;n en otros tipos de aparatos cient&iacute;ficos como la bomba de vac&iacute;o, bar&oacute;metros y rectificadores e interruptores el&eacute;ctricos.</p><p>El vapor de mercurio se usa en l&aacute;mparas como fuente de rayos ultravioleta para usos dom&eacute;sticos y en procesos de esterilizaci&oacute;n del agua.</p><p>El mercurio se combina con todos los metales comunes, excepto hierro y platino, para formar aleaciones que se llaman amalgamas. Las amalgamas de cinc y sodio se utilizan como agentes reductores. La amalgama de esta&ntilde;o se usa todav&iacute;a como un relleno dental.</p><p>En un m&eacute;todo de extraer oro y plata desde sus minerales, los metales se combinan con el mercurio que se separa posteriormente por destilaci&oacute;n.</p><p>Otros usos son en insecticidas, colorantes y protectores para la madera.</p>',
            'impacto' => '<p>El Mercurio entra en el ambiente como resultado de la ruptura de minerales de rocas y suelos a trav&eacute;s de la exposici&oacute;n al viento y agua. La liberaci&oacute;n de Mercurio desde fuentes naturales ha permanecido en el mismo nivel a trav&eacute;s de los a&ntilde;os. Todav&iacute;a las concentraciones de Mercurio en el medioambiente est&aacute;n creciendo; esto es debido a la actividad humana.</p><p>La mayor&iacute;a del Mercurio liberado por las actividades humanas es liberado al aire, a trav&eacute;s de la quema de productos f&oacute;siles, miner&iacute;a, fundiciones y combusti&oacute;n de res&iacute;duos s&oacute;lidos</p><p>Aguas superficiales &aacute;cidas pueden contener significantes cantidades de Mercurio. Cuando los valores de pH est&aacute;n entre cinco y siete, las concentraciones de Mercurio en el agua se incrementar&aacute;n debido a la movilizaci&oacute;n del Mercurio en el suelo. El Mercurio que ha alcanzado las aguas superficiales o suelos los microorganismos pueden convertirlo en metil mercurio, una substancia que puede ser absorbida r&aacute;pidamente por la mayor&iacute;a de los organismos y es conocido que da&ntilde;a al sistema nervioso.</p>',
            'imagen' => '080.JPG'
        ]);
        $this->updateDetalleElemento(80);

        DB::table('detalles')->insert([
            'elemento_id' => 81,
            'aplicacion' => '<p>Aleado con mercurio forma una aleaci&oacute;n l&iacute;quida que congela a -60&ordm;C y se utiliza para term&oacute;metros de bajas temperaturas. El sulfato de talio, que es inoloro, ins&iacute;pido y muy venenoso, se usa para exterminar roedores e insectos.</p><p>El sulfuro de talio se emplea en la fabricaci&oacute;n de c&eacute;lulas fotoel&eacute;ctricas sesibles a las radiaciones infrarrojas.</p><p>En algunos sistemas militares de comunicaci&oacute;n se han utilizado los cristales de bromoyoduro de talio como transmisores de la radiaci&oacute;n infrarroja y los cristales de oxisulfuro de talio como receptores de la misma.</p>',
            'impacto' => '<p>El Talio es soluble en agua en parte y consecuentemente este puede esparcirse en el agua subterr&aacute;nea cuando los suelos contienen grandes cantidades de este. El Talio tambi&eacute;n puede esparcirse por la absorci&oacute;n del lodo. Hay indicadores de que el Talio es muy m&oacute;vil en los suelos.</p><p>El Talio es my t&oacute;xico par las ratas y es aplicado como raticida por esta cualidad. El Talio tambi&eacute;n tiene efectos negativos sobre las plantas, como el cambio de color en las hojas y la disminuci&oacute;n del crecimiento. Mam&iacute;feros, como los conejos, son suceptibles a los efectos t&oacute;xicos del Talio como los humanos.</p>',
            'imagen' => '081.JPG'
        ]);
        $this->updateDetalleElemento(81);

        DB::table('detalles')->insert([
            'elemento_id' => 82,
            'aplicacion' => '<p>Pr&aacute;cticamente la mitad de la producci&oacute;n de plomo se destina a la fabricaci&oacute;n de bater&iacute;as.</p><p>En algunos usos como aditivo para la gasolina y pigmento para tintas y pinturas est&aacute; siendo reemplazado por su car&aacute;cter venenoso y contaminante.</p><p>En otros como tuber&iacute;as, tipos de imprenta y recubrimientos de cables est&aacute; siendo sustituido por otros materiales de mejores cualidades.</p><p>No obstante se utiliza profusamente en revestimientos y enseres contra las radiaciones, para soldadura (aleado con Sn), en la insonorizaci&oacute;n de edificios, en la fabricaci&oacute;n de perdigones (aleado con As), etc.</p><p>Sus compuestos tienen tambi&eacute;n m&uacute;ltiples aplicaciones en la industria del vidrio como aditivo y colorante, en electr&oacute;nica para tubos de televisi&oacute;n, en tintes, barnices, pinturas anticorrosivas (minio), como estabilizantes en la industria de los pl&aacute;sticos, en algunos insecticidas, etc.</p>',
            'impacto' => '<p>El Plomo ocurre de forma natural en el ambiente, pero las mayores concentraciones que son encontradas en el ambiente son el resultado de las actividades humanas.</p><p>Debido a la aplicaci&oacute;n del plomo en gasolinas un ciclo no natural del Plomo tiene lugar. En los motores de los coches el Plomo es quemado, eso genera sales de Plomo (cloruros, bromuros, &oacute;xidos) se originar&aacute;n.</p><p>El Plomo se acumula en los cuerpos de los organismos acu&aacute;ticos y organismos del suelo. Estos experimentar&aacute;n efectos en su salud por envenenamiento por Plomo. Los efectos sobre la salud de los crust&aacute;ceos puede tener lugar incluso cuando s&oacute;lo hay peque&ntilde;as concentraciones de Plomo presente.</p><p>Las funciones en el fitoplancton pueden ser perturbados cuando interfiere con el Plomo. El fitoplancton es una fuente importante de producci&oacute;n de ox&iacute;geno en mares y muchos grandes animales marinos lo comen. Este es el porqu&eacute; nosotros ahora empezamos a preguntarnos si la contaminaci&oacute;n por Plomo puede influir en los balances globales.</p>',
            'imagen' => '082.JPG'
        ]);
        $this->updateDetalleElemento(82);

        DB::table('detalles')->insert([
            'elemento_id' => 83,
            'aplicacion' => '<p>Se utiliza principalmente en aleaciones de bajo punto de fusi&oacute;n y para la industria electr&oacute;nica.</p><p>Los compuestos se usan en cosm&eacute;ticos, barnices y medicinas (como el peptibismol BiONO<sub>3</sub>.H<sub>2</sub>O).</p>',
            'impacto' => '<p>El bismuto met&aacute;lico no se considera t&oacute;xico y presenta una amenaza m&iacute;nima para el medio ambiente. Los compuestos del bismuto son generalmente muy poco solubles pero deben ser manejados con cuidado, ya que solo se dispone de informaci&oacute;n limitada de sus efectos y destino en el medio ambiente.</p>',
            'imagen' => '083.JPG'
        ]);
        $this->updateDetalleElemento(83);

        DB::table('detalles')->insert([
            'elemento_id' => 84,
            'aplicacion' => '<p>Los is&oacute;topos del polonio son una buena fuente de radiaci&oacute;n alfa pura. Se usan en la investigaci&oacute;n nuclear con elementos tales como el berilio que emiten neutrones cuando son bombardeados con part&iacute;culas alfa.</p><p>Tambi&eacute;n se usa en dispositivos que ionizan el aire para eliminar acumulaci&oacute;n de cargas electrost&aacute;ticas en algunos procesos de fotograf&iacute;a e impresi&oacute;n.</p>',
            'impacto' => '<p>No se conocen bien las fuerzas ambientales y bioqu&iacute;micas que pueden tender a reconcentrar estos materiales t&oacute;xicos en las c&eacute;lulas vivas.</p><p>Aunque el polonio se da en la naturaleza, se ha vuelto mucho m&aacute;s disponible para entrar en el agua, la comida, las c&eacute;lulas vivas y los tejidos a partir de la explosi&oacute;n de la miner&iacute;a que empez&oacute; poco despu&eacute;s de la segunda guerra mundial.</p>',
            'imagen' => '084.JPG'
        ]);
        $this->updateDetalleElemento(84);

        DB::table('detalles')->insert([
            'elemento_id' => 85,
            'aplicacion' => '<p>No tiene usos conocidos.</p>',
            'impacto' => '<p>El &aacute;stato no se da en cantidades significativas en la biosfera, as&iacute; que normalmente nunca presenta riesgos.</p>',
            'imagen' => '085.JPG'
        ]);
        $this->updateDetalleElemento(85);

        DB::table('detalles')->insert([
            'elemento_id' => 86,
            'aplicacion' => '<p>Los minerales de uranio desprenden rad&oacute;n y la presencia de emanaciones radioactivas de &eacute;ste en ciertas zonas delatan la existencia de estos minerales, lo que constituye una t&eacute;cnica de prospecci&oacute;n geoqu&iacute;mica.</p><p>Este is&oacute;topo puede usarse en el tratamiento de algunos tumores malignos. El gas se pone en un tubo, com&uacute;nmente hecho de vidrio o de oro, llamado semilla de rad&oacute;n, que se introduce en el tejido enfermo.</p>',
            'impacto' => '<p>Rad&oacute;n es un compuesto radioactivo, el cual se da raramente en la naturaleza. La mayor&iacute;a de los compuestos del rad&oacute;n encontrados en el medio ambiente provienen de las actividades humanas. El rad&oacute;n entra en el medio ambiente a trav&eacute;s del suelo, por las minas de uranio y fosfato, y por la combusti&oacute;n de carb&oacute;n.</p><p>Una parte del rad&oacute;n que se encuentra en el suelo se mover&aacute; a la superficie y entrar&aacute; en el aire a trav&eacute;s de la evaporaci&oacute;n. En el aire, los compuestos del rad&oacute;n se acoplar&aacute;n al polvo y otras part&iacute;culas. El rad&oacute;n tambi&eacute;n se puede mover hacia abajo en el suelo y alcanzar las aguas superficiales. Sin embargo, la mayor parte del rad&oacute;n permanecer&aacute; en el suelo.</p><p>El rad&oacute;n tiene una vida media radiactiva de alrededor de cuatro d&iacute;as; esto significa que la mitad de una cantidad dada de rad&oacute;n se degradar&aacute; en otros componentes, normalmente compuestos menos da&ntilde;inos, cada cuatro d&iacute;as.</p>',
            'imagen' => '086.JPG'
        ]);
        $this->updateDetalleElemento(86);

        DB::table('detalles')->insert([
            'elemento_id' => 87,
            'aplicacion' => '<p>No tiene usos.</p>',
            'impacto' => '<p>Debido a su vida media tan extremadamente corta, no existe raz&oacute;n para considerar los efectos del francio en el medio ambiente.</p>',
            'imagen' => '087.JPG'
        ]);
        $this->updateDetalleElemento(87);

        DB::table('detalles')->insert([
            'elemento_id' => 88,
            'aplicacion' => '<p>El radio ha sido durante mucho tiempo el &uacute;nico radiois&oacute;topo utilizado tratamientos de irradiaci&oacute;n terap&eacute;utica.</p><p>La irradiaci&oacute;n con radio tiene un efecto nocivo sobre las c&eacute;lulas vivas, y la sobreexposici&oacute;n produce quemaduras.</p><p>Las c&eacute;lulas cancerosas, sin embargo, son frecuentemente m&aacute;s sensibles a la radiaci&oacute;n que las c&eacute;lulas normales, y pueden matarse sin da&ntilde;ar seriamente los tejidos sanos si se controla y dirige adecuadamente la radiaci&oacute;n.</p><p>El radio se usa ahora &uacute;nicamente en el tratamiento de unos pocos tipos de c&aacute;ncer.</p>',
            'impacto' => '<p>El Radio es constantemente producido por la desintegraci&oacute;n radiactiva del uranio y del torio. El Radio est&aacute; presente en bajas cantidades en rocas y suelo y est&aacute; unido a estos materiales fuertemente. Es tambi&eacute;n posible encontrarlo en el aire. Elevadas concentraciones de Radio pueden existir en el agua en algunas localizaciones. Como resultado de los procesos mineros del ur&aacute;neo elevados niveles de Radio en el agua son encontrado en las aguas cercanas a las minas de ur&aacute;neo. Las plantas absorben ur&aacute;neo del suelo. Los animales que comen esas plantas acumulan el ur&aacute;neo y finalmente, el radio puede encontrarse en peces y otros organismos acu&aacute;ticos y se de la biomagnificaci&oacute;n en la cadena tr&oacute;fica.</p>',
            'imagen' => '088.JPG'
        ]);
        $this->updateDetalleElemento(88);

        DB::table('detalles')->insert([
            'elemento_id' => 89,
            'aplicacion' => '<p>No tiene usos.</p>',
            'impacto' => '<p>El desarrollo de la tecnolog&iacute;a nuclear ha estado acompa&ntilde;ada por la liberaci&oacute;n brutos , as&iacute; como m&iacute;nima de la radiactividad a la atm&oacute;sfera , el suelo , los oc&eacute;anos , mares , y la capa fre&aacute;tica , apareciendo en todo el mundo en el animal, vegetal y la materia inerte. La radiaci&oacute;n pasa de las especies y se concentra a trav&eacute;s de la cadena alimentaria , sometiendo a otros animales y los seres humanos a sus efectos perjudiciales.</p><p>Ac es extremadamente radiactivo . da&ntilde;os radiactividad del acervo gen&eacute;tico no s&oacute;lo de los seres humanos , sino de todos los seres vivos , los c&aacute;nceres que causan da&ntilde;o al sistema inmunol&oacute;gico , , leucemia , abortos , mortinatos , deformidades y problemas de fertilidad. Adem&aacute;s, el da&ntilde;o gen&eacute;tico de exposici&oacute;n a la radiaci&oacute;n es acumulativa durante vidas y generaciones.</p>',
            'imagen' => '089.JPG'
        ]);
        $this->updateDetalleElemento(89);

        DB::table('detalles')->insert([
            'elemento_id' => 90,
            'aplicacion' => '<p>Un importante uso del torio es la preparaci&oacute;n de <em>camisas</em> Welsbach, que contienen de &oacute;xido de torio con un 1% de &oacute;xido de cerio y otras sustancias, que se utilizan en las luces port&aacute;tiles de gas.</p><p>Es importante como fuente potencial de combustible at&oacute;mico, porque el bombardeo de torio-232 con neutrones lentos produce el is&oacute;topo fisible U-233. Este proceso es comparable al de obtenci&oacute;n de Pu-239 fisible bombardeando U-238 no fisible con neutrones r&aacute;pidos.</p><p>No obstante, a&uacute;n quedan algunos a&ntilde;os para que el torio sea considerado alternativa de otros combustibles nucleares ya que su utilizaci&oacute;n industrial se encuentra todav&iacute;a en fase de experimentaci&oacute;n.</p><p>El torio metal se usa en aleaciones de magnesio y como componente estabilizador en tubos de vac&iacute;o. Tambi&eacute;n se utiliza en la industria electr&oacute;nica como detector de ox&iacute;geno.</p><p>El &oacute;xido ThO<sub>2 </sub> se usa para los electrodos y filamentos ligeros, para controlar el tama&ntilde;o de grano del wolframio usado en las l&aacute;mparas el&eacute;ctricas y para fabricar crisoles de laboratorio para altas temperaturas y tambi&eacute;n como catalizador en la conversi&oacute;n del amon&iacute;aco en &aacute;cido n&iacute;trico, en la obtenci&oacute;n de hidrocarburos a partir del carbono, en las operaciones de cracking del petr&oacute;leo y en la producci&oacute;n de &aacute;cido sulf&uacute;rico.</p><p>Los vidrios que contienen &oacute;xido de torio el tiene un alto &iacute;ndice de refracci&oacute;n y una baja dispersi&oacute;n por lo que se utilizan en la fabricaci&oacute;n de lentes de calidad para c&aacute;maras e instrumentos cient&iacute;ficos.</p>',
            'impacto' => '<p><em>Estabilidad ambiental:</em>&nbsp;El torio reaccionar&aacute; lentamente con el agua, el ox&iacute;geno y otros compuestos para formar una variedad de compuestos del torio.</p><p><em>Efectos del material en plantas y animales:</em>&nbsp;Debido al tama&ntilde;o del producto, no se esperan efectos ambientales inusuales de estos productos; sin embargo, grandes escapes de torio pueden ser da&ntilde;inos para las plantas y animales afectados.</p><p><em>Efectos de los productos qu&iacute;micos en la vida acu&aacute;tica:</em>&nbsp;Debido al tama&ntilde;o del producto y a la forma del producto, estos productos no se puede anticipar que causen efectos adversos en la vida acu&aacute;tica; sin embargo, grandes escapes de torio en un cuerpo de agua pueden ser da&ntilde;inos para las plantas acu&aacute;ticas y los animales.</p><p>La eliminaci&oacute;n de los vertidos debe realizarse de acuerdo con las adecuadas regulaciones federales, estatales y locales.</p>',
            'imagen' => '090.JPG'
        ]);
        $this->updateDetalleElemento(90);

        DB::table('detalles')->insert([
            'elemento_id' => 91,
            'aplicacion' => '<p>No tiene usos.</p>',
            'impacto' => '<p>El protactinio est&aacute; presente en la naturaleza en el suelo, las rocas, las aguas superficiales, subterr&aacute;neas, plantas y animales en muy bajas concentraciones, del orden de una parte por trill&oacute;n, o 0,1 picocurios (pCi)/g. Mayores niveles est&aacute;n presentes en los minerales de uranio y otros materiales geol&oacute;gicos. Esencialmente todo el protactinio de ocurrencia natural est&aacute; presente como protactinio 231.</p><p>El protactinio se adhiere preferentemente bien al suelo, y la concentraci&oacute;n asociada con part&iacute;culas arenosas del suelo es normalmente 550 veces m&aacute;s alta que en el agua intersticial (el agua en el espacio que hay entre las part&iacute;culas del suelo); las proporciones de concentraci&oacute;n son incluso mayores (sobre 2.000 y m&aacute;s) en suelos de margas y arcillas.</p><p>El protactinio generalmente no es un contaminante importante para los DOE (Departamentos de Energ&iacute;a) y no es de preocupar para las aguas subterr&aacute;neas.</p>',
            'imagen' => '091.JPG'
        ]);
        $this->updateDetalleElemento(91);
        
        DB::table('detalles')->insert([
            'elemento_id' => 92,
            'aplicacion' => '<p>Se emplea en los dispositivos inerciales de orientaci&oacute;n, en gir&oacute;scopos, como contrapeso para el control de aeronaves y como material de blindaje.</p><p>El uranio met&aacute;lico se usa como blanco en las radiograf&iacute;as de rayos X de alta energ&iacute;a, el nitrato se ha utilizado como toner fotogr&aacute;fico y el acetato se usa en qu&iacute;mica anal&iacute;tica.</p><p>Todos los is&oacute;topos son importantes en las industrias nucleares tanto de armamento como de producci&oacute;n de energ&iacute;a. Los compuestos se usan en la fabricaci&oacute;n de vidrios especiales (Na<sub>2</sub>U<sub>2</sub>O<sub>7</sub>.6H<sub>2</sub>O) y cat&aacute;lisis (el carburo de uranio se usa en la producci&oacute;n de amon&iacute;aco).</p><p>El <sup>235</sup>U puede ser concentrado por difusi&oacute;n gaseosa u otros procedimientos f&iacute;sicos y utilizarse directamente como combustible nuclear, en lugar del uranio natural, o usarse como explosivo.</p><p>El <sup>238</sup>U, el is&oacute;topo de mayor vida media, se ha usado para determinar la edad de las rocas &iacute;gneas. Este is&oacute;topo puede convertirse en plutonio fisionable seg&uacute;n el proceso:</p><center><sup>238</sup>U (n, gamma) --&gt; <sup>239</sup>U --(beta) --&gt; <sup>239</sup>Np --(beta) --&gt; <sup>239</sup>Pu.</center><p>El uranio natural, ligeramente enriquecido con <sup>235</sup>U en un peque&ntilde;o porcentaje , se usa para abastecer los reactores nucleares para la producci&oacute;n de energ&iacute;a el&eacute;ctrica. El torio natural puede irradiarse con neutrones como se indica a continuaci&oacute;n para producir el is&oacute;topo <sup>233</sup>U:</p><center><sup>232</sup>Th (n, gamma) --&gt; <sup>233</sup>Th --(beta) --&gt; <sup>233</sup>Pa --(beta) --&gt; <sup>233</sup>U</center><p>Mientras que el torio no es fisionable, el <sup>233</sup>U s&iacute; lo es, y puede usarse como combustible nuclear. Un kg de uranio completamente fisionado tiene un poder como combustible equivalente a unas 6.000 toneladas de carb&oacute;n.</p><p>Tras el descubrimiento de la fisi&oacute;n nuclear, el uranio lleg&oacute; a convertirse en un metal estrat&eacute;gico hasta el punto de que su uso estaba restringido a la fabricaci&oacute;n de armas.</p><p>En los a&ntilde;os 1955, 1958 y 1964 se celebraron Ginebra (Suiza) sendas Conferencias Internacionales sobre el Uso Pac&iacute;fico de la Energ&iacute;a At&oacute;mica con el objeto de regular el cada vez m&aacute;s extendido uso del uranio como combustible en instalaciones industriales de todo tipo.</p><p>Sin embargo, a pesar de constituir una poderosa fuente de energ&iacute;a, existe una fuerte contestaci&oacute;n social debida a los problemas de seguridad en las plantas y, sobre todo, los del almacenamiento de los residuos radiactivos.</p><p>The tables on this website have been created with DivTable.com. Please subscribe for a HTML editor membership to stop adding promotional messages to the documents.</p>',
            'impacto' => '<p>El uranio puede encontrarse en el medioambiente de forma natural en muy peque&ntilde;as cantidades en rocas, suelo, aire y agua. Los humanos a&ntilde;aden metales de uranio y compuestos, porque son eliminados durante los procesos de miner&iacute;a y textiles.</p><p>El uranio es un material radioactivo que es muy reactivo. Como resultado de &eacute;sto no puede encontrarse en el ambiente en su forma elemental. Los compuestos del uranio que se han formado durante la reacci&oacute;n del uranio con otros elementos y sustancias se disuelven en el agua. La solubilidad en agua de un compuesto de uranio determina su movilidad en el medio ambiente, as&iacute; como su toxicidad.</p><p>En el aire las concentraciones de uranio son muy bajas. Incluso en concentraciones en el aire m&aacute;s altas de lo normal, hay tan poco uranio presente por metro c&uacute;bico que menos de un &aacute;tomo se transforma cada d&iacute;a. El uranio en el aire existe como polvo que caer&aacute; en el agua superficial, en plantas o en suelos a trav&eacute;s de la sedimentaci&oacute;n o el agua de lluvia. Entonces se hundir&aacute; en los sedimentos o a las capas de suelo m&aacute;s inferiores, donde se mezclar&aacute; con el uranio que ya est&aacute; presente.</p><p>En el agua la mayor parte del uranio es uranio disuelto que deriva de las rocas y el suelo sobre el cual el agua corre. Parte del uranio est&aacute; en suspensi&oacute;n, de forma que el agua toma una textura de barro.</p><p>Solo una parte muy peque&ntilde;a de uranio en agua sedimenta del aire. Las cantidades de uranio en el agua potable son generalmente muy bajas. El agua que contiene bajas cantidades de uranio es normalmente segura para beber. Debido a su naturaleza, no es probable que se acumulen peces o vegetales y el uranio que es absorbido ser&aacute; eliminado r&aacute;pidamente a trav&eacute;s de la orina y las heces.</p><p>El uranio se encuentra en los suelos en diversas concentraciones que son normalmente muy bajas. Los humanos a&ntilde;aden uranio al suelo a trav&eacute;s delas actividades industriales. Los compuestos en el suelo se combinar&aacute;n con otros compuestos, que pueden permanecer en el suelo durante a&ntilde;os sin moverse hacia el agua subterr&aacute;nea. Las concentraciones de uranio son normalmente m&aacute;s altas en suelo rico en fosfato, pero esto no tiene por qu&eacute; ser un problema, porque las concentraciones normalmente no exceden los rangos normales de los suelos no contaminados.</p><p>Las plantas absorben uranio a trav&eacute;s de sus ra&iacute;ces y lo almacenan all&iacute;. Los vegetales de ra&iacute;z tales como los r&aacute;banos pueden contener por tanto concentraciones de uranio m&aacute;s altas de lo normal. Cuando los vegetales se lavan el uranio ser&aacute; eliminado.</p><p>La erosi&oacute;n causada por la minas puede provocar que mayores cantidades de uranio sean liberadas al medio ambiente.</p><p>Article composed with the best online HTML editing tools. Please purchase a htmlg.com membership to stop adding links to the edited documents.</p>',
            'imagen' => '092.JPG'
        ]);
        $this->updateDetalleElemento(92);
        
        DB::table('detalles')->insert([
            'elemento_id' => 93,
            'aplicacion' => '<p>El Np se usa como componente en dispositivos de detecci&oacute;n de neutrones.</p>',
            'impacto' => '<p>No se ha informado de efectos del neptunio sobre el medio ambiente. Si usted dispone de alguna informaci&oacute;n al respecto, por favor contacte con nosotros y d&iacute;ganoslo.</p>',
            'imagen' => '093.JPG'
        ]);
        $this->updateDetalleElemento(93);

        DB::table('detalles')->insert([
            'elemento_id' => 94,
            'aplicacion' => '<p>Se usa como combustible nuclear para plantas de energ&iacute;a el&eacute;ctrica y, desgraciadamente, para las armas nucleares.</p><p>Un kilogramo es equivalente a unos 22 millones de kilovatios-hora.</p><p>La detonaci&oacute;n completa de un kilogramo de plutonio produce una explosi&oacute;n equivalente a 20.000 toneladas de explosivo qu&iacute;mico.</p><p>Su importancia estriba en la propiedad de ser f&aacute;cilmente fisionable con neutrones y su disponibilidad en cantidades considerables ya que la producci&oacute;n anual estimada ronda los 20.000 kg.</p><p>El Pu-238 es una valiosa fuente de energ&iacute;a para veh&iacute;culos espaciales, debido a su solidez. Se ha usado para sumunistrar energ&iacute;a a los veh&iacute;culos lunares de la misi&oacute;n Apolo.</p>',
            'impacto' => '<p>Cantidades traza de plutonio se encuentran naturalmente en los minerales ricos en uranio. Los humanos producimos la mayor parte del plutonio existente, en reactores nucleares especiales</p><p>Adem&aacute;s de estar presente de forma natural en cantidades muy peque&ntilde;as, el plutonio tambi&eacute;n puede entrar en el medio ambiente por escapes de reactores nucleares, plantas de producci&oacute;n de armas, e instalaciones de investigaci&oacute;n. Una fuente importante de escapes de plutonio son las pruebas de armas nucleares.</p><p><br /> El plutonio puede entrar en las aguas superficiales por escapes accidentales y vertidos de desechos radioactivos. El suelo puede contaminarse con plutonio a trav&eacute;s de la lluvia radiactiva durante las pruebas de armas nucleares. El plutonio se mueve lentamente hacia abajo en el suelo, hasta las aguas subterr&aacute;neas.</p><p>Las plantas absorben bajos niveles de plutonio, pero estos niveles no son lo suficientemente altos como para provocar biomagnificaci&oacute;n del plutonio en la cadena alimenticia, o acumulaci&oacute;n en los cuerpos de animales.</p>',
            'imagen' => '094.JPG'
        ]);
        $this->updateDetalleElemento(94);

        DB::table('detalles')->insert([
            'elemento_id' => 95,
            'aplicacion' => '<p>El Am se usa como blanco en aceleradores de part&iacute;culas o reactores nucleares para la producci&oacute;n de elementos sint&eacute;ticos m&aacute;s pesados.</p><p>El Am se utiliza como fuente de radiaci&oacute;n <em>gamma</em> para realizar las gammagraf&iacute;as, pero una sobreexposici&oacute;n causa serios problemas.</p><p>Tambi&eacute;n se ha usado como controlador del espesor en la industria del vidrio plano y como fuente de disociaci&oacute;n para los dispositivos detectores de humo.</p>',
            'impacto' => '<p>El americio est&aacute; formado principalmente solo por is&oacute;topos radiactivos creados por los hombres. Estos pueden estar presentes en suelos y agua en muy peque&ntilde;as cantidades como resultado de las pruebas de armas nucleares previas a su prohibici&oacute;n en 1963. El americio procedente de las pruebas atmosf&eacute;ricas de armas nucleares puede permanecer en la atm&oacute;sfera durante d&eacute;cadas viajando alrededor del mundo y sediment&aacute;ndose despacio en La Tierra. Sus is&oacute;topos se desintegran muy despacio en el medio ambiente y como resultado pueden da&ntilde;ar a plantas y animales. Cuando los animales est&aacute;n expuestos a niveles extremos de americio, los resultados pueden ser da&ntilde;os a los &oacute;rganos tales como los pulmones, el h&iacute;gado y el tiroides.</p><p>El americio que est&aacute; presente en los suelos puede acabar en las plantas, pero solo en peque&ntilde;as cantidades. Normalmente las part&iacute;culas de americio se almacenan en partes de las plantas que los animales no consumen. En los peces muy poco americio se almacena en su carne o en otras partes comestibles y como resultado de esto no se acumular&aacute; en la cadena alimenticia.</p>',
            'imagen' => '095.JPG'
        ]);
        $this->updateDetalleElemento(95);

        DB::table('detalles')->insert([
            'elemento_id' => 96,
            'aplicacion' => '<p>Su uso principal est&aacute; en conseguir otros act&iacute;nidos. Los is&oacute;topos del curio, especialmente el Cm, son poco permeables a la radiaci&oacute;n alfa y suelen usarse como blindaje en sat&eacute;lites y sondas espaciales no tripuladas.</p><p>El curio se ha utilizado para bombardear el suelo de la Luna con part&iacute;culas alfa porque la medida de la emisi&oacute;n alfa posterior del suelo proporciona informaci&oacute;n sobre el tipo y cantidad de muchos elementos qu&iacute;micos presentes.</p><p>El poder energ&eacute;tico del Cm es superior al del Pu por lo que puede utilizarse tambi&eacute;n como combustible.</p><p>El curio absorbido por el organismo se acumula en el sistema &oacute;seo y destruye el mecanismo de formaci&oacute;n de la pared celular, por lo que es un elemento que entra&ntilde;a serios peligros para la salud.</p>',
            'impacto' => '<p>Las pruebas atmosf&eacute;ricas de armas nucleares, que cesaron en 1980 en todo el mundo, generaron la mayor parte del curio ambiental. Los accidentes y otros escapes de las instalaciones de producci&oacute;n de armas nucleares han provocado contaminaci&oacute;n localizada. El &oacute;xido de curio es la forma m&aacute;s com&uacute;n en el medio ambiente.</p><p>El curio es t&iacute;picamente bastante insoluble y se a&ntilde;ade fuertemente a las part&iacute;culas del suelo. La concentraci&oacute;n de curio en las part&iacute;culas arenosas de suelo se estima que es alrededor de 4.000 veces mayor que en el agua intersticial (en los espacios de poro entre las part&iacute;culas del suelo), y se une incluso m&aacute;s fuertemente a las margas donde las tasas de concentraci&oacute;n son incluso mayores (18.000).</p>',
            'imagen' => '096.JPG'
        ]);
        $this->updateDetalleElemento(96);

        DB::table('detalles')->insert([
            'elemento_id' => 97,
            'aplicacion' => '<div>No tiene.</div>',
            'impacto' => '<p>El berkelio no se da en la naturaleza, y no ha sido encontrado en la corteza terrestre, por lo que no existe raz&oacute;n para considerar sus efectos en el medio ambiente. Sin embargo, todos sus is&oacute;topos conocidos son radioactivos, y aunque solo se producen artificialmente en laboratorios y son manejados por expertos, en el caso de que llegaran a afectar al medio ambiente producir&iacute;anc&aacute;nceres, da&ntilde;os en el sistema inmunitario, leucemias, abortos espont&aacute;neos, nacidos muertos, deformidades y problemas de fertilidad en todos los seres vivos afectados.</p>',
            'imagen' => '097.JPG'
        ]);
        $this->updateDetalleElemento(97);

        DB::table('detalles')->insert([
            'elemento_id' => 98,
            'aplicacion' => '<p>El Cf es un potente emisor de neutrones, estim&aacute;ndose que 1 microgramo del mismo libera 170 millones de neutrones por minuto. Esto representa un serio peligro para la salud y obliga a tomar muchas precauciones en el manejo del californio.</p><p>Debido a que el californio es una fuente muy eficiente de neutrones, cabe esperar que tenga muchos usos en el futuro.</p><p>Hoy tiene aplicaci&oacute;n pr&aacute;ctica como fuente de neutrones de alta intensidad en sistemas electr&oacute;nicos, en la investigaci&oacute;n m&eacute;dica, en t&eacute;cnicas especiales para la determinaci&oacute;n anal&iacute;tica de metales como oro y plata y en la determinaci&oacute;n del agua en el petr&oacute;leo.</p><p>El Cf se utiliza como blanco de bombardeo en la preparaci&oacute;n de otros elementos de n&uacute;mero at&oacute;mico superior a 100.</p>',
            'impacto' => '<h2>El californio 252 es un emisor muy potente de neutrones. Es conocido por ser extremadamente radioactivo.</h2><p>La radioactividad da&ntilde;a el material gen&eacute;tico no solo de los seres humanos, sino el de todos los seres vivos, provocando c&aacute;nceres, da&ntilde;os en el sistema inmunitario, leucemias, abortos espont&aacute;neos, nacidos muertos, deformidades y problemas de fertilidad. Adem&aacute;s, el da&ntilde;o gen&eacute;tico producido por la exposici&oacute;n a la radiaci&oacute;n se acumula durante vidas y generaciones.</p>',
            'imagen' => '098.JPG'
        ]);
        $this->updateDetalleElemento(98);

        DB::table('detalles')->insert([
            'elemento_id' => 99,
            'aplicacion' => '<p>No tiene usos.</p>',
            'impacto' => '<p>El einstenio no se da en la naturaleza, y no ha sido encontrado en la corteza terrestre, por lo que no hay motivo para considerar sus efectos sobre el medio ambiente.</p>',
            'imagen' => '099.JPG'
        ]);
        $this->updateDetalleElemento(99);

        DB::table('detalles')->insert([
            'elemento_id' => 100,
            'aplicacion' => '<p>No tiene usos.</p>',
            'impacto' => '<p>El fermio no se da en la naturaleza, y no ha sido encontrado en la corteza terrestre, por lo que no hay motivo para considerar sus efectos sobre el medio ambiente.</p>',
            'imagen' => '100.JPG'
        ]);
        $this->updateDetalleElemento(100);

        /*DB::table('detalles')->insert([
            'elemento_id' => ,
            'aplicacion' => '',
            'impacto' => '',
            'imagen' => '.JPG'
        ]);
        $this->updateDetalleElemento();*/
    }
}

<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('blog')->insert([
            'title' => 'Fajitas de pollo al chipotle',
            'summary' => 'Camarones grandes en una salsa muy picante de chile chipotle con salsa cátsup. ¡Imposibles de resistir!',
            'content' => 'Mezcla en un tazón mitad de la mantequilla, aceite de oliva, ajo, cebolla, jugo de limón, sal, pimienta. Agrega los camarones y revuelve para cubrirlos perfectamente.
				Calienta la mantequilla restante en una cacerola a fuego medio. Agrega los camarones con todo y marinada, y cocina hasta que tomen un tono rosado, entre 3 y 5 minutos.
				Licua la salsa cátsup con el Jugo Maggi®, chile chipotle y sal, hasta tener una salsa homogénea. Vierte sobre los camarones y cocina, sin dejar de mover, hasta que la salsa empiece a hervir. Reduce el fuego a bajo y cocina unos minutos más, hasta que la salsa se haya espesado.
				Sirve con arroz blanco y rebanadas de aguacate.',
            'category' => 'Comida Mexicana',
            'idUser' => '1',
            'created_at' => '2014-05-07'
        ]);

        DB::table('blog')->insert([
            'title' => 'Ensalada de tocino, lechuga y jitomate',
            'summary' => 'Una ensalada para los amantes del tocino',
            'content' => 'Fríe el tocino en un sartén a fuego medio-alto. Voltea frecuentemente para que se dore de ambos lados. Escurre el exceso de aceite con toallas de papel y desmorona. Reserva.
Prepara el aderezo en una licuadora o procesador de alimentos. Combina la mayonesa, leche, ajo en polvo y pimienta negra. Procesa hasta lograr una consistencia suave. Sazona con sal al gusto.
Coloca la lechuga, jitomate, tocino y crotones en una ensaladera grande. Vierte el aderezo y revuelve bien. Sirve de inmediato.',
            'category' => 'Ensaladas',
            'idUser' => '1',
            'created_at' => '2014-06-05'
        ]);

        DB::table('blog')->insert([
            'title' => 'Sándwich de jitomate, mozzarella y albahaca a la parrilla',
            'summary' => 'Una ensalada para los amantes del tocino',
            'content' => 'Seca el queso mozzarella y el jitomate con toallas de papel.
Coloca 1 rebanada de queso, 2 rebanadas de jitomate, 2 rebanadas de cebolla y 2 hojas de albahaca desmenuzadas sobre cada 4 rebanadas de pan. Espolvoréales la sal y la pimienta. Cúbrelas con las rebanadas de pan restantes
. Calienta el aceite en una sartén antiadherente grande a fuego medio. Coloca en ella los sándwiches. Cocínalos; presiónalos firmemente hacia abajo con una espátula hasta dorarlos ligeramente, durante unos 2 minutos. Voltea los sándwiches y sigue cocinándolos; presiónalos hacia abajo hasta que los sándwiches estén dorados y el queso se haya derretido, unos 2 minutos.',
            'category' => 'Sandwiches',
            'idUser' => '2',
            'created_at' => '2014-06-25'
        ]);

        DB::table('blog')->insert([
            'title' => 'Hot cakes de avena sin harina',
            'summary' => 'Un desayuno completo, balanceado y saludable. La masa de estos hot cakes se prepara con avena, queso cottage, plátano y huevo.',
            'content' => 'Coloca los huevos, avena, queso, plátano y substituto de azúcar en el vaso de la licuadora. Licua hasta que la avena se haya molido completamente y tengas una masa homogénea.
Calienta un comal antiadherente a fuego medio-alto. Pon 1/4 taza de la masa por cada hot cake en el comal. Cocina hasta que se formen burbujas en la superficie, voltea y cocina del otro lado hasta que tome un tono café dorado.
Coloca los hot cakes en un plato y cúbrelos con papel aluminio para que se sigan cociendo mientras terminas con los demás.
Sírvelos calientes con mantequilla y miel.',
            'category' => 'Desayunos',
            'idUser' => '3',
            'created_at' => '2014-07-02'
        ]);

        DB::table('blog')->insert([
            'title' => 'Pastel de tres leches',
            'summary' => 'Esponjoso y jugoso, este pastel de tres "leches" se baña con leche condensada, leche evaporada y crema para batir. ¡Un dulce y delicioso deleite!',
            'content' => 'Precalienta el horno a 175 °C. Engrasa y enharina un molde para hornear de 23 centímetros de diámetro.
Coloca en un tazón las yemas de huevo con 3/4 de taza de azúcar, y bate con batidora eléctrica a punto de listón (hasta que se vean casi blancas y esponjadas). Reduce la velocidad de la batidora y añade la leche, vainilla, harina y polvo para hornear.
Bate en otro tazón las claras de huevo a punto de nieve (hasta que formen picos suaves). Sin dejar de batir, agrega poco a poco el resto del azúcar. Sigue batiendo hasta que formen picos firmes, pero sin dejar que se sequen. Envuelve en la mezcla de yemas. Vierte la masa dentro del molde preparado.
Hornea a 175 °C de 45 a 50 minutos, hasta que pase la prueba del palillo.
Deja enfriar dentro del molde durante 10 minutos, luego pasa un cuchillo por la orilla del molde para despegar el pastel. Desmolda y coloca sobre una rejilla de alambre para que se enfríe completamente. Pica la superficie del pastel varias veces con un tenedor.
Mezcla la leche condensada, leche evaporada y 1/4 de taza de crema para batir. Separa 1 taza de esta mezcla de tres leches (desecha o reserva dentro del refrigerador para otro uso) y vierte el resto poco a poco sobre el pastel hasta que se haya absorbido.
Aparte, bate el resto de la crema para batir hasta alcanzar la consistencia de la crema chantilly. Cubre con ésta el pastel y adorna con las cerezas.',
            'category' => 'Postres',
            'idUser' => '4',
            'created_at' => '2014-07-02'
        ]);
    }
}

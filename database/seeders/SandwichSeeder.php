<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sandwiches')->insert([
            ['name' => 'Jambon ou fromage', 'ingredients' => '', 'prix' => 3.2],
            ['name' => 'Bacon', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Boulette maison', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Jambon d\'Ardennes', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Jambon italien', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Saucisson italien', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Filet de poulet', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Rosbif', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Américain préparé', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Salade de viande', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Salade suisse', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Poulet curry, andalouse', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Thon mayonnaise, piquant, cocktail', 'ingredients' => '', 'prix' => 3.2],
            ['name' => 'Thon portugais', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Salade de crabe', 'ingredients' => '', 'prix' => 4.0],
            ['name' => 'Salade de langoustines cocktail', 'ingredients' => '', 'prix' => 3.9],
            ['name' => 'Salade de crevettes grises', 'ingredients' => '', 'prix' => 4.9],
            ['name' => 'Scampis à l’ail', 'ingredients' => '', 'prix' => 4.9],
            ['name' => 'Saumon fumé en tranches', 'ingredients' => '', 'prix' => 4.9],
            ['name' => 'CLUB Maison', 'ingredients' => 'Jambon, Fromage, Assortiment de crudités, Œuf', 'prix' => 4.5],
            ['name' => 'MARTINO Maison', 'ingredients' => 'Américain préparé, Martino maison (cornichons, anchois)', 'prix' => 4.5],
            ['name' => 'Le Chèvre', 'ingredients' => 'Fromage de chèvre, Bacon braisé, Miel, Thym', 'prix' => 4.5],
            ['name' => 'SUISSE', 'ingredients' => 'Fromage fondu, Œuf de dinde, Tomates, Roquette', 'prix' => 4.5],
            ['name' => 'Le PANIDEL', 'ingredients' => 'Bacon grillé, Salade de thon, Câpres, Oignons frais', 'prix' => 4.5],
            ['name' => 'ITALIEN', 'ingredients' => 'Jambon de Parme, Mozzarella, Tomate, Origan, Huile d\'olive', 'prix' => 4.9],
            ['name' => 'Le CESAR', 'ingredients' => 'Poulet, Parmesan, Tomates séchées, Sauce moutarde', 'prix' => 4.9],
            ['name' => 'Le Carpaccio', 'ingredients' => 'Carpaccio de bœuf, Parmesan, Roquette, Tomates séchées', 'prix' => 5.0],
            ['name' => 'Le Fermier', 'ingredients' => 'Jambon blanc, Brie', 'prix' => 5.0],
            ['name' => 'Végétarien', 'ingredients' => 'Assortiment de crudités, Vinaigrette maison', 'prix' => 5.0],
            ['name' => 'Le Nordique', 'ingredients' => 'Saumon fumé, Oignons frais, Sauce miel-moutarde, Aneth', 'prix' => 5.5],
            ['name' => 'Caprese', 'ingredients' => 'Mozzarella, Tomates, Basilic, Huile d\'olive', 'prix' => 5.5]
        ]);
    }
}

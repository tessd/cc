<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pizza',
                'category_id' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pasta',
                'category_id' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Desserts',
                'category_id' => 0,
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Kwaliteits wijnen',
                'category_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Italiaanse wijnen',
                'category_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Aperatieven\\/ likeuren',
                'category_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bieren',
                'category_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Overige dranken',
                'category_id' => 4,
            ),
            11 => 
            array (
                'id' => 12,
            'name' => 'Pane e olive (Brood en olijven)',
                'category_id' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Zuppe',
                'category_id' => 5,
            ),
            13 => 
            array (
                'id' => 14,
            'name' => 'Fredi (Koude voorgerechten)',
                'category_id' => 5,
            ),
            14 => 
            array (
                'id' => 15,
            'name' => 'Caldi (Warme voorgerechten)',
                'category_id' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Insalata',
                'category_id' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bijgerechten',
                'category_id' => 5,
            ),
        ));
        
        
    }
}

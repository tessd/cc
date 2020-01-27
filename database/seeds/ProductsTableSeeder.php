<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Salame',
                'category_id' => 1,
                'price' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas en salami',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Caprese',
                'category_id' => 16,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten met mozarella en basilicum',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Napolitana',
                'category_id' => 2,
                'price' => '4.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met tomatensaus, parmezaanse kaas en peterselie',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Prosciutto',
                'category_id' => 1,
                'price' => '6.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas en ham',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Funghi',
                'category_id' => 1,
                'price' => '6.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas en champignons',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Quattro Stagioni',
                'category_id' => 1,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, champignons, ham, salami, ansjovis, kappertjes en olijven',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mista',
                'category_id' => 1,
                'price' => '10.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, champignons, ham, salami, garnalen en zalm',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tonno',
                'category_id' => 1,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, tonijn en uien',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Peperoni',
                'category_id' => 1,
                'price' => '9.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, champignons, uien, paprika en spaanse pepers',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Capricciosa',
                'category_id' => 1,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, garnalen, zalm, salami, paprika en ham',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Calzone',
                'category_id' => 1,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Dubbel geslagen pizza gevuld met tomaten, kaas, ham en salami',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Capricciosa Speciale',
                'category_id' => 1,
                'price' => '10.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, champignons, ham, salami, garnalen, zalm, olijven, paprika en uien',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Francescana',
                'category_id' => 1,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, champignons, artisjokken en uien',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Stella Marina',
                'category_id' => 1,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, garnalen en zalm',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Adriatica',
                'category_id' => 1,
                'price' => '10.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Tomaten, kaas, tonijn, garnalen en ansjovis',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'All\'aglio',
                'category_id' => 2,
                'price' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met olijfolie, knoflook, peterselie en parmezaanse kaas',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bolognese',
                'category_id' => 2,
                'price' => '6.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met rundergehakt in tomatensaus en parmezaanse kaas',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Carbonara',
                'category_id' => 2,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met ei, peterselie, spek, spaanse peper, room, knoflook, parmezaanse kaas en uien',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Burinata',
                'category_id' => 2,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met champignons, ham, doperwten, room, parmezaanse kaas en uien',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Matriciana',
                'category_id' => 2,
                'price' => '9.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            'description' => 'Met tomatensaus, gerooktspek, uien en parmezaanse kaas (pikant)',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Vegetariana',
                'category_id' => 2,
                'price' => '9.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met champignons, artisjokken, paprika, uien, kappertjes in tomatensaus en parmezaanse kaas',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Al Pesto',
                'category_id' => 2,
                'price' => '10.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met groene pesto, pijnboompitjes, room, parmezaanse kaas en verse knoflook',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Quattro Formaggi',
                'category_id' => 2,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met vier verschillende soorten kaas in roomsaus',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Pasta al spinacina',
                'category_id' => 2,
                'price' => '10.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Met spinazie, mozzarella, room, parmezaanse kaas, verse peterselie en verse knoflook',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Tiramisu',
                'category_id' => 3,
                'price' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Heerlijke Italiaans cake dessert, 3.5% alcohol',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Frascati',
                'category_id' => 7,
                'price' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Verdicchio',
                'category_id' => 7,
                'price' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Barolo',
                'category_id' => 7,
                'price' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Barbera',
                'category_id' => 7,
                'price' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Amarone',
                'category_id' => 7,
                'price' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            30 => 
            array (
                'id' => 31,
            'name' => 'Vino rossato (rosÃ©)',
                'category_id' => 8,
                'price' => '18.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            'description' => 'Vino rossato (rosÃ©)',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Vino rosso',
                'category_id' => 8,
                'price' => '18.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Vino bianco',
                'category_id' => 8,
                'price' => '18.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Chianti',
                'category_id' => 8,
                'price' => '19.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Proseco',
                'category_id' => 8,
                'price' => '15.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Rode port',
                'category_id' => 9,
                'price' => '12.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Witte port',
                'category_id' => 9,
                'price' => '13.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Avema',
                'category_id' => 9,
                'price' => '15.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Vecchia Romagna',
                'category_id' => 9,
                'price' => '138.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Flesje Hertog Jan',
                'category_id' => 10,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Flesje Grolsch',
                'category_id' => 10,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Flesje Wickse Witte',
                'category_id' => 10,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Flesje Moretti',
                'category_id' => 10,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Flesje Peroni',
                'category_id' => 10,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Blikje Coca-cola',
                'category_id' => 11,
                'price' => '1.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Fles Coca-cola',
                'category_id' => 11,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Blikje Sprite',
                'category_id' => 11,
                'price' => '1.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Fles Sprite',
                'category_id' => 11,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Blikje Casis',
                'category_id' => 11,
                'price' => '1.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Fles Casis',
                'category_id' => 11,
                'price' => '2.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Pizza Bianca',
                'category_id' => 12,
                'price' => '4.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Krokante pizza bianca met knoflook, basilicum en olijfolie',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Bruschetta',
                'category_id' => 12,
                'price' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            'description' => 'In de oven geroosterde broodjes (drie stuks) bedekt met blokjes tomaat, ui, basilicum en olijfolie',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Brood met kruidenboter',
                'category_id' => 12,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Brood met pesto',
                'category_id' => 12,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Zuppa di Pomodoro',
                'category_id' => 13,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Minestrone',
                'category_id' => 13,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Carpaccio',
                'category_id' => 14,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Klassiek bereide carpaccio van rundvlees met rucola en parmezaanse kaas',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Antipasto di Terra',
                'category_id' => 14,
                'price' => '14.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Proeverij voor 2 personen van diverse soorten Italiaanse vleeswaren, mozzarella en olijven op een bedje van rucola, brood met kruidenboter.',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Gamberetti all\' aglio',
                'category_id' => 15,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Gebakken gamba\'s in kruidige knoflookolie',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Cozze Pescatore',
                'category_id' => 15,
                'price' => '7.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Gebakken mosselen in witte wijnsaus',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Insalata Mista',
                'category_id' => 16,
                'price' => '5.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Gemengde salade',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Insalata Mista con Tonno',
                'category_id' => 16,
                'price' => '8.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Gemengde salade met tonijn',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Gefrituurde aardappelschijfjes',
                'category_id' => 17,
                'price' => '3.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => '',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Verdure miste al forno',
                'category_id' => 17,
                'price' => '6.00',
                'created_at' => NULL,
                'updated_at' => NULL,
                'description' => 'Gebakken seizoensgroenten',
            ),
        ));
        
        
    }
}

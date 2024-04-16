<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $date=[
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/malewhim.png',
                'foodName' => 'Male Whim',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/suzma.png',
                'foodName' => 'Suzma',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/greek.png',
                'foodName' => 'Greek Salad',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/pickles.png',
                'foodName' => 'Pickles',
                'foodPrice' => '32.000',
            ],

            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/french.png',
                'foodName' => 'French Salad',
                'foodPrice' => '32.000',
            ],

            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/achik-chuchuk.png',
                'foodName' => 'Achik - chuchuk',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/ideal.png',
                'foodName' => 'Ideal Salad',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => '/images/saladImages/japanese.png',
                'foodName' => 'Japanese',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'salads',
                'foodImgLink' => 'dd',
                'foodName' => 'dd',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'samsa',
                'foodImgLink' => '/images/somsa/samsa.png',
                'foodName' => 'Somsa',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'samsa',
                'foodImgLink' => '/images/somsa/samsa.png',
                'foodName' => 'Somsa',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/beefstea.png',
                'foodName' => 'Beef steak',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/beefstrogan.png',
                'foodName' => 'Beef Strogan',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/beshbarmak.png',
                'foodName' => 'Beshbarmak',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/dolma.png',
                'foodName' => 'Dolma',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/Dumpling.png',
                'foodName' => 'Dumblings',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/fish.png',
                'foodName' => 'Fish 300gr',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/halim.png',
                'foodName' => 'Halim',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/jiz.png',
                'foodName' => 'Jiz',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/kazankebab.png',
                'foodName' => 'Kazan kebab',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/norin.png',
                'foodName' => 'Norin',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/peas.png',
                'foodName' => 'Peas',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/plov.png',
                'foodName' => 'Plov',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'maindishes',
                'foodImgLink' => '/images/mainFoods/stew.png',
                'foodName' => 'Stew',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'kebab',
                'foodImgLink' => '/images/kebab/kebab.png',
                'foodName' => 'Kebab',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'kebab',
                'foodImgLink' => '/images/kebab/kebab.png',
                'foodName' => 'Kebab',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'grill',
                'foodImgLink' => '/images/grill/grill.png',
                'foodName' => 'Beef Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'grill',
                'foodImgLink' => '/images/grill/grill.png',
                'foodName' => 'Beef Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/beefsoup.png',
                'foodName' => 'Beef Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/jarsouop.png',
                'foodName' => 'Jar Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/lagman.png',
                'foodName' => 'Lagman',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/lambsoup.png',
                'foodName' => 'Lamb Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/lentil.png',
                'foodName' => 'Lentil Soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/mastava.png',
                'foodName' => 'Mastava',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'firtsdishes',
                'foodImgLink' => '/images/first/Mushrroomsoup.png',
                'foodName' => 'Mushroom soup',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'drinks',
                'foodImgLink' => '/images/drinks/tea.png',
                'foodName' => 'Tea',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'drinks',
                'foodImgLink' => '/images/drinks/tea.png',
                'foodName' => 'Tea',
                'foodPrice' => '32.000',
            ],
            [
                'category' => 'drinks',
                'foodImgLink' => 'dd',
                'foodName' => 'dd',
                'foodPrice' => '32.000',
            ],



        ];
         DB::table('menus')->insert($date);
    }
}

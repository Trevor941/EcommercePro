<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung A10',
                'price' => '3000',
                'description' => 'The latest samsung A10 with a 13mp Camera, 32 gig storage',
                'category' => 'smart phones',
                'gallery' => 'https://images.samsung.com/is/image/samsung/sa-en-galaxy-a10-a105-sm-a105fzbdksa-backblue-160372590?$720_576_PNG$'
            ],
            [
                'name' => 'LED 32 inch TV',
                'price' => '5000',
                'description' => 'High quality for low price television set',
                'category' => 'TVs',
                'gallery' => 'https://www.makro.co.za/sys-master/images/hb7/h19/8918024945694/LED-TVs$BAA.png'
            ],

            [
                'name' => 'Fridge',
                'price' => '18000',
                'description' => 'The latest bachelors fridge for personal use',
                'category' => 'Fridges',
                'gallery' => 'https://pixabay.com/vectors/fridge-kitchen-refrigerator-158792/'
            ],

            [
                'name' => 'Iphone 12',
                'price' => '15000',
                'description' => 'Living the best life of caption with Iphone 12',
                'category' => 'smart phones',
                'gallery' => 'https://pixabay.com/photos/iphone-iphone-7-ios-10-smartphone-1766253/'
            ],

            [
                'name' => 'Sony TV',
                'price' => '4000',
                'description' => 'Reduced to clear. Get it today whilst stock lasts.',
                'category' => 'smart phones',
                'gallery' => 'https://pixabay.com/photos/room-bed-indoors-beaded-sofa-4990691/'
            ]


        ]);
    }
}

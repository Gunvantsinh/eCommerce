<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('product')->insert([
            ['product_category_id' => '1', 'name' => 'Black Shirt', 'price' => '40','description' => 'Test Product'],
            ['product_category_id' => '1', 'name' => 'White Shirt', 'price' => '36','description' => 'Test Product'],
            ['product_category_id' => '2', 'name' => 'Dancing Monkey', 'price' => '32','description' => 'Test Product'],
            ['product_category_id' => '2', 'name' => 'Electric Car With Remote', 'price' => '30','description' => 'Test Product'],
            ['product_category_id' => '3', 'name' => 'Garnier AcknoFight Facewash', 'price' => '25','description' => 'Test Product'],
            ['product_category_id' => '3', 'name' => 'Garnier OilFree Facewash', 'price' => '20','description' => 'Test Product'],
        ]);
    }
}

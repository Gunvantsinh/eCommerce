<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            ['name' => 'Clothing & Footware'],
            ['name' => 'Toys'],
            ['name' => 'Health & Beauty'],
            ['name' => 'Sports'],
            ['name' => 'Jewelry']
        ]);
    }
}

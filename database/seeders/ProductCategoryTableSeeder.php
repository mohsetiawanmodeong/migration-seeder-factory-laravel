<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_categories = ['Food', 'Fashion', 'Electronic'];

        foreach ($product_categories as $product_category) {
            ProductCategory::create([
                'name' => $product_category
            ]);
        }
    }
}

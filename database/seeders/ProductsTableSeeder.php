<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear Categoria
        $categories = \App\Models\Category::factory(5)->create();
        //Por cada categoria creamos 20 productos
        $categories->each(function($category){
            $products = \App\Models\Product::factory(20)->make();
            $category->products()->saveMany($products);
            
            $products->each(function($product){
                $images = \App\Models\ProductImage::factory(5)->make();
                $product->images()->saveMany($images);
            });
        });
        
    }
}

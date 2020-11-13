<?php

namespace Database\Seeders;

/* use App\Models\ProductImage; */
/* 
use App\Models\ProductImage; */
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           /*  CategoriesTableSeeder::class, */
            ProductsTableSeeder::class,
            UserSeeder::class
            /* ProductImagesTableSeeder::class */
        ]);
    }
}

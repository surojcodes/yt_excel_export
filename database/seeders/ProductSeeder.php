<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
           'name'=>'Samsung Galaxy 100',
           'category'=>'Electronics',
           'stock'=>23000,
           'unit_cost'=>234.67 
        ]);
        Product::create([
           'name'=>'Iphone 18',
           'category'=>'Electronics',
           'stock'=>2000,
           'unit_cost'=>1234.67 
        ]);
        Product::create([
           'name'=>'Dell Monitor',
           'category'=>'Electronics',
           'stock'=>13000,
           'unit_cost'=>1934.67 
        ]);
    }
}

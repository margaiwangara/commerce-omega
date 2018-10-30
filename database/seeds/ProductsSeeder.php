<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Dress 1',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-01',
            'price' => '200.50'
        ]);
        Products::create([
            'name' => 'Dress 2',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-02',
            'price' => '300.50'
        ]);
        Products::create([
            'name' => 'Dress 3',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-04',
            'price' => '500.50'
        ]);
        Products::create([
            'name' => 'Dress 4',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-05',
            'price' => '100.50'
        ]);
        Products::create([
            'name' => 'Dress 5',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-07',
            'price' => '400.50'
        ]);
        Products::create([
            'name' => 'Dress 6',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-08',
            'price' => '800.50'
        ]);
        Products::create([
            'name' => 'Shirt 1',
            'description' => 'Long sleeved shirt with some cool features',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-11',
            'price' => '1200.00'
        ]);
        Products::create([
            'name' => 'Shirt 2',
            'description' => 'Short sleeve shirt with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-03',
            'price' => '900.50'
        ]);
        Products::create([
            'name' => 'Shoes 1',
            'description' => 'Black and White converse shoes',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-09',
            'price' => '3000.50'
        ]);
        Products::create([
            'name' => 'Watch 1',
            'description' => 'Cool watch for men',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-15',
            'price' => '5000.00'
        ]);
    }
}

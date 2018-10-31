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
            'related_to' => 'women',
            'price' => '200.50'
        ]);
        Products::create([
            'name' => 'Dress 2',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-02',
            'related_to' => 'women',
            'price' => '300.50'
        ]);
        Products::create([
            'name' => 'Dress 3',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-04',
            'related_to' => 'women',
            'price' => '500.50'
        ]);
        Products::create([
            'name' => 'Dress 4',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-05',
            'related_to' => 'women',
            'price' => '100.50'
        ]);
        Products::create([
            'name' => 'Dress 5',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-07',
            'related_to' => 'women',
            'price' => '400.50'
        ]);
        Products::create([
            'name' => 'Dress 6',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-08',
            'related_to' => 'women',
            'price' => '800.50'
        ]);
        Products::create([
            'name' => 'Shirt 1',
            'description' => 'Long sleeved shirt with some cool features',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-11',
            'related_to' => 'men',
            'price' => '1200.00'
        ]);
        Products::create([
            'name' => 'Shirt 2',
            'description' => 'Short sleeve shirt with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-03',
            'related_to' => 'men',
            'price' => '900.50'
        ]);
        Products::create([
            'name' => 'Shoes 1',
            'description' => 'Black and White converse shoes',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'image' => 'product-09',
            'related_to' => 'footwear',
            'price' => '3000.50'
        ]);
        Products::create([
            'name' => 'Watch 1',
            'description' => 'Cool watch for men',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'image' => 'product-15',
            'related_to' => 'wristwear',
            'price' => '5000.00'
        ]);
    }
}

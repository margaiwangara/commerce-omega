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
            'price' => '200.50'
        ]);
        Products::create([
            'name' => 'Dress 2',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'price' => '300.50'
        ]);
        Products::create([
            'name' => 'Dress 3',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'price' => '500.50'
        ]);
        Products::create([
            'name' => 'Dress 4',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'price' => '100.50'
        ]);
        Products::create([
            'name' => 'Dress 5',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '1',
            'price' => '400.50'
        ]);
        Products::create([
            'name' => 'Dress 6',
            'description' => 'Long dress with some additional properties',
            'add_details' => 'Color: Red, Blue, Purple, Grey, Pink',
            'featured' => '0',
            'price' => '800.50'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'name' => 'test',
            'description' => 'test new',
            'price' =>'24',
            'quantity' => '2',
            'models' => 'CBR1000RR Fireblade SP',
            'suppliers' => 'honda',
            'locations' => 'shaw boulevard mandaluyong city'
        ]);
    }
}

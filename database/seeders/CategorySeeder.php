<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Voorgerecht' => 1, 'Hoofdgerecht' => 2, 'Nagerecht' => 3, 'Drinken' => 4];

        foreach ($categories as $name => $order) {
            Category::firstOrCreate(['name' => $name], ['sort_order' => $order]);
        }
        //
    }
}

<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Seeder;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergens = ['Gluten', 'Schaaldieren', 'Eieren', 'Vis', 'Pindas', 'Soja', 'Melk', 'Noten',
            'Selderij', 'Mosterd', 'Sesamzaad', 'Sulfiet', 'Lupine', 'Weekdieren'];

        foreach ($allergens as $name) {
            Allergen::firstOrCreate(['name' => $name ]);

        }
        //
    }
}

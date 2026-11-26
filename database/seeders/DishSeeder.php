<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
            ['name' => 'Tomatensoep', 'category' => 'Voorgerecht', 'description' => 'Huisgemaakte soep van verse tomaten', 'price' => 6.50, 'allergens' => ['Selderij', 'Gluten']],
            ['name' => 'Garnalencocktail', 'category' => 'Voorgerecht', 'description' => 'Hollandse garnalen met cocktailsaus', 'price' => 9.50, 'allergens' => ['Schaaldieren', 'Eieren', 'Mosterd']],
            ['name' => 'Pizza Margherita', 'category' => 'Hoofdgerecht', 'description' => 'Tomaat en mozzarella', 'price' => 12.50, 'allergens' => ['Gluten', 'Melk']],
            ['name' => 'Zalm met groenten', 'category' => 'Hoofdgerecht', 'description' => 'Gegrilde zalm met seizoensgroenten', 'price' => 18.95, 'allergens' => ['Vis']],
            ['name' => 'Saté van kip', 'category' => 'Hoofdgerecht', 'description' => 'Kipsaté met pindasaus en rijst', 'price' => 15.50, 'allergens' => ['Pindas', 'Soja']],
            ['name' => 'Chocoladetaart', 'category' => 'Nagerecht', 'description' => 'Taart van pure chocolade met walnoten', 'price' => 6.95, 'allergens' => ['Gluten', 'Melk', 'Eieren', 'Noten']],
            ['name' => 'Fruitsalade', 'category' => 'Nagerecht', 'description' => 'Vers fruit van het seizoen', 'price' => 5.50, 'allergens' => []],
            ['name' => 'Cola', 'category' => 'Drinken', 'description' => 'Glas cola 33 cl', 'price' => 3.00, 'allergens' => []],
            ['name' => 'Witte wijn', 'category' => 'Drinken', 'description' => 'Glas droge witte wijn', 'price' => 5.50, 'allergens' => ['Sulfiet']],
        ];
        //
        foreach ($dishes as $data) {
            $category = Category::where('name', $data['category'])->first();

            $dish =Dish::firstOrCreate(
                ['name' => $data['name']], 
                ['category_id' => $category->id, 'description' =>$data['description'], 'price' => $data['price']]
            );

            $allergensIds = Allergen::whereIn('name', $data['allergens']) -> pluck('id');
            $dish->allergens()->sync($allergensIds);

        }
    }

}

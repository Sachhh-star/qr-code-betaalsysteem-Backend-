<?php

namespace Database\Seeders;

use App\Models\RestaurantTable;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            RestaurantTable::firstOrCreate([ 'number' => $i ], [ 'qr_token' => Str::random(32) ]);        
        }
        //
    }
}

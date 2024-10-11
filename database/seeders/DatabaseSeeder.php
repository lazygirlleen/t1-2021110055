<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++){
            $id = $faker->id();
            $product_name = $faker->name();
            $description = $faker->paragraph();
            $retail_price = $faker->randomFloat(2, 10, 100); // Adjust price range as needed
            $wholesale_price = $faker->randomFloat(2, 5, 50); // Adjust price range as needed
            $quantity = $faker->numberBetween(1, 100);
            $origin = $faker->countryCode();

            $created_at = $faker->dateTimeBetween('-2 years, now');

            DB::table('products')->insert([
                'id' => $id,
                'product_name' => $product_name,
                'description' => $description,
                'retail_price' => $retail_price,
                'wholesale_price' => $wholesale_price,
                'quantity' => $quantity,
                'origin' => $origin,
                'created_at' => $created_at,
            ]);
        }
        // User::factory()->create([

        // ]);
    }
}

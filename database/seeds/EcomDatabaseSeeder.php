<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class EcomDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');

        // Users Insert :
        foreach(range(1,2) as $index){
            $users = User::create([
                'name' => $faker->name,
                'isAdmin' => intval($faker->boolean),
                'email' => $faker->email,
                'password' => bcrypt('123admin'),
            ]);
        }

        //Categorys Insert :
        foreach(range(1,9) as $index){
           $Categorys = Category::create([
              'name' => $faker->word,
           ]);
        }

        // Products Insert :
        foreach(range(1,50) as $index){
            $products = Product::create([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'slug' => $faker->unique()->slug,
                'description' => $faker->text($maxNbChars = 300),
                'image' => $faker->imageUrl($width = 640, $height = 480, 'business', true),
                'price' => $faker->randomNumber($nbDigits = 2, $strict = false),
                'in_stock' => intval($faker->boolean),
                'status' => intval($faker->boolean),
                'Category_id' => Category::orderByRaw('RAND()')->first()->id,
            ]);
        }
    }
}

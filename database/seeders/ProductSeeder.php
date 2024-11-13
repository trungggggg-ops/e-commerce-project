<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\sanpham;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<=10; $i++)
        {
                sanpham::create([
                'name'=>$faker->word,
                'price'=>$faker->randomFloat(2,10,1000),
                'iddm'=>$faker->biasedNumberBetween(1,10),
                'view'=>$faker->randomFloat(2,10,1000),
                    
            ]);
        }

      
    
    }
    
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use Faker\Generator as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i=0; $i < 10 ; $i ++){
            $newProduct= new Product();
            $newProduct->name=$faker->name();
            $newProduct->slug=Str::slug($newProduct->name, '-');
            $newProduct->description=$faker->text(300);
            $newProduct->thumb='https://picsum.photos/200/300';
            $newProduct->price=$faker->randomFloat(1, 1, 999);
            $newProduct->available= $faker->boolean();
            $newProduct->save();
         }
    }
}

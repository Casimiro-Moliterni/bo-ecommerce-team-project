<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $categories=['Music','Sport','Videogames'];

        foreach($categories as $singleCategory){
          $newCategory= new Category();
          $newCategory->name=$singleCategory;
          $newCategory->slug=Str::slug($newCategory->name, '-');
          $newCategory->save();
        }
    }
}

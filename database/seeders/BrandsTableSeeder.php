<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Sony', 'Riot', 'Bulk', 'Nintendo', 'AmazonMusic'];

        foreach ($brands as $brandsName) {
            $newBrands = new Brand();
            $newBrands->name = $brandsName;
            $newBrands->slug = Str::slug($newBrands->name, '-');
            $newBrands->save();
        }


    }
}

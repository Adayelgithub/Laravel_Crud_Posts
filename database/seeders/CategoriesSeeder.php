<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('categories')->truncate();

        for ($i=0; $i< 5; $i++){
            DB::table('categories')->insert([
                'nombre' => $faker->name,
                'descripcion' => $faker->realText(100),
                'imagen' => Str::random(60),
            ]);
        }
        //
    }
}

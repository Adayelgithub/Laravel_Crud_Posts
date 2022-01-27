<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('posts')->truncate();

        for ($i=0; $i< 5; $i++){
            DB::table('posts')->insert([
                'title' => $faker->name,
                'body' => $faker->paragraph(),
                'image' => Str::random(60),
            ]);
        }
    }
}

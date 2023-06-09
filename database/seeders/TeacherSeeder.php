<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){

            DB::table('teachers')->insert([
                'name' => $faker->name,
                'age' => $faker->randomNumber(1,80),
                'mapel' => $faker->word()
            ]);
        }
    }
}

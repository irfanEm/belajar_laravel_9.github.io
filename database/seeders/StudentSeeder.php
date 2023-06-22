<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     ['id' => 1, 'name' => 'Muhamad', 'score'=> 99],
        //     ['id' => 2, 'name' => 'Irfan', 'score'=> 99],
        //     ['id' => 3, 'name' => 'Mustofa', 'score'=> 95],
        //     ['id' => 4, 'name' => 'Ibrahim', 'score'=> 94],
        //     ['id' => 5, 'name' => 'yusuf', 'score'=> 93]
        // ];
        // DB::table('students')->insert($data);
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 15; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'score' => $faker->numberBetween(0,100),
                'teacher_id' => $faker->numberBetween(1,10)

            ]);
        }
    }
}

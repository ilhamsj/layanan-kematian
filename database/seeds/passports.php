<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class passports extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            DB::table('passports')->insert([
                'name' => $faker->name,
                'date' => $faker->dateTime(),
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'office' => $faker->company,
                'filename' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }

    }
}

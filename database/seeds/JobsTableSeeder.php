<?php

use Illuminate\Database\Seeder;
use App\Jobs;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Jobs::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Jobs::create([
                'title' => $faker->sentence,
                'excerpt' => $faker->sentence,
                'location' => $faker->sentence,
                'category' => $faker->sentence,
                'description' => $faker->paragraph
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Generator as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $movie = new Movie();
            $movie->title = $faker->sentence();
            $movie->thumb = $faker->imageUrl(400, 300, 'Movie');
            $movie->description = $faker->paragraph();
            $movie->save();
        }
    }
}

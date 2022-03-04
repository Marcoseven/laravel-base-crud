<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence();
            $post->poster = $faker->paragraph(1);
            $post->date = $faker->date();
            $post->save();
        }
    }
}

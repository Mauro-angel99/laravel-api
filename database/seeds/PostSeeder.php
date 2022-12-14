<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
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
        for($i = 0; $i < 15; $i++){
            $new_post = new Post();

            $new_post->title = $faker->text(15);
            $new_post->user_id = 1;
            $new_post->slug = Str::slug($new_post->title, '-');;
            $new_post->content = $faker->paragraphs(2, true);
            $new_post->image = $faker->imageUrl(250, 250);

            $new_post->save();
        }
    }
}
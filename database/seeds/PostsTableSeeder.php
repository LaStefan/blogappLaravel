<?php

use Illuminate\Database\Seeder;



class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('posts')->insert([
            'title' => $faker->word,
            'body' => $faker->text(200),
            'user_id' => 1,
            'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
            'cover_image' => $faker->imageUrl($width = 640, $height = 480),
            
        ]);
        
        
    }
}

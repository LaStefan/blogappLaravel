<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        /*factory(App\User::class, 2)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });*/
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('12345678'),
        ]);
    }
}

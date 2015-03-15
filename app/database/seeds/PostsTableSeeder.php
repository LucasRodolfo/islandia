<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$min_user_id = User::first()->toArray()['id'];
		$max_user_id = User::all()->last()->toArray()['id'];

		foreach(range(1, 10) as $index)
		{
			Post::create([
				'title' => $faker->sentence(3),
				'content' => $faker->text(),
				'user' => $faker->numberBetween($min_user_id, $max_user_id), // getting a random user
			]);
		}
	}


}
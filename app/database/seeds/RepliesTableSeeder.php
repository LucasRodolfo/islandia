<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RepliesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$min_user_id = User::first()->toArray()['id'];
		$max_user_id = User::all()->last()->toArray()['id'];

		$min_post_id = Post::first()->toArray()['id'];
		$max_post_id = Post::all()->last()->toArray()['id'];

		foreach(range(1, 10) as $index)
		{
			Reply::create([
				'post' => $faker->numberBetween($min_post_id, $max_post_id), // getting a random post
				'user' => $faker->numberBetween($min_user_id, $max_user_id), // getting a random user
				'content' => $faker->text()
			]);
		}
	}

}
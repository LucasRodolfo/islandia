<?php

use Faker\Factory as Faker;

class VotesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$min_user_id = User::first()->toArray()['id'];
		$max_user_id = User::all()->last()->toArray()['id'];

		$min_post_id = Post::first()->toArray()['id'];
		$max_post_id = Post::all()->last()->toArray()['id'];
		
		foreach(range(1, 100) as $index)
		{
			Vote::create([
				'post' => $faker->numberBetween($min_post_id, $max_post_id), // getting a random post
				'user' => $faker->numberBetween($min_user_id, $max_user_id), // getting a random user
				'value' => $faker->randomElement([-1, 1])
			]);
		}
	}

}
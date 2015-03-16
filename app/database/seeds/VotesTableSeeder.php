<?php

use Faker\Factory as Faker;

class VotesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$min_user_id = User::first()->toArray()['id'];
		$max_user_id = User::all()->last()->toArray()['id'];

		$min_reply_id = Reply::first()->toArray()['id'];
		$max_reply_id = Reply::all()->last()->toArray()['id'];

		$min_comment_id = Comment::first()->toArray()['id'];
		$max_comment_id = Comment::all()->last()->toArray()['id'];
		
		foreach(range(1, 150) as $index)
		{
			Vote::create([
				'votable_type' => 'Reply',
				'votable_id' => $faker->numberBetween($min_reply_id, $max_reply_id), // getting a random reply
				'user' => $faker->numberBetween($min_user_id, $max_user_id), // getting a random user
				'value' => $faker->randomElement([-1, 1])
			]);

			Vote::create([
				'votable_type' => 'Comment',
				'votable_id' => $faker->numberBetween($min_comment_id, $max_comment_id), // getting a random comment
				'user' => $faker->numberBetween($min_user_id, $max_user_id), // getting a random user
				'value' => $faker->randomElement([-1, 1])
			]);
		}
	}

}
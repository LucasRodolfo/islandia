<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$min_user_id = User::first()->toArray()['id'];
		$max_user_id = User::all()->last()->toArray()['id'];

		$min_reply_id = Reply::first()->toArray()['id'];
		$max_reply_id = Reply::all()->last()->toArray()['id'];

		foreach(range(1, 50) as $index)
		{
			Comment::create([
				'content' => $faker->text(),
				'user' => $faker->numberBetween($min_user_id, $max_user_id),
				'reply' => $faker->numberBetween($min_reply_id, $max_reply_id)
			]);
		}
	}

}
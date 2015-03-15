<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'Daniel Travieso',
			'email' => 'daniel.travieso@conpec.com.br',
			'password' => Hash::make('conpec123'),
			'category' => Category::where('title', '=', 'Administradores')->first()->id
		]);

		User::create([
			'name' => 'Felipe Rodrigues',
			'email' => 'felipe.videira@conpec.com.br',
			'password' => Hash::make('conpec123'),
			'category' => Category::where('title', '=', 'Administradores')->first()->id
		]);
	}

}
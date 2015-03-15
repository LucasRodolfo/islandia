<?php


class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        Category::create([
            'title' => 'Administradores'
        ]);

        Category::create([
            'title' => 'Usuarios'
        ]);
    }

}

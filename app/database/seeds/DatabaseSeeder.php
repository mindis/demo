<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// Call registered package seeders
		foreach ($this->container['seeders']->getSeeders() as $seeder)
		{
			// dd($this->container[$seeder]);
			$this->call($seeder);
		}

		// $this->call('UserTableSeeder');
	}

}
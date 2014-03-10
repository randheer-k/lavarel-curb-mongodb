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

		$this->call('UsersTableSeeder');
	}



}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete(); 
        User::create(array('uid' => 1));
        User::create(array('uid' => 2));
        User::create(array('uid' => 3));
    }

}
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
		DB::table('users')->truncate();
		App\User::create([
			'name' => 'thequang',
			'email' =>'thequang@gmail.com',
			'password' => bcrypt('thequang')
		]);
    }
}

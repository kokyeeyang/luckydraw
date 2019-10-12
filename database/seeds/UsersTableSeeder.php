<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      //
	  	User::create([
	  		'name' => 'testinguser',
	  		'email' => 'testing_user@gmail.com',
	  		'privilege' => 'admin',
	  		'password' => Hash::make('testingpassword'),
	  		'remember_token' => mt_rand(), 
	  	]);
  }
}

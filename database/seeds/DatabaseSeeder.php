<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Category::create(['name'=>'Classical']);
    	Category::create(['name'=>'Animals']);
    	Category::create(['name'=>'Funny']);
    	Category::create(['name'=>'SMS']);
    	Category::create(['name'=>'Alarms']);
    	Category::create(['name'=>'Children']);
    	Category::create(['name'=>'Standard']);
    	Category::create(['name'=>'Music']);
    	Category::create(['name'=>'Holiday']);
    	Category::create(['name'=>'Nature']);

    	User::create([

    		'name'=>'admin',
    		'email'=>'admin@gmail.com',
			'role' => 'admin',
    		'password'=>bcrypt('password123'),
    		'email_verified_at'=>NOW(),
    		



    	]);
        // $this->call(UsersTableSeeder::class);
    }
}

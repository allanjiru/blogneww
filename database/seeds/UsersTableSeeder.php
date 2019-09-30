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
       $user = App\User::create([

        	'name' => 'Allan',
        	'email' => 'allanjiru@gmail.com',
        	'password' => bcrypt('123456789'),
            'admin' => 1


        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatar/face5.jpg',
            'about' => 'This is a test',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',


        ]);
    }
}

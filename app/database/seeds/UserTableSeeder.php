<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(
        	array(
        		'name' => 'Ts8060',
        		'username' => 'Ts8060',
        		'email' => 'foo@bar.com'
        	)
        );
    }

}
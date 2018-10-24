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
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "duyit192@hotmail.com",
            'password' => bcrypt('123456'),
            'status' => 1,
            'accept_dashboard' =>1,
            'email_verified_at' =>new DateTime,
            'remember_token'=>"mBlEQc3khKoyFYwOXn8KQ4UkqmBalmmM29vTSVqr9gw5nYD8qaxmhUAgrKgr",
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
        ]);
    }
}

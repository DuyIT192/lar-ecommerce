<?php

use Illuminate\Database\Seeder;

class User_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->insert([
            'user_imager' => "default_avatar.png",
            'name' => "Duy RNT",
            'gender' => "0",
            'birthday' => "1993/2/2",
            'email' => "d@gmail.com",
            'user_id' => 1,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
        ]);
    }
}

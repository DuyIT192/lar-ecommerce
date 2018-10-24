<?php

use Illuminate\Database\Seeder;

class UserPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_numbers')->insert([
            'user_id' =>1,
            'region_code' => "vn",
            'country_code' => "84",
            'national_number' => "368638658",
            'e164_format' =>"+84368638658",
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
        ]);
    }
}

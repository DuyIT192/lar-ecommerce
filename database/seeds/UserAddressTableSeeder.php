<?php

use Illuminate\Database\Seeder;

class UserAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'city' => 48,
            'district' => 492,
            'ward' => 20230,
            'street' => "K30/8 Lương Ngọc Quyến",
            'user_id' => 1,
        ]);
    }
}

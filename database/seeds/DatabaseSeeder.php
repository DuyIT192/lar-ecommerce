<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*-- php artisan db:seed
        -- php artisan db:seed --class=UsersTableSeeder*/
        $this->call(UsersTableSeeder::class);
        $this->call(User_DetailsTableSeeder::class);
        $this->call(UserAddressTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserPhoneSeeder::class);
        $this->call(ModelHasRoleSeeder::class);
    }
}

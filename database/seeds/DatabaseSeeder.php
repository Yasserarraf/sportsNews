<?php

use Illuminate\Database\Seeder;
use \Database\Seeders\RolesTableSeeder;
use \Database\Seeders\UsersTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

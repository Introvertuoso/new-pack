<?php

namespace Database\Seeders;

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
        $this->call([
            AbilitySeeder::class,
            RoleSeeder::class,
            AbilityRoleSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class,
            RawMaterialSeeder::class,
            ProductSeeder::class
        ]);
    }
}

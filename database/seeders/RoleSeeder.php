<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 admin
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);
        // 2 owner
        DB::table('roles')->insert([
            'name' => 'owner',
        ]);
        // 3 salesman
        DB::table('roles')->insert([
            'name' => 'salesman',
        ]);
        // 4 production-manger
        DB::table('roles')->insert([
            'name' => 'production-manager',
        ]);
        // 5 treasurer
        DB::table('roles')->insert([
            'name' => 'treasurer',
        ]);
        // 6 accountant
        DB::table('roles')->insert([
            'name' => 'accountant',
        ]);
        // 7 none
        DB::table('roles')->insert([
            'name' => 'none',
        ]);
    }
}

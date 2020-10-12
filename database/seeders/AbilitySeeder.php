<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user
        // 1
        DB::table('abilities')->insert([
            'name' => 'read-user',
        ]);
        // 2
        DB::table('abilities')->insert([
            'name' => 'write-user',
        ]);

        // client
        // 3
        DB::table('abilities')->insert([
            'name' => 'read-client',
        ]);
        // 4
        DB::table('abilities')->insert([
            'name' => 'write-client',
        ]);

        // product
        // 5
        DB::table('abilities')->insert([
            'name' => 'read-product',
        ]);
        // 6
        DB::table('abilities')->insert([
            'name' => 'write-product',
        ]);

        // order
        // 7
        DB::table('abilities')->insert([
            'name' => 'read-order',
        ]);
        // 8
        DB::table('abilities')->insert([
            'name' => 'write-order',
        ]);

        // raw-material
        // 9
        DB::table('abilities')->insert([
            'name' => 'read-material',
        ]);
        // 10
        DB::table('abilities')->insert([
            'name' => 'write-material',
        ]);

        // role
        // 11
        DB::table('abilities')->insert([
            'name' => 'read-role',
        ]);
        // 12
        DB::table('abilities')->insert([
            'name' => 'write-role',
        ]);

        // ability
        // 13
        DB::table('abilities')->insert([
            'name' => 'read-ability',
        ]);
        // 14
        DB::table('abilities')->insert([
            'name' => 'write-ability',
        ]);
    }
}

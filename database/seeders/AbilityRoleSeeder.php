<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilityRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 admin wU-wC-wP-wO-wM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '2'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '4'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '6'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '8'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '10'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '12'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '1',
            'ability_id' => '14'
        ]);


        // 2 owner wU-wC-wP-wO-wM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '2',
            'ability_id' => '2'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '2',
            'ability_id' => '4'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '2',
            'ability_id' => '6'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '2',
            'ability_id' => '8'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '2',
            'ability_id' => '10'
        ]);


        // 3 salesman xU-wC-wP-wO-rM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '3',
            'ability_id' => '4'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '3',
            'ability_id' => '6'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '3',
            'ability_id' => '8'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '3',
            'ability_id' => '9'
        ]);


        // 4 production-manager xU-xC-rP-rO-wM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '4',
            'ability_id' => '5'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '4',
            'ability_id' => '7'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '4',
            'ability_id' => '10'
        ]);


        // 5 treasurer xU-xC-xP-rO-wM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '5',
            'ability_id' => '7'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '5',
            'ability_id' => '10'
        ]);


        // 6 accountant xU-wC-rP-rO-wM-xR-xA
        DB::table('ability_role')->insert([
            'role_id' => '6',
            'ability_id' => '4'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '6',
            'ability_id' => '5'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '6',
            'ability_id' => '7'
        ]);
        DB::table('ability_role')->insert([
            'role_id' => '6',
            'ability_id' => '10'
        ]);

        // 7 none
    }
}

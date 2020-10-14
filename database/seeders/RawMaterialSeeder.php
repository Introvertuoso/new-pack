<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RawMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raw_materials')->insert([
            'name' => 'Spanish 2mm Paper',
            'condition' => 'good',
            'amount' => '1000'
        ]);
    }
}

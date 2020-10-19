<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'client_name' => 'Fireman',
            'amount' => '0',
            'type' => 'offset'
        ]);

        DB::table('products')->insert([
            'client_name' => 'Fireman',
            'amount' => '0',
            'type' => 'flexographic'
        ]);
    }
}

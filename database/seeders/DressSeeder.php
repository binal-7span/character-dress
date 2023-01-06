<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dresses')->insert([
            [
                'name' => 'Dress 1',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Dress 2',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Dress 3',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Dress 4',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Dress 5',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

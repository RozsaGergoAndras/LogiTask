<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class WorkerstatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workerstates')->insert([
            ['id' => 0, 'name' => 'Not Available'],
            ['id' => 1, 'name' => 'Available'],
            ['id' => 2, 'name' => 'Busy'],
        ]);
    }
}

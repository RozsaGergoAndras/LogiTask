<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TasktypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasktypes')->insert([
            ['TaskTypeName' => 'Fetch'],
            ['TaskTypeName' => 'Build'],
            ['TaskTypeName' => 'Store'],
            ['TaskTypeName' => 'PreparePackage'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haris')->insert([
            ['hari' => 'senin'],
            ['hari' => 'selasa'],
            ['hari' => 'rabu'],
            ['hari' => 'kamis'],
            ['hari' => 'jumat'],
            ['hari' => 'sabtu']
        ]);
    }
}

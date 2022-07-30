<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class staffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
            'staffName'=>str::random(10),
            'staffPass'=>rand(1,10),
            'created_at'=>date("y-m-d H-i-s"),
            'updated_at'=>date("y-m-d H-i-s"),
        ]);
    }
}

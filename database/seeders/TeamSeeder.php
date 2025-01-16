<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Seed the teams table.
     */
    public function run(): void
    {
        if (DB::table('teams')->where('id', 1)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 1,
                'name' => 'KLA',
                'group' => 'GPOL'
            ]);
        }
        if (DB::table('teams')->where('id', 2)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 2,
                'name' => 'System Operator',
                'group' => 'GSIT'
            ]);
        }
        if (DB::table('teams')->where('id', 3)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 3,
                'name' => 'EAI',
                'group' => 'GSIT'
            ]);
        }
        if (DB::table('teams')->where('id', operator: 4)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 4,
                'name' => 'BASE24',
                'group' => 'GSIT'
            ]);
        }
        if (DB::table('teams')->where('id', 5)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 5,
                'name' => 'Network',
                'group' => 'GSIT'
            ]);
        }
        if (DB::table('teams')->where('id', 6)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 6,
                'name' => 'DBA',
                'group' => 'GSIT'
            ]);
        }
        if (DB::table('teams')->where('id', 7)->doesntExist()) {
            DB::table('teams')->insert([
                'id' => 7,
                'name' => 'Middleware',
                'group' => 'GSIT'
            ]);
        }


    }
}
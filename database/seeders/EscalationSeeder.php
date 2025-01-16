<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscalationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = ['1', '2', '3', 'Breach'];

        for ($i = 1; $i <= 9; $i++) {
            if (DB::table('escalations')->where('ticket_id', $i)->where('type', 0)->doesntExist()) {
                DB::table('escalations')->insert([
                    'ticket_id' => $i,
                    'task_id' => null,
                    'parent_type' => 0,
                    'type' => 0,
                    'level' => $levels[array_rand($levels)],
                    'time_left' => now()->addDays(rand(1, 30)),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } 
            if (DB::table('escalations')->where('ticket_id', $i)->where('type', 1)->doesntExist()) {
                DB::table('escalations')->insert([
                    'ticket_id' => $i,
                    'task_id' => null,
                    'parent_type' => 0,
                    'type' => 1,
                    'level' => $levels[array_rand($levels)],
                    'time_left' => now()->addDays(rand(1, 30)),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
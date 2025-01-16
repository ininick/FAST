<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TicketDetailsSeeder::class);
        $this->call(TicketSeeder::class);
        $this->call(EscalationSeeder::class);
        
    }
}
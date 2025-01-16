<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Submitted', 'Approved', 'Waiting for Customer', 'Active', 'Fulfilled', 'Closed'];
        $urgencies = ['Low', 'Medium', 'High'];

        $dateString = now()->format('dmy');
        $counter = 1;

        for ($i = 1; $i <= 7; $i++) {
            $ticketDetailsId = $dateString . str_pad($counter, 3, '0', STR_PAD_LEFT);
            if (DB::table('tickets')->where('id', $i)->doesntExist()) {
                DB::table('tickets')->insert([
                    'id' => $i,
                    'customer_id' => 1,
                    'owner_id' => 2,
                    'ticket_details_id' => $ticketDetailsId,
                    'status' => $statuses[array_rand($statuses)],
                    'urgency' => $urgencies[array_rand($urgencies)],
                    'escalation' => 'None',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $counter++;
            }
        }
    }
}
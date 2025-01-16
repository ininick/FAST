<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = [
            ['name' => 'Kendala Fitur A', 'description' => 'Ada kendala pada fitur A', 'fulfillment' => 'Fitur A sudah diperbaiki oleh tim X'],
            ['name' => 'Kendala Fitur B', 'description' => 'Ada kendala pada fitur B', 'fulfillment' => 'Fitur B sedang dihandle oleh tim X'],
            ['name' => 'Kendala Fitur C', 'description' => 'Ada kendala pada fitur C', 'fulfillment' => 'Fitur C sudah diperbaiki oleh tim X'],
            ['name' => 'Kendala Fitur D', 'description' => 'Ada kendala pada fitur D', 'fulfillment' => 'Fitur D sedang dihandle oleh tim Y'],
            ['name' => 'Kendala Fitur E', 'description' => 'Ada kendala pada fitur E', 'fulfillment' => 'Fitur E sudah diperbaiki oleh tim Z'],
            ['name' => 'Kendala Fitur F', 'description' => 'Ada kendala pada fitur F', 'fulfillment' => 'Fitur F sedang dihandle oleh tim W'],
            ['name' => 'Kendala Fitur G', 'description' => 'Ada kendala pada fitur G', 'fulfillment' => 'Fitur G sudah diperbaiki oleh tim V']
        ];

        $date = now();
        $dateString = $date->format('dmy');
        
        foreach ($tickets as $index => $ticket) {
            $id = $dateString . str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            if (DB::table('ticket_details')->where('id', $id)->doesntExist()) {
                DB::table('ticket_details')->insert([
                    'id' => $id,
                    'name' => $ticket['name'],
                    'description' => $ticket['description'],
                    'fulfillment' => $ticket['fulfillment'],
                    'created_time' => $date,
                    'updated_time' => $date
                ]);
            }
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'team_id' => 2, // Assuming a team with ID 1 exists
            'name' => 'Nickolas Mathew Geraldinho',
            'email' => 'nickmathew331@gmail.com',
            'username' => 'sysonick',
            'password' => Hash::make('inisyso'),
            'picture' => null,
            'work_location' => 'Office',
            'status' => 'Available',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'team_id' => 4, // Assuming a team with ID 1 exists
            'name' => 'Matthew Albert Setiawan',
            'email' => 'matthew_setiawan@bca.co.id',
            'username' => 'picmatthew',
            'password' => Hash::make('inipic'),
            'picture' => null,
            'work_location' => 'Office',
            'status' => 'Busy',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'team_id' => 1, // Assuming a team with ID 1 exists
            'name' => 'Vanechka Radja Winata',
            'email' => 'vanechka_winata@bca.co.id',
            'username' => 'gpolvanechka',
            'password' => Hash::make('inigpol'),
            'picture' => null,
            'work_location' => 'Remote',
            'status' => 'Offline',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
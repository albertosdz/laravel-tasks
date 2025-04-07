<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}

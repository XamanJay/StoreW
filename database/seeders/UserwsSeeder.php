<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserwsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userws')->insert([
                    'firstname' => 'Nathan',
                    'lastname' => 'Kirilenko',
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => '3000...',
                    'type' => 'admin',
                    'remember_token' => '100',
                    'email_verified_at' => now(),
                    'active' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'deleted_at' => now()
        ]);

        
    }
}

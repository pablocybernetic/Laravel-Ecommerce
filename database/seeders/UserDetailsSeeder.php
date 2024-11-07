<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserDetailsSeeder extends Seeder
{
    public function run()
    {
        // Sample data for user details with Kenyan phone numbers and addresses
        DB::table('user_details')->insert([
            [
                'user_id' => 1,
                'phone' => '+254712345678',
                'pin_code' => '00100',
                'address' => 'Nairobi, Kenya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'phone' => '+254798765432',
                'pin_code' => '00200',
                'address' => 'Mombasa, Kenya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'phone' => '+254701234567',
                'pin_code' => '20100',
                'address' => 'Nakuru, Kenya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'phone' => '+254731234567',
                'pin_code' => '40100',
                'address' => 'Kisumu, Kenya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'phone' => '+254712678345',
                'pin_code' => '30100',
                'address' => 'Eldoret, Kenya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

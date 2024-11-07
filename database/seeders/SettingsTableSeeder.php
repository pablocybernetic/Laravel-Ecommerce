<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// database/seeders/SettingsTableSeeder.php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            'website_name' => 'My Website',
            'website_url' => 'https://mywebsite.com',
            'page_title' => 'Welcome to My Website',
            'meta_keyword' => 'website, my website, example',
            'meta_description' => 'This is an example website description.',
            'address' => '123 Example Street, City, Country',
            'phone1' => '123-456-7890',
            'phone2' => '098-765-4321',
            'email1' => 'info@mywebsite.com',
            'email2' => 'support@mywebsite.com',
            'facebook' => 'https://facebook.com/mywebsite',
            'twitter' => 'https://twitter.com/mywebsite',
            'instagram' => 'https://instagram.com/mywebsite',
            'youtube' => 'https://youtube.com/mywebsite',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

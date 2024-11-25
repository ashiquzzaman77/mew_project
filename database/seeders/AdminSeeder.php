<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Insert an example admin record
        Admin::create([
            'name' => 'Md Ashiquzzaman',
            'email' => 'ashiquzzaman.rajib.cse@gmail.com',
            'password' => Hash::make('password'), // Use Hash to securely store passwords
        ]);
    }
}

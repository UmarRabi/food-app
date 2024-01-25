<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'firstname' => "Vivia",
            'lastname' => "Yusuf",
            'phone' => "09081918299",
            'username' => "admin",
            'address' => "Mantara street",
            'postal_code' => "019921",
            'email' => "admin@ordaar.com",
            'password' => Hash::make("Password@2"),
            "type" => 2
        ]);
    }
}

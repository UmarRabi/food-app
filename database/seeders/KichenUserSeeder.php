<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KichenUserSeeder extends Seeder
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
            'firstname' => "Chef",
            'lastname' => "Kichen",
            'phone' => "07001234567",
            'username' => "kichen",
            'address' => "Harare street",
            'postal_code' => "019921",
            'email' => "kitchen@ordaar.com",
            'password' => Hash::make("Password@1"),
            "type" => 1
        ]);
    }
}

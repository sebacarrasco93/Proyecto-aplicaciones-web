<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'DELETE_ME',
            'email' => 'rodrigo@chang.cl',
            'password' => Hash::make('Maniac300'),
            'email_verified_at' => now(),
        ]);
    }
}

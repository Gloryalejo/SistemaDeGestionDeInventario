<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Francisco Quintero',
            'email' => 'francisco@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
        $user = new User();
        $user->id = 1;
        $user->name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}

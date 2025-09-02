<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Miguel Yupanqui',
            'email' => 'gerardoyupanqui18@gmail.com',
            'password' => bcrypt('codicia0210'),
            'dni' => '7319992',
            'phone' => '954140212',
            'address' => 'Caller falsa 123'
        ])->assignRole('Doctor');
    }
}

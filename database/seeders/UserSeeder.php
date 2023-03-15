<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Carlos Boca',
            'email' => 'carlos.bcoa@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        
        User::factory(99)->create();
    }
}

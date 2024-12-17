<?php

namespace Database\Seeders;

use App\Models\Shift;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin Medic',
            'email' => 'admin@medic.umn.ac.id',
            'password' => bcrypt('UMNmedic'),
            'nim' => '000000000',
            'is_verified' => TRUE,
        ]);

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@student.umn.ac.id',
            'password' => bcrypt('password'),
            'nim' => '000000001',
            'is_verified' => TRUE,
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        Shift::create([
            'shift_start' => '09:00:00',
            'shift_end' => '11:00:00',
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');

        $this->call(ContactUsSeeder::class);
    }
}

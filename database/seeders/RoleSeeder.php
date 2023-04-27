<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'id' => 1,
            'role' => 'Admin',
        ]);
        Role::create([
            'id' => 2,
            'role' => 'SeniorEngineer',
        ]);
        Role::create([
            'id' => 3,
            'role' => 'Engineer',
        ]);
        Role::create([
            'id' =>4,
            'role' => 'SeniorManager',
        ]);
        Role::create([
            'id' => 5,
            'role' => 'Manager',
        ]);
        Role::create([
            'id' => 6,
            'role' => 'SeniorSupport',
        ]);
        Role::create([
            'id' => 7,
            'role' => 'Support',
        ]);
        Role::create([
            'id' => 8,
            'role' => 'Mounter',
        ]);
        Role::create([
            'id' => 9,
            'role' => 'Storekeeper',
        ]);
        Role::create([
            'id' => 10,
            'role' => 'Marketer',
        ]);
        Role::create([
            'id' => 11,
            'role' => 'Accountant',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CityForUsers;
use Illuminate\Database\Seeder;

class CityForUsersSeeder extends Seeder
{
    public function run()
    {
        CityForUsers::create([
            'id' => 1,
            'city' => 'Алматы',
        ]);
        CityForUsers::create([
            'id' => 2,
            'city' => 'Астана',
        ]);
        CityForUsers::create([
            'id' => 3,
            'city' => 'Атырау',
        ]);
        CityForUsers::create([
            'id' => 4,
            'city' => 'Актау',
        ]);
        CityForUsers::create([
            'id' => 5,
            'city' => 'Актобе',
        ]);
        CityForUsers::create([
            'id' => 6,
            'city' => 'Караганда',
        ]);
        CityForUsers::create([
            'id' => 7,
            'city' => 'Уральск',
        ]);
        CityForUsers::create([
            'id' => 8,
            'city' => 'Усть-Каменогорск',
        ]);
        CityForUsers::create([
            'id' => 9,
            'city' => 'Павлодар',
        ]);
        CityForUsers::create([
            'id' => 10,
            'city' => 'Шымкент',
        ]);
        CityForUsers::create([
            'id' => 11,
            'city' => 'Костанай',
        ]);
        CityForUsers::create([
            'id' => 12,
            'city' => 'Талдыкорган',
        ]);
    }
}

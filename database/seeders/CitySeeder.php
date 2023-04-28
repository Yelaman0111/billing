<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {
        City::create([
            'id' => 1,
            'locality_id' => 1,
            'title' => 'город Атбасар',
        ]);
        City::create([
            'id' => 2,
            'locality_id' => 2,
            'title' => 'Айдар (Алматинская область)',
        ]);
        City::create([
            'id' => 3,
            'locality_id' => 3,
            'title' => 'город Аксай',
        ]);
        City::create([
            'id' => 4,
            'locality_id' => 4,
            'title' => 'село Кордай',
        ]);
        City::create([
            'id' => 5,
            'locality_id' => 5,
            'title' => 'город Каркаралинск',
        ]);
        City::create([
            'id' => 6,
            'locality_id' => 6,
            'title' => 'село Фёдоровка',
        ]);
        City::create([
            'id' => 7,
            'locality_id' => 7,
            'title' => 'село Жосалы',
        ]);
        City::create([
            'id' => 8,
            'locality_id' => 8,
            'title' => 'село Темирлановка',
        ]);
        City::create([
            'id' => 9,
            'locality_id' => 9,
            'title' => 'село Шарбакты',
        ]);
        City::create([
            'id' => 10,
            'locality_id' => 10,
            'title' => 'село Карааул',
        ]);
        

         City::create([
            'id' => 11,
            'locality_id' => 11,
            'title' => 'Чапаево (Алматинская область)',
        ]); City::create([
            'id' => 12,
            'locality_id' => 12,
            'title' => 'Кокозек (Аксуский район)',
        ]);

         City::create([
            'id' => 13,
            'locality_id' => 13,
            'title' => 'Бояулы',
        ]);
        City::create([
            'id' => 14,
            'locality_id' => 14,
            'title' => 'Коктал (Балхашский район)',
        ]);
        City::create([
            'id' => 15,
            'locality_id' => 15,
            'title' => 'Жетыген (село)',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run()
    {
        Region::create([
            'id' => 1,
            'title' => 'город Астана',
        ]);
        Region::create([
            'id' => 2,
            'title' => 'город Алматы',
        ]);
        Region::create([
            'id' => 3,
            'title' => 'Акмолинская область',
        ]);
        Region::create([
            'id' => 4,
            'title' => 'Актюбинская область',
        ]);
        Region::create([
            'id' => 5,
            'title' => 'Алматинская область',
        ]);
        Region::create([
            'id' => 6,
            'title' => 'Атырауская область',
        ]);
        Region::create([
            'id' => 7,
            'title' => 'Западно-Казахстанская область',
        ]);
        Region::create([
            'id' => 8,
            'title' => 'Жамбылская область',
        ]);
        Region::create([
            'id' => 9,
            'title' => 'Карагандинская область',
        ]);Region::create([
            'id' => 10,
            'title' => 'Костанайская область',
        ]);
        Region::create([
            'id' => 11,
            'title' => 'Кызылординская область',
        ]);
        Region::create([
            'id' => 12,
            'title' => 'Мангистауская область',
        ]);
        Region::create([
            'id' => 13,
            'title' => 'Туркестанская область',
        ]);
        Region::create([
            'id' => 14,
            'title' => 'Павлодарская область',
        ]);
        Region::create([
            'id' => 15,
            'title' => 'Северо-Казахстанская область',
        ]);
        Region::create([
            'id' => 16,
            'title' => 'Восточно-Казахстанская область',
        ]);
        Region::create([
            'id' => 17,
            'title' => 'город Шымкент',
        ]);
        Region::create([
            'id' => 18,
            'title' => 'Жетысу область (Талдыкорган)',
        ]);
    }
}

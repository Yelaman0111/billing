<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    public function run()
    {
        Locality::create([
            'id' => 1,
            'title' => 'Аккольский район',
            'region_id' => 3,
        ]);
        Locality::create([
            'id' => 2,
            'title' => 'Айтекебийский район',
            'region_id' => 4,
        ]);
        Locality::create([
            'id' => 3,
            'title' => 'Аксуский район',
            'region_id' => 5,
        ]);
        Locality::create([
            'id' => 4,
            'title' => 'Жылыойский район',
            'region_id' => 6,
        ]);
        Locality::create([
            'id' => 5,
            'title' => 'Акжаикский район',
            'region_id' => 7,
        ]);
        Locality::create([
            'id' => 6,
            'title' => 'Байзакский район',
            'region_id' => 8,
        ]);
        Locality::create([
            'id' => 7,
            'title' => 'Абайский район',
            'region_id' => 9,
        ]);
        Locality::create([
            'id' => 8,
            'title' => 'Алтынсаринский район',
            'region_id' => 10,
        ]);
        Locality::create([
            'id' => 9,
            'title' => 'Аральский район',
            'region_id' => 11,
        ]);
        Locality::create([
            'id' => 10,
            'title' => 'Бейнеуский район',
            'region_id' => 12,
        ]);
        Locality::create([
            'id' => 11,
            'title' => 'Байдибекский район',
            'region_id' => 13,
        ]);
        Locality::create([
            'id' => 12,
            'title' => 'Актогайский район',
            'region_id' => 14,
        ]);
        Locality::create([
            'id' => 13,
            'title' => 'Район Шал акына',
            'region_id' => 15,
        ]);
        Locality::create([
            'id' => 14,
            'title' => 'Усть-Каменогорск',
            'region_id' => 16,
        ]);

    }
}

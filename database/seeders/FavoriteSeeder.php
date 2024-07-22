<?php

namespace Database\Seeders;

use App\Models\Favorite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favorite::create([
            'traject_name' => 'nimes',
            'user_id' => '1',
        ]);

        Favorite::create([
            'traject_name' => 'camp naturiste',
            'user_id' => '2',
        ]);

        Favorite::create([
            'traject_name' => 'camp naturiste extreme',
            'user_id' => '3',
        ]);
    }
}

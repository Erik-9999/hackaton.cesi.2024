<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Package::create([
            'name' => 'Pas cher',
            'content' => 'LLorem ipsum dolor sit amet',
            'price' => 5,
        ]);

        Package::create([
            'name' => 'Cher',
            'content' => 'LLorem ipsum dolor sit amet',
            'price' => 10,
        ]);

        Package::create([
            'name' => 'Très cher',
            'content' => 'LLorem ipsum dolor sit amet',
            'price' => 15,
        ]);
    }
}

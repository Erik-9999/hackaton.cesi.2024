<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Charli',
            'last_name' => 'Pine',
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('erik123456'),
            'phone' => fake()->phoneNumber(10),
            'address' => fake()->address(),
            'postal_code' => fake()->postcode(5),
        ]);

        User::create([
            'first_name' => 'Nathan',
            'last_name' => Str::random(5),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('nathan123456'),
            'phone' => fake()->phoneNumber(10),
            'address' => fake()->address(),
            'postal_code' => fake()->postcode(5),
        ]);

        User::create([
            'first_name' => 'Seb',
            'last_name' => Str::random(5),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('seb123456'),
            'phone' => fake()->phoneNumber(10),
            'address' => fake()->address(),
            'postal_code' => fake()->postcode(5),
        ]);
    }
}

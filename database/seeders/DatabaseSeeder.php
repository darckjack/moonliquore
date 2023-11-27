<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Drink::create([
            'name' => 'Mojito',
            'description' => 'Bebida Tipica de cuba',
            'ingredients' => 'ron, menta, limon, azucar, hielo'
        ]);

        \App\Models\Drink::create([
            'name' => 'Mojito 2',
            'description' => 'Bebida Tipica de cuba',
            'ingredients' => 'ron, menta, limon, azucar, hielo'
        ]);

        \App\Models\Drink::create([
            'name' => 'Mojito 3',
            'description' => 'Bebida Tipica de cuba',
            'ingredients' => 'ron, menta, limon, azucar, hielo'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

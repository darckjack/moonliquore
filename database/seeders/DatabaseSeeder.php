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
            'image_url' => 'https://www.monin.com/media/catalog/product/cache/086f110b92ec89cebc323a4780ab42bd/4/2/42240b83-6ed9-438c-ae84-19872c89f777-2.png',
            'description' => 'Bebida Tipica de cuba',
            'ingredients' => 'ron, menta, limon, azucar, hielo'
        ]);

        \App\Models\Drink::create([
            'name' => 'Cubalibre',
            'image_url' => 'https://havana-club.com/wp-content/uploads/cache/2020/10/11_HCE_CUBALIBRE_0127_BASE/2108993614.png',
            'description' => 'Bebida Tipica de cuba',
            'ingredients' => 'ron, refresco de cola, limon, hielo'
        ]);

        \App\Models\Drink::create([
            'name' => 'Martini',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/10/Dry_Martini-2.jpg',
            'description' => 'Uno de los cocteles mas populares',
            'ingredients' => 'ginebra, vermut, aceituna'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

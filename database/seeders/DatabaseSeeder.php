<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Eleves;
use Illuminate\Database\Seeder;
use Database\Seeders\BatimentsSeeder;
use Database\Seeders\FormationsSeeder;
use Database\Seeders\TypeFormationssSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eleves::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            BatimentsSeeder::class,
            FormationsSeeder::class,
            TypeFormationssSeeder::class,
        ]);
    }
}

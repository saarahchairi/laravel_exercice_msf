<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BatimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('batiments')->insert([
            'nom' => "Molengeek",
            'description' => "Notre bâtiment se trouve dans la collune de Molenbeek, près de la place communale. Dans ce bâtiment nous proposons 4 types de formation. La cooding school, le Marketing Lab, level up et les formations chèques TIC.",
        ]);

    }
}

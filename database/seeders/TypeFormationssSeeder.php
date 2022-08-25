<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeFormationssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formationsses')->insert([
            [
                'nom' => "Cooding School 23",
            ],
            [
                'nom' => "Cooding School 24",
            ],
            [
                'nom' => "Cooding School 25",
            ],
            [
                'nom' => "Marketing Lab 1",
            ],
            [
                'nom' => "Marketing Lab 2",
            ],
            [
                'nom' => "Marketing Lab 3",
            ],
            [
                'nom' => "Level Up 3",
            ],
            [
                'nom' => "Chèque TIC 5",
            ],
            [
                'nom' => "IA 1",
            ],
            [
                'nom' => "Cyber Sécurité 1",
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ElevesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleves')->insert([
            "nom"=> Faker::create()->firstName,
            "prenom"=> Faker::create()->lastName,
            "age"=> Faker::create()->numberBetween($min = 18, $max = 30),
            "description"=> Faker::create()->text($maxNbChars = 200),
            "etat"=> Faker::create()->jobTitle,
        ]);
    }
}

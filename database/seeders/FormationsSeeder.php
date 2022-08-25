<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'nom' => "Cooding School",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ],
            [
                'nom' => "Marketing Lab",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ],
            [
                'nom' => "Level Up",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ],
            [
                'nom' => "Chèque TIC",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ],
            [
                'nom' => "IA",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ],
            [
                'nom' => "Cyber Sécurité",
                'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nostrum, minima ea quos, nisi distinctio facilis labore iusto necessitatibus quod inventore ad quia velit officiis id numquam. Recusandae ipsum, deleniti cumque tenetur iste dolor, fugit perspiciatis aliquam, ipsam consectetur facilis!",
            ]
        ]);
    }
}

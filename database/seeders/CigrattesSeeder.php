<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CigrattesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
              "name" => 'Classic Blueberries',
              "img_path" => 'https://placehold.co/300x255?text=Classic Blueberries'
            ],
            [
              "name" => 'Coffee Cookie',
              "img_path" => 'https://placehold.co/300x255?text=Coffee Cookie'
            ],
            [
              "name" => 'Vanilla Latte',
              "img_path" => 'https://placehold.co/300x255?text=Vanilla Latte'
            ],
            [
              "name" => 'UME (Limited edition)',
              "img_path" => 'https://placehold.co/300x255?text=UME (Limited Edition)'
            ],
            [
              "name" => 'Menthol',
              "img_path" => 'https://placehold.co/300x255?text=Menthol'
            ],
            [
              "name" => 'Rum',
              "img_path" => 'https://placehold.co/300x255?text=Rum'
            ],
            [
              "name" => 'Cocktail',
              "img_path" => 'https://placehold.co/300x255?text=Cocktail'
            ],
        ];

        foreach ($arr as $value) {
            DB::table('cigrattes')->insert([
                'name' => $value['name'],
                'img_path' => $value['img_path'],
            ]);
        }
    }
}

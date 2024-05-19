<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CigratteTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
          [
            'name' => 'Sweet'
          ],
          [
            'name' => 'Fruity'
          ],
          [
            'name' => 'Alcohol'
          ],
          [
            'name' => 'Mint'
          ],
        ];

        foreach ($arr as $value) {
          DB::table('cigratte_type')->insert([
              'name' => $value['name'],
          ]);
      }
    }
}

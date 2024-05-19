<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CigratteCategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $arr = [
      [
        "cigratte_id" => 1,
        "type_id" => 1,
      ],
      [
        "cigratte_id" => 1,
        "type_id" => 2,
      ],
      [
        "cigratte_id" => 2,
        "type_id" => 1,
      ],
      [
        "cigratte_id" => 3,
        "type_id" => 1,
      ],
      [
        "cigratte_id" => 4,
        "type_id" => 2,
      ],
      [
        "cigratte_id" => 4,
        "type_id" => 4,
      ],
      [
        "cigratte_id" => 5,
        "type_id" => 4,
      ],
      [
        "cigratte_id" => 6,
        "type_id" => 3,
      ],
      [
        "cigratte_id" => 7,
        "type_id" => 3,
      ],
    ];

    foreach ($arr as $value) {
      DB::table('cigratte_categories')->insert([
        'cigratte_id' => $value['cigratte_id'],
        'type_id' => $value['type_id'],
      ]);
    }
  }
}

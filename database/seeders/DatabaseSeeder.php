<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cigrattes;
use App\Models\CigratteType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call(CigrattesSeeder::class);
    $this->call(CigratteTypeSeeder::class);
    $this->call(CigratteCategoriesSeeder::class);
  }
}

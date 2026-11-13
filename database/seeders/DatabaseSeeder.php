<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Mengisi kategori awal toko
        $this->call(CategorySeeder::class);
    }
}

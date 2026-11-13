<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $kategori = [
            'Sembako',
            'Minuman',
            'Makanan Ringan',
            'Kebutuhan Rumah',
        ];

        foreach ($kategori as $nama) {
            Category::firstOrCreate([
                'name' => $nama,
            ]);
        }
    }
}

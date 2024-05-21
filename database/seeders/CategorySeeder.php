<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Keuangan',
            'slug' => 'keuangan',
            'icon' => 'flaticon-money-1'
        ]);
        Category::create([
            'name' => 'Multimedia',
            'slug' => 'multimedia',
            'icon' => 'flaticon-vector'
        ]);
        Category::create([
            'name' => 'Teknologi Informasi',
            'slug' => 'teknologi-informasi',
            'icon' => 'flaticon-web-programming'
        ]);
        Category::create([
            'name' => 'Pemerintahan',
            'slug' => 'pemerintahan',
            'icon' => 'flaticon-man'
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
            'icon' => 'flaticon-first-aid-kit'
        ]);
        Category::create([
            'name' => 'Otomotif',
            'slug' => 'otomotif',
            'icon' => 'flaticon-car'
        ]);
        Category::create([
            'name' => 'Lainnya',
            'slug' => 'lainnya',
        ]);
    }
}

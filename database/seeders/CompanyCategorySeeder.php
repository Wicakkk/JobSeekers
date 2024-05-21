<?php

namespace Database\Seeders;

use App\Models\CompanyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyCategory::create([
            'name' => 'Perusahaan Fashion',
            'slug' => 'perusahaan-fashion'
        ]);
        CompanyCategory::create([
            'name' => 'Perusahaan Kesehatan',
            'slug' => 'perusahaan-kesehatan'
        ]);
        CompanyCategory::create([
            'name' => 'Perusahaan Teknologi',
            'slug' => 'perusahaan-teknologi'

        ]);
        CompanyCategory::create([
            'name' => 'Perusahaan Distributor',
            'slug' => 'perusahaan-distributor'
        ]);
        CompanyCategory::create([
            'name' => 'Perusahaan Lainnya',
            'slug' => 'perusahaan-lainnya'
        ]);
    }
}

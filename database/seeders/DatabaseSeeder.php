<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
            ->has(Jobs::factory()->count(rand(1, 20)))
            ->count(10)
            ->create();

        // // User::factory(3)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'role' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     // 'email_verified_at' => now(),
        //     'password' => '123', // password
        // ]);
        $this->call([

            // User::class,
            CategorySeeder::class,
            CompanyCategorySeeder::class,
        ]);
    }
}

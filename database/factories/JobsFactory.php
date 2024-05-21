<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {        
        return [
            'user_id',
            'category_id',
            'title',
            'slug',
            'location',
            'expiration_date',
            'level_career' => 'senior',
            'salary' => 'Rp10.000.000 - Rp13.000.000',
            'type' => 'Fulltime',
            'body',
        ];
    }
}

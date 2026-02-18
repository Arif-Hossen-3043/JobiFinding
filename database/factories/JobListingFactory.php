<?php

namespace Database\Factories;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobListingFactory extends Factory
{
    protected $model = JobListing::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'salary' => fake()->numberBetween(20000, 100000),
            'description' => fake()->sentence(),
        ];
    }
}

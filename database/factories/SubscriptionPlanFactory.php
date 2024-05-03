<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubscriptionPlan>
 */
class SubscriptionPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'prices' => [
                ['amount' => 100, 'duration' => '1 year'],
                ['amount' => 180, 'duration' => '2 years'],
                ['amount' => 250, 'duration' => '3 years'],
                ['amount' => 320, 'duration' => '4 years'],
            ],
            'association_name' => $this->faker->word,
            'status_id' => 1,
        ];
    }
}

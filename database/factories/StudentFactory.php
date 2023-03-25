<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // memanggil faker
        $faker = faker::create();
        // membuat factory
        return [
            'name' => $faker->name(),
            'gender' => Arr::random(['L','P']),
            'nis' => mt_rand(0000005,9999999),
            'class_Id' => Arr::random([1,2,3,4])
        ];
    }
}

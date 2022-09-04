<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$name = $this->faker->company,
            'address'=>$name = $this->faker->address,
            'website'=>$name = $this->faker->domainName,
            'email'=>$name = $this->faker->email,
        ];
    }
}

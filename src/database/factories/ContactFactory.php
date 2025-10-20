<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Contact::class;

    public function definition()
    {
        return [
        'first_name'=> $this->faker->firstName,
        'last_name'=> $this->faker->lastName,
        'gender'=> $this->faker->numberBetween(0, 2),
        'email'=> $this->faker->unique()->safeEmail(),
        'tel'=> $this->faker->phoneNumber,
        'address'=> $this->faker->address,
        'building'=> $this->faker->secondaryAddress,
        'category_id' => Category::inRandomOrder()->first()->id, // categoriesテーブルのidを参照
        'detail'=> $this->faker->paragraph(),
        'created_at' => now(),
        'updated_at' => now(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title(),        
            'excerpt'=>$this->faker->sentence(),        
            'body'=>$this->faker->paragraph(),        
            'slug'=>$this->faker->slug(),        
            'user_id'=>User::factory(),        
            'genre_id'=>Genre::factory()        
        ];
    }
}

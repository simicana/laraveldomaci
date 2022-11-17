<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Genre;
use App\Models\Book;
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
        Genre::truncate();
        User::truncate();
        Book::truncate();


        Book::factory(5)->create();

        $user = User::factory()->create();
        $genre1 = Genre::factory()->create();
        $genre2 = Genre::factory()->create();

        Book::factory(5)->create([
            'user_id'=>$user->id,
            'genre_id'=>$genre1->id,
        ]);
        Book::factory(2)->create([
            'user_id'=>$user->id,
            'genre_id'=>$genre2->id,
        ]);


        }
    }

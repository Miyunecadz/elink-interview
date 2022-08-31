<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'Star Wars Trilogy (Widescreen Edition)',
            'category' => 'action_and_adventure',
            'description' => 'Price: 100PHP & eligible for FREE Super Saver Shipping.',
            'price' => 100,
            'image_location' => 'photo_1.jpg'
        ]);

        Movie::create([
            'title' => 'Batman - The Animated Series',
            'category' => 'anime_and_manga',
            'description' => 'Price: 150PHP & eligible for FREE Super Saver Shipping.',
            'price' => 150,
            'image_location' => 'photo_4.jpg'
        ]);

        Movie::create([
            'title' => 'Harry Potter and the Prisoner of Azkaban',
            'category' => 'action_and_adventure',
            'description' => 'Price: 250PHP & eligible for FREE Super Saver Shipping.',
            'price' => 250,
            'image_location' => 'photo_2.jpg'
        ]);

        Movie::create([
            'title' => 'Blade - Trinity (New Platinum Series)',
            'category' => 'action_and_adventure',
            'description' => 'Price: 115PHP & eligible for FREE Super Saver Shipping.',
            'price' => 115,
            'image_location' => 'photo_5.jpg'
        ]);

        Movie::create([
            'title' => 'Million Dollar Baby (Widescreen Edition)',
            'category' => 'action_and_adventure',
            'description' => 'Price: 105PHP & eligible for FREE Super Saver Shipping.',
            'price' => 105,
            'image_location' => 'photo_3.jpg'
        ]);

        Movie::create([
            'title' => 'The Matrix Reloaded (Full Screen Edition)',
            'category' => 'action_and_adventure',
            'description' => 'Price: 75PHP & eligible for FREE Super Saver Shipping.',
            'price' => 75,
            'image_location' => 'photo_6.jpg'
        ]);
    }
}

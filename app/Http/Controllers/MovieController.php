<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->category;
        $title = $request->title;
        $movies = '';


        // Check if category has value
        if ($category) {
            // If category has value check if category value is all
            if ($category == 'all') {
                // If category value is all, return all movies
                $movies = Movie::all();
            } else {
                // Or else return the expected movie category
                $movies = Movie::where('category', $category)->get();
            }

            // If title has value
            if ($title && $category !== 'all') {
                // It will return the movie category also the specific movie title
                $movies = Movie::where('category', $category)->where('title', 'LIKE', '%' . $title . '%')->get();
            }
        } else {
            $movies = Movie::all();
        }


        return view('dashboard', [
            'movies' => $movies
        ]);
    }
}

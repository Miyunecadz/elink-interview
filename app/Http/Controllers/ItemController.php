<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Movie;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        $total = 0;

        foreach ($items as $item) {
            $total += $item->price * $item->quantity;
        }

        return view('cart', [
            'items' => $items,
            'total' => $total
        ]);
    }

    public function add(Request $request)
    {
        $movie = Movie::find($request->movie_id);

        $item = Item::where('title', $movie->title)->first();

        if ($item) {
            $item->quantity += 1;
            $item->save();
        } else {
            Item::create([
                'title' => $movie->title,
                'price' => $movie->price,
                'quantity' => 1
            ]);
        }

        return back();
    }

    public function remove(Item $item)
    {
        $item->delete();
        return back();
    }
}

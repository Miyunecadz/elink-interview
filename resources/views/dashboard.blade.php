@extends('layout.app')

@section('content')
    @include('layout.navbar')
    <img src="{{ asset('images/landscape-poster-3_orig.jpg') }}" width="100%" height="400" alt="" srcset="">

    <div class="row">
        <div class="col-md-4 mx-1 my-1">

            {{-- All Category Area --}}
            <div class="bg-danger text-light text-center">
                <h5 class="py-2">Full Category Lists</h5>
                <ul class="list-group rounded-0">
                    <li class="list-group-item"><a
                            href="{{ route('index', ['category' => 'action_and_adventure']) }}">Action
                            and Adventure</a> </li>
                    <li class="list-group-item"><a href="{{ route('index', ['category' => 'anime_and_manga']) }}">Anime and
                            Manga</a> </li>
                    <li class="list-group-item"><a
                            href="{{ route('index', ['category' => 'art_house_and_international']) }}">Art House and
                            International</a> </li>
                    <li class="list-group-item"><a href="{{ route('index', ['category' => 'classics']) }}">Classics</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('index', ['category' => 'comedy']) }}">Comedy</a> </li>
                    <li class="list-group-item"><a href="{{ route('index', ['category' => 'cult_movies']) }}">Cult
                            Movies</a> </li>
                    <li class="list-group-item"><a href="">Drama</a> </li>
                    <li class="list-group-item"><a href="">New and Future Releases</a> </li>
                    <li class="list-group-item"><a href="">Horror</a> </li>
                    <li class="list-group-item"><a href="">Musicals</a> </li>
                    <li class="list-group-item"><a href="">Mystery And Suspense</a> </li>
                    <li class="list-group-item"><a href="">Science Fiction and Fantasy</a> </li>
                    <li class="list-group-item"><a href="">Westerns</a> </li>
                </ul>
            </div>
            {{-- End of All Category Area --}}

            {{-- Search Category Area --}}
            <div class="bg-danger text-light text-center mt-2">
                <h5 class="py-2">Search Your Favourite Movie</h5>
                <form action="" class="bg-light p-2" method="get">
                    <select name="category" id="category" class="form-select mt-1">
                        <option value="" disabled>Select one</option>
                        <option value="all">All</option>
                        <option value="action_and_adventure">Action and Adventure</option>
                        <option value="anime_and_manga">Anime and Manga</option>
                        <option value="">Art House and International</option>
                        <option value="">Classics</option>
                        <option value="">Action and Adventure</option>
                        <option value="">Action and Adventure</option>
                        <option value="">Action and Adventure</option>
                        <option value="">Action and Adventure</option>
                        <option value="">Action and Adventure</option>
                        <option value="">Action and Adventure</option>
                    </select>

                    <input type="text" name="title" id="title" class="form-control my-1" placeholder="DVD Title">
                    <button type="submit" class="my-1 btn btn-danger text-light">Search</button>
                </form>
            </div>
            {{-- End of Searchs Category Area --}}

        </div>
        <div class="col-md my-2 mx-2 border py-2">
            <div class="row">
                @forelse ($movies as $movie)
                    <div class="col-sm-6 my-2">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title text-center">{{ $movie->title }}</h6>
                                <div class="row gap-2">
                                    <div class="col">
                                        <img src="{{ asset("images/$movie->image_location") }}" height="80" alt="">
                                    </div>
                                    <div class="col-6">
                                        <div class="my-1">
                                            {{ $movie->description }}
                                        </div>
                                        <form action="{{ route('add') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                                            <button type="submit" class="btn btn-outline-primary">Add to Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    No Movies Found
                @endforelse
            </div>
        </div>
    </div>
@endsection

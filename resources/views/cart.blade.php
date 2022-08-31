@extends('layout.app')

@section('content')
    @include('layout.navbar')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <th>{{ $item->title }}</th>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
                        <form action="{{ route('delete', ['item' => $item]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">No Item on cart</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    <h6>Total: {{ $total }}</h6>
@endsection

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="pb-3">Movie Database</h1>

    <div class="row row-cols-5 g-3">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card h-100 p-2">
                <h4>{{$movie->title}}</h3>
                    <div><strong>Nationality</strong>. {{$movie->nationality}}</div>
                    <div><strong>Date</strong>. {{$movie->date}}</div>
            </div>
        </div>
        @empty
        <div>No movie founded!</div>
        @endforelse
    </div>
</div>
@endsection
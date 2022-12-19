<?php
function getVote($vote)
{
    return round($vote / 2);
}
?>

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="pb-3">Movie Database</h1>

    <div class="row row-cols-5 g-3">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-top">
                    <img src="{{$movie->image}}" alt="{{$movie->title}}" class="w-100">
                    <p class="bg-dark text-light m-0 p-2">{{$movie->description}}</p>
                </div>

                <div class="card-body">
                    <h4 class="card-text">{{$movie->title}}</h4>
                    <div><strong>Nationality</strong>: {{$movie->nationality}}</div>
                    <div><strong>Date</strong>: {{$movie->date}}</div>
                    <div><strong>Vote</strong>:
                        @for($i = 0; $i < getVote($movie->vote); $i++) <i class="fa-solid fa-star"></i> @endfor
                            @for($i = getVote($movie->vote); $i < 5; $i++) <i class="fa-regular fa-star"></i> @endfor
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div>No movie founded!</div>
        @endforelse
    </div>
</div>
@endsection
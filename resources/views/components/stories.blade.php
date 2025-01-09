@extends('layout.app')

@section('content')

<h2>Stories</h2>

<a href="{{ route('stories.viewaddstory') }}" class="btn btn-info">Add Story</a></p>

<div class="flex-wrap row d-flex">

    @foreach ($stories as $story)
       <div class="p-3 col-md-4">
        <div class="card member-card">
            <div class="card-body">
                <h5 class="card-title">{{$story['title']}}</h5>
                <p class="card-text">
                    <strong>Author:</strong>  {{$story->member->name}}<br>
                    <strong>Story:</strong>  {{$story['story']}}<br>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

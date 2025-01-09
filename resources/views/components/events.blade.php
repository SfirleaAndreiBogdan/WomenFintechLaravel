@extends('layout.app')

@section('content')

<h2>Events</h2>

<a href="{{ route('events.viewaddstory') }}" class="btn btn-info">Add Story</a>

<div class="flex-wrap row d-flex">

    @foreach ($events as $event)
       <div class="p-3 col-md-4">
        <div class="card member-card">
            <div class="card-body">
                <h5 class="card-title">{{$event['name']}}</h5>
                <p class="card-text">
                    <strong>Description:</strong>  {{$event['description']}}<br>
                    <strong>Event Date:</strong>  {{$event['event_date']}}<br>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

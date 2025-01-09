@extends('layout.app')

@section('content')
<h2>Add Event</h2>
<form action="{{ route('events.addevent') }}" method="POST" class="p-4 border rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Event Name:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>

    <div class="mb-3">
        <label for="event_date" class="form-label">Event Date:</label>
        <input type="date" name="event_date" id="event_date" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Add Story</button>
</form>
@endsection

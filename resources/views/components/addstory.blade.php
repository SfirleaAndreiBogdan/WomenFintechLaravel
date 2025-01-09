@extends('layout.app')

@section('content')
<h2>Register</h2>
<form action="{{ route('stories.view') }}" method="POST" class="p-4 border rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="story" class="form-label">Story</label>
        <input type="text" name="story" id="story" value="{{ old('story') }}" class="form-control">
        @error('story')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="member_id" class="form-label">Member</label>
        <select name="member_id" id="member_id" class="form-control">
            @foreach($members as $member)
                <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Add Story</button>
</form>
@endsection

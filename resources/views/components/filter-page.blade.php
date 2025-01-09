@extends('layout.app')

@section('content')

<div class="flex-wrap row d-flex">
    @if($members->isNotEmpty())
    <h2>Members Found:</h2>
        @foreach ($members as $member)
            <div class="p-3 col-md-4">
                <div class="card member-card">
                    <div class="card-body">
                        <h5 class="card-title">{{$member['name']}}</h5>
                        <p class="card-text">
                            <strong>Profession:</strong>  {{$member['profession']}}<br>
                            <strong>Company:</strong> {{$member['company']}}<br>
                            <strong>Linkedin:</strong> {{$member['linkedin_url']}}<br>
                            <strong>Status:</strong> {{$member['status']}}<br>

                            <a href="{{ route('members.edit', $member['id']) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('members.delete', $member['id']) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No member was found.</p>
    @endif
</div>

@endsection

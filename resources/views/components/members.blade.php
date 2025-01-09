@extends('layout.app')

@section('content')

<h2>Members</h2>

@include('components.filter')

<a href="{{ route('members.export') }}" class="btn btn-success">Export members</a>


<div class="flex-wrap row d-flex">

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
                    <a href="{{ route('members.delete', $member['id']) }} " class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-3 d-flex justify-content-center">
    {{ $members->links() }}
</div>

@endsection

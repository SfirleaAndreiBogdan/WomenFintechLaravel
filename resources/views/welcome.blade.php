
@extends('layout.app')

@section('content')
    <div class="text-center jumbotron">
        <h1>Welcome to Women Fintech!</h1>
        <p>Empowering women in the world of finance.</p>
        <a href="{{ route('members.view') }}" class="btn btn-primary btn-lg">Join Now</a>
    </div>
@endsection

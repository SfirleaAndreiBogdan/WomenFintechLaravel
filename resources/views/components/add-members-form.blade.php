@extends('layout.app')

@section('content')
<h2>Register</h2>
<form action="{{ route('members.store') }}" method="POST" class="p-4 border rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="profession" class="form-label">Profession</label>
        <input type="text" name="profession" id="profession" value="{{ old('profession') }}" class="form-control">
        @error('profession')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="company" class="form-label">Company</label>
        <input type="text" name="company" id="company" value="{{ old('company') }}" class="form-control">
        @error('company')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="linkedin_url" class="form-label">Linkedin_url</label>
        <input type="text" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url') }}" class="form-control">
        @error('linkedin_url')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

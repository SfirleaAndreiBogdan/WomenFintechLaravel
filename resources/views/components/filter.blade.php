<form action="{{ route('members.find') }}" method="GET">

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="profession" class="form-label">Profession</label>
        <input type="text" name="profession" id="profession" value="{{ old('profession') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="company" class="form-label">Company</label>
        <input type="text" name="company" id="company" value="{{ old('company') }}" class="form-control">
    </div>

    <div class="mb-3">
        <label for="linkedin_url" class="form-label">Linkedin_url</label>
        <input type="text" name="linkedin_url" id="linkedin_url" value="{{ old('linkedin_url') }}" class="form-control">
    </div>


    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="" disabled selected>Select status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Search</button>
</form>

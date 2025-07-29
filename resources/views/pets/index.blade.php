@include('layout.header')

<h2>Pet List</h2>
<a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">Add New Pet</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Owner Info</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->type }}</td>
            <td>{{ $pet->breed }}</td>
            <td>{{ $pet->age }}</td>
            <td>{{ $pet->owner_info }}</td>
            <td>
                <a href="{{ route('pets.edit', $pet) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pets.destroy', $pet) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@include('layout.footer')
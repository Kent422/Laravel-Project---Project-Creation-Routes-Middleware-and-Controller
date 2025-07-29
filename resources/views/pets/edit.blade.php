@include('layout.header')

<h2>Edit Pet</h2>
<form action="{{ route('pets.update', $pet) }}" method="POST">
    @csrf
    @method('PUT')
    @include('pets.form', ['pet' => $pet])
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@include('layout.footer')

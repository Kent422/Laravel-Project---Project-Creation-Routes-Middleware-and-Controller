@include('layout.header')

<h2>Add New Pet</h2>
<form action="{{ route('pets.store') }}" method="POST">
    @csrf
    @include('pets.form')
    <button type="submit" class="btn btn-success">Save</button>
</form>

@include('layout.footer')

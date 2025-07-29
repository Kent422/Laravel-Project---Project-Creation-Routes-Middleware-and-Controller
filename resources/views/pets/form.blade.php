<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $pet->name ?? '') }}">
</div>

<div class="mb-3">
    <label>Type/Species</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $pet->type ?? '') }}">
</div>

<div class="mb-3">
    <label>Breed</label>
    <input type="text" name="breed" class="form-control" value="{{ old('breed', $pet->breed ?? '') }}">
</div>

<div class="mb-3">
    <label>Age</label>
    <input type="number" name="age" class="form-control" value="{{ old('age', $pet->age ?? '') }}">
</div>

<div class="mb-3">
    <label>Owner Info</label>
    <input type="text" name="owner_info" class="form-control" value="{{ old('owner_info', $pet->owner_info ?? '') }}">
</div>

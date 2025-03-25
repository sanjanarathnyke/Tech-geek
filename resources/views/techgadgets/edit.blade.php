<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Tech Gadget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Tech Gadget</h2>
        <a href="{{ route('techgadgets.index') }}" class="btn btn-secondary mb-3">Back</a>

        <form action="{{ route('techgadgets.update', $gadget->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Gadget Name</label>
                <input type="text" name="name" class="form-control" value="{{ $gadget->name }}" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" value="{{ $gadget->brand }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $gadget->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price ($)</label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $gadget->price }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update Gadget</button>
        </form>
    </div>
</body>

</html>

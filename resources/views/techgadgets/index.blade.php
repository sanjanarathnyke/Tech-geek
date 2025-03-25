<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tech Gadgets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Tech Gadgets</h2>
        <a href="{{ route('techgadgets.create') }}" class="btn btn-primary">Add Gadget</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gadgets as $gadget)
                <tr>
                    <td>{{ $gadget->name }}</td>
                    <td>{{ $gadget->brand }}</td>
                    <td>{{ $gadget->description }}</td>
                    <td>${{ $gadget->price }}</td>
                    <td>
                        <a href="{{ route('techgadgets.edit', $gadget->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('techgadgets.delete', $gadget->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

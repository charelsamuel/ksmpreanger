<x-admin>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>

    <a href="/admin/product" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i> Back</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="/admin/product/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" value="{{ old('description') }}" name="description">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Price" value="{{ old('price') }}" name="price">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control" id="link" placeholder="Link" value="{{ old('link') }}" name="link">
        </div>
        <div class="form-group">
            <label for="price">Popular</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="isPopular" value="1" name="isPopular">
                <label for="isPopular" class="form-check-label">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="isPopular" value="0" name="isPopular">
                <label for="isPopular" class="form-check-label">No</label>
            </div>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" placeholder="Image" value="{{ old('image') }}" name="image">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</x-admin>
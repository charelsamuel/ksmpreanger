<x-admin>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Product</h1>
    </div>

    <a href="/product" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i> Back</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        Validation Error!
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="/product/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Price" name="price">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control" id="link" placeholder="Link" name="link">
        </div>
        <div class="form-group">
            <label for="img_preview">Image Preview</label>
            <input type="file" class="form-control-file" id="img_preview" placeholder="Image Preview" name="img_preview">
        </div>
        <div class="form-group">
            <label for="img_content">Image Content</label>
            <input type="file" class="form-control-file" id="img_content" placeholder="Image Content" name="img_content">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin>

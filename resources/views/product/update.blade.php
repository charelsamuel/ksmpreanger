<x-admin>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update product: {{$product->id}}</h1>
    </div>

    <a href="/admin/product/{{$product->id}}" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"> Back</i></a>

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

    <form action="/admin/product/update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{$product->id}}">
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Produk</label>
            <input type="text" class="form-control" id="description" placeholder="Deskripsi Produk" name="description" value="{{$product->description}}">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" class="form-control" id="price" placeholder="Harga Produk" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" placeholder="Link Produk" name="link" value="{{$product->link}}">
        </div>
        <div class="form-group">
            <label for="price">Popular</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="isPopular" value="1" name="isPopular" @if ($product->isPopular) checked @endif>
                <label for="isPopular" class="form-check-label">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="isPopular" value="0" name="isPopular" @if (!$product->isPopular) checked @endif>
                <label for="isPopular" class="form-check-label">No</label>
            </div>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" placeholder="Image" name="image">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</x-admin>
<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Gallery</h1>
  </div>

  <a href="/admin/gallery" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"> Back</i></a>
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

  <form action="/admin/gallery/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}" name="title">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-admin>
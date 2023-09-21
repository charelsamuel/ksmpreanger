<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create News</h1>
  </div>

  <a href="/admin/news" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"> Back</i></a>
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

  <form action="/admin/news/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}" name="title">
    </div>
    <div class="form-group">
      <label for="preview">Preview</label>
      <input type="text" class="form-control" id="preview" placeholder="Preview" value="{{ old('preview') }}" name="preview">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control content" id="content" rows="3" name="content" value="{{ old('content') }}"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</x-admin>
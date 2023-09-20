<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update News: {{$news->id}}</h1>
  </div>

  <a href="/admin/news" class="btn btn-primary mb-3"><i class="fas fa-plus"> Back</i></a>

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

  <form action="/admin/news/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="hidden" name="id" value="{{$news->id}}">
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$news->title}}">
    </div>
    <div class="form-group">
      <label for="preview">Preview</label>
      <input type="text" class="form-control" id="preview" placeholder="Preview" name="preview" value="{{$news->preview}}">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control content" id="content" rows="3" name="content">
      {{$news->content}}
      </textarea>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-admin>
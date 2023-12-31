<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Testimonial</h1>
  </div>

  <a href="/admin/testimonial" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"> Back</i></a>
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

  <form action="/admin/testimonial/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="testi">Testimonials</label>
      <textarea class="form-control" id="testi" rows="3" name="testi"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-admin>
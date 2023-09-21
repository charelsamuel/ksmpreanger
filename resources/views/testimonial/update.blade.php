<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Testimonial: {{$testimonial->id}}</h1>
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

  <form action="/admin/testimonial/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <input type="hidden" name="id" value="{{$testimonial->id}}">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Update Name" name="name" value="{{$testimonial->name}}">
    </div>
    <div class="form-group">
      <label for="testi">Testimonial</label>
      <input type="text" class="form-control" id="testi" placeholder="Testimonials" name="testi" value="{{$testimonial->testi}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-admin>
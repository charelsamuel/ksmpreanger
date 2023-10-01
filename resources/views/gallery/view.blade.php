<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gallery: {{ $gallery->id }}</h1>
  </div>

  <a href="/admin/gallery" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"> Back</i></a>
  <a href="/admin/gallery/update-form/{{$gallery->id}}" class="btn btn-success mb-3"><i class="fas fa-edit"> Update</i></a>
  <a href="#" class="btn btn-danger mb-3" id="delete"><i class="fas fa-trash"> Delete</i></a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <td id="gallery-id">{{ $gallery->id }}</td>
          </tr>
          <tr>
            <th>Title</th>
            <td>{{ $gallery->title }}</td>
          </tr>
          <tr>
            <th>Image</th>
            <td><img src="/images/gallery/{{$gallery->id}}.{{$gallery->imageExtension}}" class="img-fluid" alt="{{$gallery->id}}"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  @push('scripts')
  <script type="text/javascript">
    $(document).on("click", "#delete", (e) => {
      e.preventDefault(e);
      var id = $('#gallery-id').text();

      if (confirm('Are you sure want to delete?')) {
        $.post("/admin/gallery/delete", {
            id: id,
            _token: "{{ csrf_token() }}"
          })
          .done(function(data) {
            alert("Data deleted");
            location.replace('/admin/gallery')
          });
      }
    });
  </script>
  @endpush

</x-admin>
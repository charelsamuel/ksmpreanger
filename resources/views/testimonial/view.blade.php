<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimonial: {{ $testimonial->id }}</h1>
  </div>

  <a href="/testimonial" class="btn btn-primary mb-3"><i class="fas fa-plus"> Back</i></a>
  <a href="/testimonial/update-form/{{$testimonial->id}}" class="btn btn-success mb-3"><i class="fas fa-plus"> Update</i></a>
  <a href="#" class="btn btn-danger mb-3" id="delete"><i class="fas fa-plus"> Delete</i></a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <td id="testimonial-id">{{ $testimonial->id }}</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>{{ $testimonial->name }}</td>
          </tr>
          <tr>
            <th>Testimonials</th>
            <td>{{ $testimonial->testi }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  @push('scripts')
  <script type="text/javascript">
    $(document).on("click", "#delete", (e) => {
      e.preventDefault(e);
      var id = $('#testimonial-id').text();

      if (confirm('Are you sure want to delete?')) {
        $.post("/testimonial/delete", {
            id: id,
            _token: "{{ csrf_token() }}"
          })
          .done(function(data) {
            alert("Data deleted");
            location.replace('/testimonial')
          });
      }
    });
  </script>
  @endpush

</x-admin>
